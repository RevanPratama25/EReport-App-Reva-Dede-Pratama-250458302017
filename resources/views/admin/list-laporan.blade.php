@extends('layouts.dashboard')

@section('judul', 'dashboard')
@section('content')
<div class="w-full h-screen bg-white">
    <section>
       @livewire('card-body')
    </section>
    <section>
       @livewire('list-laporan-admin')
    </section>
    
</div>
    
   
@endsection