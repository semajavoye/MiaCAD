CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each user
    username VARCHAR(50) NOT NULL UNIQUE, -- User's username
    password VARCHAR(255) NOT NULL, -- User's password
    email VARCHAR(100) NOT NULL UNIQUE, -- User's email address
    role VARCHAR(255) NOT NULL, -- User's role
    vorname VARCHAR(50), -- User's first name
    nachname VARCHAR(50), -- User's last name
    titel VARCHAR(50) DEFAULT NULL, -- User's title
    geburtsdatum DATE, -- User's date of birth
    geschlecht CHAR(1), -- User's gender
    nationalitaet VARCHAR(50), -- User's nationality
    telefonnummer VARCHAR(20), -- User's phone number
    strasse VARCHAR(100), -- User's street address
    ort VARCHAR(255), -- User's city
    plz INT, -- User's postal code
    land VARCHAR(50), -- User's country
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Timestamp of when the user was created
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP -- Timestamp of when the user was last updated
);