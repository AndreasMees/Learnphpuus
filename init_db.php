<?php
// Create database file
$database_file = __DIR__ . '/database.sqlite';

// Create empty file
touch($database_file);

// Connect to SQLite
$pdo = new PDO("sqlite:" . $database_file);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Create posts table
$pdo->exec("
CREATE TABLE IF NOT EXISTS posts (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
)");

// Insert sample data
$pdo->exec("
INSERT INTO posts (title, content) VALUES 
    ('First Post', 'Welcome to my blog!'),
    ('Second Post', 'This is another post.'),
    ('Learning PHP', 'SQLite is awesome for development!')
");

echo "Database created successfully at: " . $database_file . "\n";
echo "Posts table created with sample data!\n";