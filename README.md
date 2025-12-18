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
![Landing Page](screenshots/landing-page.png)

---

### 🔐 Login Page (PHP Authentication)
![Login Page](screenshots/login-page.png)

---

### 📚 Book Library
![Book Library](screenshots/library-page.png)

---

### 📘 Book Cards
![Book Cards](screenshots/book-cards.png)

---

### 🎧 Chapter-wise Audiobook Player
![Audiobook Player](screenshots/audiobook-player.png)

---

## 🛠️ Tech Stack

| Technology | Purpose |
|----------|--------|
| **HTML** | Page structure |
| **CSS3** | Styling & layout |
| **JavaScript** | UI interactions & audio controls |
| **PHP** | Authentication, sessions, backend logic |
| **PostgreSQL** | User data storage |
| **Apache (XAMPP)** | Local server |

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

