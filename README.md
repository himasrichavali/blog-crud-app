# Blog CRUD Application using PHP & MySQL

✨ This project is built as **Task 2** of my 45-day **Web Development Internship** with [ApexPlanet Software Pvt. Ltd.](https://www.apexplanet.in/).

## 📌 About the Project

This is a simple **Blog Management System** where users can:
- Register and log in securely
- Create blog posts 📝
- View and manage their posts
- Edit and delete posts (CRUD)

All functionality is built using:
- PHP (Core)
- MySQL (phpMyAdmin)
- Bootstrap (for modern UI design)

---

## 🛠️ Features

- ✅ User Registration & Login
- ✅ Secure Password Hashing
- ✅ Create, Read, Update, Delete Posts
- ✅ Bootstrap UI (Modern & Responsive)
- ✅ Session-based Access Control

---

## 💻 Technologies Used

| Technology | Purpose               |
|------------|------------------------|
| PHP        | Backend Logic          |
| MySQL      | Database Storage       |
| Bootstrap  | Frontend Styling       |
| HTML/CSS   | UI Layout              |
| XAMPP      | Local Server Setup     |

---

## 🚀 How to Run This Project

1. Download or clone this repository
2. Move it to `C:/xampp/htdocs/` directory
3. Open **XAMPP**, start **Apache** and **MySQL**
4. Go to 👉 [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
5. Create a database named `blog`
6. Run this SQL to create tables:

```sql
CREATE TABLE posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  content TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL
);

---

## 📸 Screenshots

### 🔐 Login Page  
<img src="https://chat.openai.com/cdn-cgi/imagedelivery/k-LGZsZThM1UuXzmDQX7bA/9ShPB6vq1rtwtMM1LwVyaf/public" alt="Login Screenshot" width="700"/>

---

### 📝 Register Page  
<img src="https://chat.openai.com/cdn-cgi/imagedelivery/k-LGZsZThM1UuXzmDQX7bA/GdSyQHJQ9p999jSwHzBEE6/public" alt="Register Screenshot" width="700"/>

---

### 🏠 Home Page (Post List)  
<img src="https://chat.openai.com/cdn-cgi/imagedelivery/k-LGZsZThM1UuXzmDQX7bA/DXTy9cm3feJRJmy4zQ8rQ5/public" alt="Index Screenshot" width="700"/>
