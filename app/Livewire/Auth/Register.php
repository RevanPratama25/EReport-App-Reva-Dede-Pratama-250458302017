<?php

namespace App\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Livewire\Component;

class Register extends Component
{
    /** @var string */
    public $whatsapp = '';

    /** @var string */
    public $alamat = '';

    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var string */
    public $passwordConfirmation = '';

    public function register()
    {
        $this->validate([
            'email' => ['required', 'email', 'unique:users'],
            'whatsapp'=> ['required'],
            'alamat'=>['required'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
        ]);

        $user = User::create([
            'email' => $this->email,
            'whatsapp' => $this->whatsapp,
            'alamat' => $this->alamat,
            'password' => Hash::make($this->password),
        ]);

        event(new Registered($user));

        Auth::login($user, true);

        return redirect()->intended(route('warga.index'));
    }

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.auth');
    }
}
