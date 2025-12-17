
-- Library Management System Database
CREATE DATABASE IF NOT EXISTS library_db;
USE library_db;

-- Admin Table
CREATE TABLE admin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL
);

INSERT INTO admin (username, password) VALUES ('admin', 'admin123');

-- Books Table
CREATE TABLE books (
  id INT AUTO_INCREMENT PRIMARY KEY,
  book_name VARCHAR(100) NOT NULL,
  author VARCHAR(100) NOT NULL,
  quantity INT NOT NULL
);

-- Students Table
CREATE TABLE students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  roll VARCHAR(50) NOT NULL
);

-- Issue Books Table
CREATE TABLE issue_books (
  id INT AUTO_INCREMENT PRIMARY KEY,
  book_id INT NOT NULL,
  student_id INT NOT NULL,
  issue_date DATE NOT NULL
);
