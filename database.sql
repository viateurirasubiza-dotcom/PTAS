CREATE DATABASE parent_teacher_system;

USE parent_teacher_system;

CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
fullname VARCHAR(100),
email VARCHAR(100),
password VARCHAR(255),
role ENUM('admin','teacher','parent')
);

CREATE TABLE students(
id INT AUTO_INCREMENT PRIMARY KEY,
fullname VARCHAR(100),
class_name VARCHAR(50),
parent_id INT
);

CREATE TABLE attendance(
id INT AUTO_INCREMENT PRIMARY KEY,
student_id INT,
teacher_id INT,
attendance_date DATE,
status ENUM('Present','Absent','Late')
);
