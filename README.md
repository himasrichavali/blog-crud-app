


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

![Image](https://github.com/user-attachments/assets/19e0cad2-b79d-4e54-9f52-ed93549a1ac2)
![Image](https://github.com/user-attachments/assets/5252db46-5726-4319-ac2c-f6a4bcd792f9)
![Image](https://github.com/user-attachments/assets/92f3a162-b3a0-4cbe-882b-7545243862a4)
