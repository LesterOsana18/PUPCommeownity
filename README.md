# 🐾 PUP Com-meow-nity

A centralized platform supporting **PUP Sintang Pusa**'s advocacy in caring for campus cats through adoption, donations, volunteerism, and education.

---

## 📋 Project Description

PUP Com-meow-nity is a Transaction Processing System (TPS)-powered web application built to support PUP Sintang Pusa. The platform centralizes operations such as:

-   🐱 Adoption Listings & Application Tracking
-   🎁 Donation Management (Cash, In-Kind)
-   📢 News, Events, and Announcements
-   📸 Gallery & Cat Stories (Tributes like Pogi 🐾)
-   📝 Volunteer and Membership Applications
-   🚨 Cat-in-Need Reporting System
-   📚 Educational Content on Animal Welfare

---

## 🔧 Technologies Used

-   **Laravel** (Backend Framework, with Blade Templating and MVC structure)
-   **Tailwind CSS** (Frontend styling)
-   **MySQL** (Relational Database)
-   **PHP** (Core backend language)
-   **JavaScript & HTML/CSS**

Laravel provides a robust foundation for routing, validation, authentication, and database operations, enabling a streamlined development process.

---

## 🎯 Objectives

-   Build a responsive and user-friendly web app for PUP Sintang Pusa
-   Streamline adoption, donation, and reporting workflows
-   Provide educational materials on responsible pet care
-   Honor campus cats through digital archives and storytelling
-   Boost community engagement

---

## 🛠️ How to Set Up the Project (Using Herd & VS Code)

### 1. **Clone the Repository**

```bash
git clone https://github.com/your-org/pup-com-meow-nity.git
cd pup-com-meow-nity
```

---

### 2. **Install [Herd](https://herd.laravel.com) (PHP Development Environment)**

> Herd is a fast Laravel-native tool to manage local dev servers.

-   Download and install Herd (macOS or Windows)
-   Herd will automatically serve your Laravel app at `http://pup-com-meow-nity.test`

---

### 3. **Open in VS Code**

```bash
code .
```

Recommended extensions:

-   Laravel Blade Snippets
-   Tailwind CSS IntelliSense
-   PHP Intelephense
-   Laravel Herd Support

---

### 4. **Install Dependencies**

#### PHP/Laravel Backend

```bash
composer install
```

#### Frontend (Tailwind, etc.)

```bash
npm install
```

---

### 5. **Set Up the Environment File**

```bash
cp .env.example .env
```

Update your `.env` with correct database credentials (MySQL) and app key.

Then run:

```bash
php artisan key:generate
```

---

### 6. **Run Migrations (Optional for Seeding Demo Data)**

```bash
php artisan migrate --seed
```

---

### 7. **Run the Development Server**

-   Using Herd: just navigate to `http://pup-com-meow-nity.test`
-   Or manually:

```bash
php artisan serve
```

Then in a separate terminal:

```bash
npm run dev
```

---

## 📱 Accessibility

The platform is responsive and optimized for both desktop and mobile devices.

---

## 🚫 Limitations

-   Prototype pending approval from PUP Sintang Pusa
-   No production-grade hosting or real-time third-party integrations
-   Simulated data for demo (e.g., cats, stories, donation flow)

---

## 👥 Team Members

-   Migueh, Rica Joi
-   Osana, Lester
-   Pablo, Jeremias
-   Sanchez, Ma. Paula
-   Xavier, Mikhail Gabriel
