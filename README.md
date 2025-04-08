
# 🚪 Login Page with PHP & MySQL

A responsive and modern **Login Page** integrated with **PHP** and **MySQL** for backend authentication. Ideal for web apps and systems that require secure user login functionality.

## ✨ Features

- 🌐 Fully responsive HTML & CSS frontend
- 🔐 Secure backend with PHP
- 🗃️ MySQL database integration for user authentication
- ✅ Input validation (HTML + PHP)
- 🧠 Easy to customize and integrate into larger projects

## 📸 Preview

![Login Page Screenshot](https://via.placeholder.com/800x400.png?text=Login+Page+Preview) <!-- Replace this with an actual screenshot -->

## 🛠️ Technologies Used

### Frontend:
- HTML5
- CSS3

### Backend:
- PHP
- MySQL

> No frameworks used — pure and lightweight stack.

## 🚀 Getting Started

To run this project locally, follow these steps:

### 📁 Clone the Repository
```
git clone https://github.com/alpha007-cmd/Login_Page.git
cd Login_Page
```

### 🧰 Requirements

- XAMPP / WAMP / LAMP (PHP + MySQL)
- Web browser

### ⚙️ Setup Instructions

1. **Start Apache and MySQL** from XAMPP/WAMP.
2. **Import the database**:
    - Open phpMyAdmin.
    - Create a new database (e.g., `login_db`).
    - Import the provided `.sql` file located in the project folder (if available).
3. **Configure the Database Connection**:
    - Open `db.php` or any backend connection file.
    - Update the credentials:
```
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'login_db';
```
4. **Run the App**:
    - Place the project folder inside the `htdocs` (XAMPP) or `www` (WAMP) directory.
    - Navigate to `http://localhost/Login-Page` in your browser.

## 📂 Project Structure

```
Login_Page/
├── index.html / index.php
├── style.css
├── login.php
├── db.php
├── dashboard.php
└── database/
    └── login_db.sql
```

## 🙌 Contributing

Contributions are welcome! Feel free to fork the repo and make a pull request.

## 🧑‍💻 Author

**[Athul(alpha007-cmd)](https://github.com/alpha007-cmd)**  
Made with 💻 and ☕ for developers and learners.

> For any support or issues, feel free to open an issue or reach out.

