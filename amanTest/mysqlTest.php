<!-- MySQL Questions
1. Write SQL to create a database `interns_db` and a table `students(id, name, email, course)`.

CREATE DATABASE interns_db;

USE interns_db;

CREATE TABLE students(
            id INT(4) AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(25) NOT NULL,
            email VARCHAR(25) NOT NULL UNIQUE,
            course VARCHAR(25) NOT NULL
            );

2. Insert 3 student records into the `students` table. Write a query to select all students in a specific course.

USE interns_db;

INSERT INTO students(name,email,course) VALUES ("aman","aman@33","BCA");

INSERT INTO students(name,email,course) VALUES ("anmol","anmol@23","BCA");

INSERT INTO students(name,email,course) VALUES ("harman","harman@88","BCA");

SELECT * FROM students WHERE course="BCA";

3. Write SQL to update a student's email and delete a student based on their ID

USE interns_db;
UPDATE students SET email="nabha@22" WHERE id=2;

DELETE FROM students WHERE id=2;

4. Write a JOIN query using `students(id, name)` and `courses(id, student_id, course_name)` to show student
names with their courses.

USE interns_db;

CREATE TABLE courses(
            id INT(4) AUTO_INCREMENT PRIMARY KEY,
            course_name VARCHAR(25) NOT NULL,
    		student_id INT(4),
            FOREIGN KEY (student_id) REFERENCES students(id)
            );

USE interns_db;
SELECT students.name, courses.course_name FROM students JOIN courses ON students.id=courses.student_id;

5. Write a query to count the number of students per course and display the course name and count.

USE interns_db;
SELECT COUNT(id), course FROM students WHERE course="BCA"; -->