# Larapics

Larapics is a lightweight Laravel-based photo sharing and browsing
platform inspired by modern gallery layouts. It allows users to explore
high‑quality images, view detailed photo information, interact through
likes and favorites, and download images. The platform offers a clean
interface with smooth navigation and responsive grid layouts.

------------------------------------------------------------------------

## 📌 Features

### 🖼 Image Gallery

-   Masonry-style responsive gallery layout.
-   High-resolution photo previews.
-   Fast image loading and optimized display.

### 👤 Photographer Profiles

-   Dedicated profile page for each uploader.
-   Display of total uploaded images.
-   Public-facing user cards with avatar, name, and uploaded photos.

### ❤️ Interactions

-   Like photos directly from the gallery or photo page.
-   Favorite/Bookmark photos for later viewing.
-   Photo download button with integrated counters.

### 📄 Photo Details Page

-   Full-size image preview.
-   Upload timestamp.
-   Dimensions metadata (e.g., 1920×2560).
-   View count and download statistics.
-   Clean sidebar with interactions and metadata.

### 🔐 Authentication

-   User registration and login.
-   Access to upload images (if enabled).
-   Persistent user sessions.

### 💻 Responsive UI

-   Fully responsive and optimized for desktop and mobile.
-   Minimalistic and clean UI/UX for better browsing experience.

------------------------------------------------------------------------

## 🛠 Technologies Used

**Front-End:**\
HTML, CSS, JavaScript

**Back-End:**\
PHP, Laravel

**Database:**\
MySQL

**Other:**\
Blade Templating, Laravel Auth, Responsive Image Grid

------------------------------------------------------------------------

## 📂 Project Structure (Overview)

    larapics/
    │── app/
    │   ├── Http/Controllers/
    │   ├── Models/
    │   └── ...
    │── resources/
    │   ├── views/
    │   ├── layouts/
    │   └── gallery/
    │── public/
    │   ├── images/
    │   ├── css/
    │   └── js/
    │── routes/
    │   └── web.php
    │── database/
    │   └── migrations/
    │── .env.example
    └── README.md

------------------------------------------------------------------------

## ⚙️ Installation & Setup

### 1️⃣ Clone the Repository

    git clone https://github.com/mamoun-tabak/larapics
    cd larapics

### 2️⃣ Install Dependencies

    composer install
    npm install
    npm run build

### 3️⃣ Environment Configuration

    cp .env.example .env

Update your database settings inside `.env`:

    DB_DATABASE=larapics
    DB_USERNAME=root
    DB_PASSWORD=

Generate the app key:

    php artisan key:generate

### 4️⃣ Migrate the Database

    php artisan migrate

### 5️⃣ Run the Application

    php artisan serve

------------------------------------------------------------------------

## 🚀 Future Enhancements

-   User album creation\
-   Advanced search and filtering\
-   Image upload with compression\
-   Infinite scroll gallery\
-   Comments and photo tagging

------------------------------------------------------------------------

## 📜 License

This project is built for educational and portfolio purposes.

------------------------------------------------------------------------

## ✉️ Contact

**Developer:** Mamoun Turki Tabak\
Email: mamountabak64@gmail.com\
GitHub: https://github.com/mamoun-tabak
