# project-pengaduan-masyarakat-rian-fikri-hafiz-250458302040

Aplikasi Sistem Informasi Pelaporan dan Pengaduan Masyarakat.

## 💡 Deskripsi Proyek

Aplikasi **Pengaduan Masyarakat** adalah sebuah platform digital yang dirancang untuk memfasilitasi warga dalam melaporkan masalah, keluhan, atau isu-isu yang ditemukan dalam kehidupan sehari-hari secara langsung kepada pihak pemerintah atau instansi terkait. Tujuannya adalah menciptakan transparansi dan mempercepat proses tindak lanjut atas laporan publik.

## 🛠️ Teknologi yang Digunakan

Proyek ini dibangun menggunakan **TALL Stack**, yang merupakan singkatan dari:

* **T**ailwind CSS (Untuk desain antarmuka)
* **A**lpine.js (Untuk interaktivitas JavaScript yang ringan)
* **L**aravel (Framework utama untuk *backend*)
* **L**ivewire (Untuk komponen *full-stack* yang dinamis)

## 🚀 Panduan Instalasi dan Menjalankan Proyek (Setup Rigoris)

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di localhost anda.

### Pra-syarat (Prerequisite)

Pastikan git add sudah menginstal:
* PHP (versi 8.0 atau lebih tinggi)
* Composer
* Node.js dan npm
* Database (MySQL/MariaDB disarankan)

### Langkah-langkah

1.  **Kloning Repositori:**
    Buka Terminal/Command Prompt, lalu *clone* kode sumber:
    ```bash
    git clone [GANTI_DENGAN_URL_REPOSITORI_anda]
    cd project-pengaduan-masyarakat
    ```

2.  **Instalasi Dependencies PHP:**
    Instal semua paket PHP yang diperlukan menggunakan Composer:
    ```bash
    composer install
    ```

3.  **Konfigurasi Environment:**
    Salin *file* environment contoh dan buat kunci aplikasi:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    (Jangan lupa atur kredensial database di *file* `.env`.)

4.  **Migrasi Database:**
    Jalankan migrasi untuk membuat tabel-tabel database:
    ```bash
    php artisan migrate
    ```

5.  **Instalasi Dependencies Frontend (Node.js):**
    Instal paket frontend (seperti Tailwind CSS) menggunakan npm:
    ```bash
    npm install
    ```

6.  **Kompilasi dan Jalankan Server:**
    Buka **dua terminal** yang berbeda:

    **Terminal 1 (Untuk *Assets*):**
    Jalankan *watcher* untuk mengompilasi CSS/JS saat anda melakukan perubahan:
    ```bash
    npm run dev
    ```

    **Terminal 2 (Untuk Server Laravel):**
    Jalankan server aplikasi Laravel:
    ```bash
    php artisan serve
    ```

Aplikasi kini dapat diakses melalui browser di alamat `http://127.0.0.1:8000` (atau port lain yang ditunjukkan).

