# EReport-App-Reva-Dede-Pratama-250458302017
1st Semester Software Engineering Major Project Task at IDN Polytechnic, Jonggol, Bogor, West Java, Indonesia.


## 💡 Project Description

The **EReport-App** is a digital platform designed to facilitate citizens in reporting problems, complaints, or issues encountered in their daily lives directly to the government or relevant authorities. The application aims to enhance transparency and expedite the resolution process for public reports. This project is Using Indonesian Language.

## 🛠️ Technologies Used

This project is built using the **TALL Stack**, which is an acronym for:
* **T**ailwind CSS (For UI/UX design)
* **A**lpine.js (For lightweight JavaScript interactivity)
* **L**aravel (The primary *backend* framework)
* **L**ivewire (For dynamic *full-stack* components)

## 🚀 Getting Started & Installation Guide

Follow these steps to run this project in your local environment.

### Prerequisites

Ensure you have the following installed on your system:
* PHP (version 8.0 or higher)
* Composer
* Node.js and npm
* A database (MySQL/MariaDB is recommended)

### Step-by-Step Installation

1.  **Clone the Repository:**
    Open your Terminal/Command Prompt and clone the source code:
    ```bash

    git clone https://github.com/RevanPratama25/EReport-App-Reva-Dede-Pratama-250458302017.git
   
2.  **Install PHP Dependencies:**
    Install all required PHP packages using Composer:
    ```bash
    composer install
    ```

3.  **Configure the Environment:**
    Copy the example environment file and generate the application key:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    (Remember to set your database credentials in the `.env` file.)

4.  **Run Database Migrations:**
    Run the migrations to create the database tables:
    ```bash
    php artisan migrate
    ```

5.  **Install Frontend Dependencies (Node.js):**
    Install the frontend packages (like Tailwind CSS) using npm:
    ```bash
    npm install
    ```

6.  **Compile Assets and Run the Server:**
    You will need to open **two separate terminal** sessions:

    **Terminal 1 (For Assets):**
    Run the development watcher to compile CSS/JS as you make changes:
    ```bash
    npm run dev
    ```

    **Terminal 2 (For the Laravel Server):**
    Run the Laravel application server:
    ```bash
    php artisan serve
    ```

The application is now accessible via your browser at `http://127.0.0.1:8000` (or the port indicated).
