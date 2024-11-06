<div align="center">

![HandyHelper Logo](./images/logo.png)  
[![Powered by Laravel](https://img.shields.io/badge/Framework-Laravel-FF2D20.svg)](https://laravel.com/)
[![Project Stage](https://img.shields.io/badge/Status-In%20Development-orange.svg)](https://github.com/yourusername/HandyHelper/commits/main)
![Documentation](https://img.shields.io/badge/Documentation-WIP-blue.svg)
![Supported Language](https://img.shields.io/badge/Language-English-green.svg)

</div>

---

<div align="center">

**[VISION](#-vision) •
[FEATURE HIGHLIGHTS](#-feature-highlights) •
[DATA MODEL](#-data-model) •
[INSTALLATION](#-installation)**

</div>

---

# 🌟 Vision

**HandyHelper** is built to revolutionize how clients find, book, and interact with local service professionals. By focusing on accessibility, transparency, and quality, our platform is a one-stop solution for anyone needing trusted handymen, from electricians to landscapers.

Whether you’re a homeowner in need of quick repairs or a handyman looking for steady client leads, HandyHelper makes it easy, reliable, and efficient. We aim to build a digital community where everyone can connect with confidence.

# 🚀 Feature Highlights

### Admin Dashboard

Our comprehensive admin panel enables platform management with ease and control:

-   **Service Approval**: Review and approve handyman profiles and listings.
-   **User Management**: Oversee both client and handyman accounts.
-   **Analytics**: Monitor platform activity, service demand, and performance through actionable insights.

### Handyman Dashboard

Handymen can create, customize, and manage their profiles, making them stand out to clients:

-   **Availability Management**: Set and update available hours directly.
-   **Booking Management**: Accept, reschedule, or decline appointments.
-   **Direct Messaging**: Communicate with clients seamlessly for clarifications or updates.

### Client Portal

For clients, HandyHelper provides a smooth experience with features designed to ensure quality and reliability:

-   **Service Search**: Quickly find handymen based on service type and location.
-   **Profile Reviews**: Access genuine reviews and ratings to choose the best professional.
-   **Real-time Tracking**: Track service requests and status updates directly on the dashboard.

# 📊 Data Model

The **HandyHelper** data structure is tailored to enable flexibility and efficiency across different user roles. The data model includes:

-   **Users** (Admin, Handyman, Client) with tailored permissions.
-   **Services** tied to specific categories and subcategories, ensuring clients can easily search and filter.
-   **Bookings** with timestamps, status updates, and real-time tracking for seamless scheduling.
-   **Reviews** that contribute to each handyman’s public profile, encouraging transparency and trust.

![Data Model Diagram](./images/data_model.png)

# ⚙️ Installation

To set up HandyHelper on your local environment, please ensure you have PHP, Composer, and MySQL installed.

1. **Clone the Repository**

    ```bash
    git clone https://github.com/yourusername/HandyHelper.git
    cd HandyHelper

    ```

2. **Install Dependencies**  
   Run the following command to install Laravel and its dependencies:

    ```bash
    composer install
    ```

3. **Environment Setup**  
   Duplicate `.env.example` as `.env` and configure your database settings:

    ```plaintext
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=handyhelper
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4. **Generate Application Key**  
   This key secures your application:

    ```bash
    php artisan key:generate
    ```

5. **Database Migration and Seeding**  
   Run the migrations to set up the database tables and initial data:

    ```bash
    php artisan migrate --seed
    ```

6. **Start the Application**  
   Launch the Laravel development server:

    ```bash
    php artisan serve
    ```

    HandyHelper is now live on [http://localhost:8000](http://localhost:8000)!

---

# 🎉 Get Started

With HandyHelper, clients can trust they’re getting the right professionals, and handymen have access to an engaged client base. Join us in building a community that puts quality, ease, and reliability first.
