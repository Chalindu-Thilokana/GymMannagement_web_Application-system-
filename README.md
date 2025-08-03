# 💪 Gym Management System

A powerful and flexible Gym Management System built with Laravel 10, Jetstream, Livewire, and SweetAlert. This system allows members and trainers to register, lets admins manage users, payments, and assign trainers with ease.

---

## 📚 Table of Contents

- [Tech Stack](#-tech-stack)
- [Features](#-features)
- [Roles](#-user-roles)
- [Requirements](#-system-requirements)
- [Installation](#-installation)
- [Usage](#-usage)
- [Folder Structure](#-folder-structure)
- [Authentication & Roles](#-authentication--roles)
- [Future Improvements](#-future-improvements)
- [License](#-license)
- [Author](#-author)

---

## 🚀 Tech Stack

- Laravel 10
- Jetstream (Livewire)
- Livewire 3
- Laravel Sanctum
- Tailwind CSS
- SweetAlert2 (via realrashid/sweet-alert)
- MySQL or MariaDB

---

## 🔑 Features

### 👥 For Members:
- Register and log in
- View assigned trainer
- View personal workout schedules
- Make and view payment history

### 🧑‍🏫 For Trainers:
- Register and log in
- View assigned members
- Create/edit workout schedules
- Manage training plans

### 👨‍💼 For Admins:
- Register/manage members and trainers
- Assign trainers to members
- Track and manage payments
- View schedules and plans
- SweetAlert-based success/error notifications

---

## 🧾 User Roles

- **Admin**: Full access to manage members, trainers, payments, and assignments.
- **Trainer**: Access to their assigned members, can create and manage workout plans and schedules.
- **Member**: View assigned trainer, schedule, and payment records.

---

## 🖥️ System Requirements

- PHP >= 8.1
- Composer
- Node.js and NPM
- MySQL or compatible database

---

## 🧪 Installation

```bash
git clone https://github.com/yourusername/gym-management.git
cd Gym-final

# Install dependencies
composer install
npm install && npm run build

# Setup environment
cp .env.example .env
php artisan key:generate

# Configure .env with DB settings
php artisan migrate --seed

# Start the server
php artisan serve
