
---

<div align="center">

![KafMueen Logo](./public/pic/logoArabic.png)  
[![Powered by Laravel](https://img.shields.io/badge/Framework-Laravel-FF2D20.svg)](https://laravel.com/)  
[![Project Stage](https://img.shields.io/badge/Status-In%20Development-orange.svg)](https://github.com/yourusername/KafMueen/commits/main)  
![Documentation](https://img.shields.io/badge/Documentation-WIP-blue.svg)  
![Supported Languages](https://img.shields.io/badge/Language-English%20%7C%20Arabic-green.svg)

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

**KafMueen** is designed to transform how clients find, book, and connect with trusted service professionals. With a strong focus on accessibility, transparency, and quality, our platform is a comprehensive solution for finding reliable handymen and essential tools through an integrated e-commerce experience, supporting both **English** and **Arabic** languages to cater to a broader user base.

Whether you're a homeowner needing repairs, a handyman seeking clients, an admin managing the platform, or a store owner selling essential tools, KafMueen brings convenience, reliability, and community into one platform.

# 🚀 Feature Highlights

### Admin Dashboard

Manage the platform seamlessly with an array of administrative features:

- **Service Approval**: Review and approve handyman profiles, listings, and store products.
- **User Management**: Oversee accounts for clients, handymen, and store owners.
- **Analytics**: Monitor platform activity, service demand, and sales data to drive performance.

### Handyman Dashboard

Handymen can create, customize, and manage their profiles to attract clients:

- **Availability Management**: Set and update available hours.
- **Booking Management**: Accept, reschedule, or decline appointments.
- **Direct Messaging**: Communicate with clients directly for clarifications or updates.

### Client Portal

Providing clients with a seamless experience, KafMueen ensures a reliable, transparent service:

- **Service Search**: Find handymen based on service type, location, and ratings.
- **Profile Reviews**: Access reviews and ratings to help choose the best professionals.
- **Real-time Tracking**: Follow service requests and updates via the dashboard.

### Store Owner Dashboard

Store owners can manage their inventory and reach clients directly on the platform:

- **Product Listings**: Add tools, materials, and other products essential for handymen and clients.
- **Sales Management**: Track orders, manage inventory, and offer promotions to clients and handymen.
- **Analytics**: View insights into product sales and client demand.

### E-commerce for Tools and Supplies

KafMueen also features a marketplace where clients and handymen can purchase tools and supplies directly:

- **Tool Categories**: Organize products for quick access to specific types of tools and supplies.
- **Cart and Checkout**: A streamlined shopping experience with secure checkout options.
- **Special Offers**: Store owners can provide discounts and special offers to clients and handymen.

# 📊 Data Model

The **KafMueen** data structure supports flexibility across diverse user roles and e-commerce functionality. The data model includes:

- **Users** (Admin, Handyman, Client, Store Owner) with specific permissions.
- **Services** tied to categories for easy search and filtering.
- **Bookings** with timestamps, status updates, and tracking.
- **Products** under various categories for e-commerce, supporting inventory and pricing management.
- **Reviews** that contribute to each handyman and product profile, fostering transparency and trust.


# ⚙️ Installation

To set up KafMueen on your local environment, please ensure you have PHP, Composer, and MySQL installed.

1. **Clone the Repository**

    ```bash
    git clone https://github.com/Aseel-Aburumman/Handyman-website.git
    cd Handyman-website
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
    DB_DATABASE=Handyman-website
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

    KafMueen is now live on [http://localhost:8000](http://localhost:8000)!

---

# 🎉 Get Started

With KafMueen, clients are assured of quality service, handymen gain access to consistent client leads, store owners reach a dedicated market for their tools and supplies, and users enjoy support in both English and Arabic. Join us in building a community that prioritizes quality, ease, and reliability.

--- 

