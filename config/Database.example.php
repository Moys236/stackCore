<?php
/**
 * Database Configuration Template
 * 
 * Copy this file to Database.php and update with your credentials
 * DO NOT commit Database.php to version control
 */

class Database
{
    // Database credentials - UPDATE THESE
    private $host = 'localhost';
    private $db_name = 'stackcore_db';
    private $username = 'root';
    private $password = '';
    
    public $conn;

    /**
     * Get database connection
     * @return PDO|null
     */
    public function getConnection()
    {
        $this->conn = null;
        
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            
            // Set charset to UTF-8
            $this->conn->exec("set names utf8");
            
            // Set error mode to exceptions
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Set default fetch mode to associative array
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        
        return $this->conn;
    }
}
