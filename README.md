# Techcruz-Company

## Overview
This is the full-stack web application for Techcruz Company. The application uses a combination of front-end and back-end technologies to deliver a robust user experience.

### Technology Stack
- **Front-end**: HTML5, CSS3, JavaScript
- **Back-end**: PHP
- **Database**: MySQL

### Required Software
- **XAMPP**: A free and open-source cross-platform web server solution stack package that consists of Apache HTTP Server, MySQL database, and interpreters for scripts written in PHP and Perl.

## Getting Started

To get a local copy of this repository up and running, follow these steps:

### 1. Clone the Repository

```bash
git clone ## Getting Started

To get a local copy of this repository up and running, follow these steps:

### 1. Clone the Repository

```bash
git clone https://github.com/Suman-Mukherje/Techcruz-Company.git
```

### 2. Navigate to project directory

```bash
cd company
```
### 3. Set Up the Project in XAMPP

1. **Copy the Project Folder:**
   - Copy the entire `company` folder from your cloned repository.

2. **Paste into `htdocs`:**
   - Navigate to the `htdocs` folder in your XAMPP installation directory (usually located at `C:\xampp\htdocs` on Windows).
   - Paste the `company` folder into the `htdocs` directory.

### 4. Set Up the Database

1. **Start XAMPP:**
   - Open the XAMPP Control Panel.
   - Start the Apache and MySQL services by clicking on the "Start" buttons next to them.

2. **Access phpMyAdmin:**
   - In your web browser, type `localhost` in the address bar and press Enter.
   - From the XAMPP dashboard, click on `phpMyAdmin` to open the database management interface.

3. **Create the Database:**
   - In phpMyAdmin, click on `Databases` in the top menu.
   - Create a new database by entering `tc_db` in the "Create database" field and clicking the "Create" button.

4. **Create the Required Tables:**

   - **Table 1: `compdata`**
     - Click on the `tc_db` database you just created.
     - Create a table named `compdata` with the following 7 fields:
       - `Usertype` (VARCHAR)
       - `Name` (VARCHAR)
       - `PhoneNo` (VARCHAR)
       - `Email` (VARCHAR)
       - `PaymentPlan` (VARCHAR)
       - `Message` (TEXT)
       - `Date&Time` (DATETIME)
     - **Note:** This table does not require a primary key.

   - **Table 2: `user`**
     - In the same `tc_db` database, create another table named `user` with the following 3 fields:
       - `id` (INT) - Primary key, auto-increment
       - `user_name` (VARCHAR)
       - `password` (VARCHAR)
     - **Note:** After creating this table, manually insert data into the `user` table through phpMyAdmin using the "Insert" command.

### 5. Start the Project

1. **Run the Main Application:**
   - In your web browser, type `localhost/company/TechCruz.php` in the address bar and press Enter.
   - The TechCruz portal should now be displayed.

2. **Access the Admin Page:**
   - To view data submitted by users, go to the admin page by typing `localhost/company/CompanyAdmin.php` in the browser's address bar and press Enter.
   - Enter the username and password credentials that you inserted into the `user` table in the database.
   - After logging in, you can view all the data submitted by users through the main portal.

3. **Logout:**
   - After viewing the data in the admin portal, you can log out by using the provided logout option.
