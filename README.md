# 📚 Radha’s Library – Online Book & Audiobook Platform

Radha’s Library is a **web-based digital library system** built using **HTML, CSS, JavaScript, and PHP**, with **PHP session-based authentication** as the core backend functionality.

The platform allows users to securely log in, browse books, view descriptions, and listen to **chapter-wise audiobooks** through a clean and interactive UI.

---

## 🌟 Project Highlights

- 🔐 **PHP-based Login & Session Authentication**
- 📖 Book Library with modern card UI
- 🎧 Chapter-wise Audiobook Player
- 🎨 Responsive & visually appealing design
- 🔒 Protected pages using PHP sessions

---

## 🖼️ Project Screenshots

### 🏠 Landing Page
![image](https://github.com/yashamte72/radha-s-librabry/blob/master/Screenshot%20from%202025-11-04%2013-38-24.png)

---

### 🔐 Login Page (PHP Authentication)
![Login Page](https://github.com/yashamte72/radha-s-librabry/blob/master/Screenshot%20from%202025-11-04%2013-39-34.png)

---

### 📚 Book Library
![Book Library](https://github.com/yashamte72/radha-s-librabry/blob/master/Screenshot%20from%202025-11-07%2009-31-48.png)

---

### 📘 Book Cards
![Book Cards](https://github.com/yashamte72/radha-s-librabry/blob/master/Screenshot%20from%202025-11-04%2013-39-11.png)

---

### 🎧 Chapter-wise Audiobook Player
![Audiobook Player](https://github.com/yashamte72/radha-s-librabry/blob/master/Screenshot%20from%202025-11-07%2009-32-19.png)

---

## 🛠️ Tech Stack

| Technology | Purpose |
|----------|--------|
| **HTML5** | Page structure |
| **CSS3** | Styling & layout |
| **JavaScript** | UI interactions & audio controls |
| **PHP** | Authentication, sessions, backend logic |
| **MySQL** | User data storage |
| **Apache (XAMPP/LAMP)** | Local server |

---

## 🔐 Authentication & Session Flow (Core Feature)

### 1️⃣ User Registration
- User submits email & password
- Password stored securely in database
- Recommended: `password_hash()`

### 2️⃣ User Login
- Credentials verified from database
- PHP session created on success
- User redirected to Library page

### 3️⃣ Session Management
- `$_SESSION` tracks logged-in users
- Unauthorized access redirected to login page
- Logout destroys session securely

### 4️⃣ Protected Pages
- Books & Audiobook pages require active session
- Direct URL access blocked without login

---

## 📂 Project Structure

