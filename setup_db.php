<?php
// setup_db.php
$database_file = __DIR__ . '/db.sqlite';

// Create empty database file
touch($database_file);

try {
    $pdo = new PDO("sqlite:" . $database_file);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create the posts table
    $sql = "CREATE TABLE IF NOT EXISTS posts (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title VARCHAR(255) NOT NULL,
        content TEXT NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )";
    
    $pdo->exec($sql);
    echo "✓ Table 'posts' created successfully!\n";
    
    // Optional: Add some sample posts
    $pdo->exec("INSERT INTO posts (title, content) VALUES 
        ('First Post!', 'Welcome to my blog. This is my first post.'),
        ('Learning PHP', 'I am learning PHP and SQLite. It''s great!'),
        ('Database Setup Complete', 'My database is now working perfectly.')
    ");
    
    echo "✓ Sample posts added!\n";
    
    // Verify the table was created
    $count = $pdo->query("SELECT COUNT(*) FROM posts")->fetchColumn();
    echo "✓ Database ready! Total posts: " . $count . "\n";
    echo "\nDatabase file location: " . $database_file . "\n";
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}