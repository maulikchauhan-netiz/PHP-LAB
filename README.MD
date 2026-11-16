# PHP.LAB – PHP Practical Learning Website

A practical learning platform designed to help Diploma Computer Engineering students understand PHP programming through structured modules, practical examples, and source code.

---

## 📌 About the Project

**PHP.LAB** is a PHP practical learning website developed as an academic project for the Dynamic Webpage Development subject.

The platform provides students with an organized collection of PHP practical programs based on the course curriculum. It helps learners explore PHP concepts, understand practical implementations, and access source code in one place.

The website is designed with a simple, clean, and responsive interface to make learning accessible across desktop and mobile devices.

## 🎯 Project Objectives

- Provide a centralized platform for PHP practical programs.
- Organize practicals according to course modules.
- Make PHP source code easy to access and understand.
- Help students explore PHP concepts through practical examples.
- Provide a simple and user-friendly learning experience.
- Make the website accessible on different screen sizes.

## ✨ Features

- **Home Page:** Introduction to PHP.LAB and its learning approach.
- **Practicals Library:** Collection of 29 PHP practical programs.
- **Module-Based Organization:** Practicals organized into five learning modules.
- **Practical Details:** Dedicated pages containing practical descriptions and source code.
- **Code Copy Functionality:** Copy PHP source code directly from practical pages.
- **Practical Search:** Search practicals using their number, title, or description.
- **Module Filtering:** Browse practicals based on individual modules.
- **Modules Page:** View module descriptions, topics, and practical counts.
- **About Page:** Information about the purpose and features of PHP.LAB.
- **Responsive Design:** Optimized layouts for desktop, tablet, and mobile devices.
- **Reusable Components:** Shared PHP navbar and footer components.

## 🛠️ Technologies Used

| Technology | Purpose |
|---|---|
| HTML5 | Website structure |
| CSS3 | Styling and responsive layouts |
| JavaScript | Search, filtering, and copy functionality |
| PHP | Dynamic page rendering and reusable components |
| XAMPP | Local development environment |
| Git | Version control |
| GitHub | Source code hosting |

## 📚 Course Modules

PHP.LAB contains 29 practical programs organized into five modules.

| Module | Module Name | Practicals |
|---|---|---:|
| 01 | Introduction to PHP | 5 |
| 02 | Arrays & Functions | 6 |
| 03 | Form Handling | 7 |
| 04 | Sessions, Cookies & OOP | 6 |
| 05 | Database & MVC | 5 |
| | **Total** | **29** |

### Topics Covered

**Module 01 – Introduction to PHP**
- PHP installation and configuration
- PHP syntax and output statements
- Variables, constants, and global variables
- Conditional statements
- Looping structures

**Module 02 – Arrays & Functions**
- Numeric arrays
- Associative arrays
- Multidimensional arrays
- Array comparison and union
- User-defined functions
- String, mathematical, and array functions

**Module 03 – Form Handling**
- HTML forms with PHP
- GET, POST, and REQUEST methods
- Form validation
- Radio buttons and checkboxes
- Listboxes and comboboxes
- Redirection
- File handling and email examples

**Module 04 – Sessions, Cookies & OOP**
- Session variables
- Cookies
- Login using sessions
- Exception handling
- Classes and objects
- Constructors and destructors
- Inheritance
- Method overriding
- Interfaces and abstract classes

**Module 05 – Database & MVC**
- MySQL database connectivity
- CRUD operations
- Insert, update, and delete operations
- Displaying and searching database records
- File upload and download
- MVC architecture

*Note: These topics describe the learning content of the practical programs. Database-related practicals are educational examples and do not mean that the PHP.LAB website itself requires a database.*

## 📁 Project Structure

```text
PHP PROJECT/
│
├── README.md
│
└── frontend/
    │
    ├── index.php
    │
    ├── assets/
    │
    ├── components/
    │   ├── navbar.php
    │   └── footer.php
    │
    ├── css/
    │   ├── style.css
    │   ├── navbar.css
    │   ├── home.css
    │   ├── practical.css
    │   ├── footer.css
    │   ├── details.css
    │   ├── modules.css
    │   └── about.css
    │
    ├── js/
    │   └── main.js
    │
    └── pages/
        ├── index.php
        ├── practicals.php
        ├── practical-detail.php
        ├── practical-detail-02.php
        ├── ...
        ├── modules.php
        └── about.php
```

*The practical detail files are represented with an ellipsis for brevity.*

## ⚙️ Installation and Setup

Follow these steps to run PHP.LAB on your local computer.

### Prerequisites

- Windows, macOS, or Linux
- XAMPP or another PHP development environment
- A web browser
- Git (optional, for cloning the repository)

### 1. Clone the Repository

Open your terminal and run:

```bash
git clone https://github.com/YOUR-USERNAME/PHP-LAB.git
```

Replace `YOUR-USERNAME` with your GitHub username.

### 2. Move the Project into XAMPP

Copy or extract the project folder into the XAMPP `htdocs` directory.

Example:

```text
C:\xampp\htdocs\PHP PROJECT\
```

### 3. Start Apache

1. Open XAMPP Control Panel.
2. Start the Apache server.
3. Make sure Apache is running.

### 4. Open the Website

Open your browser and visit:

```text
http://localhost/PHP%20PROJECT/frontend/
```

PHP.LAB should now be accessible locally.

## 💻 Running Individual PHP Practicals

Some practical programs demonstrate database operations and other server-side concepts.

To execute individual PHP practicals:

1. Open the relevant practical source code.
2. Save it as a `.php` file.
3. Place it inside the XAMPP `htdocs` directory or an appropriate subfolder.
4. Configure the required database or supporting files if the practical needs them.
5. Open the file through `localhost` in your browser.

For database-related practicals, create the required MySQL database and tables before executing the programs.

## 🧩 Project Scope

PHP.LAB is designed as a learning-resource website rather than a complete Learning Management System (LMS).

The current project focuses on:
- PHP practical learning resources.
- Module and practical navigation.
- Source code accessibility.
- Responsive user interface.

The website does not currently require:
- Student registration or login.
- An administrator dashboard.
- A user progress tracking system.
- A central MySQL database for the website itself.

## 🚀 Future Improvements

Possible improvements for future versions include:

- Add screenshots and visual previews for practical programs.
- Improve practical explanations and documentation.
- Add more PHP examples and learning resources.
- Introduce additional interactive learning features.
- Deploy the website on a public hosting platform.

## 👨‍💻 Author

**[Your Name]**

Diploma in Computer Engineering

Academic Project – Dynamic Webpage Development

---

## 📄 License

This project was developed for educational and academic purposes.

---

**PHP.LAB – Learn PHP Through Practical Examples.**