CREATE DATABASE costume_closet;

USE costume_closet;

CREATE TABLE loans (
    id INT AUTO_INCREMENT PRIMARY KEY,
    item VARCHAR(60) NOT NULL,
    borrower VARCHAR(60) NOT NULL,
    due_date DATE,
    returned TINYINT(1) DEFAULT 0
);

INSERT INTO loans (item, borrower, due_date, returned)
VALUES
    ('Witch hat', 'Maya', '2026-11-02', 0),
    ('Vampire cape', 'Jordan', '2026-11-01', 0),
    ('Skeleton mask', 'Sam', '2026-11-03', 0);