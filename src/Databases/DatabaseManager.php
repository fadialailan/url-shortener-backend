<?php
namespace Fadialailan\UrlShortenerBackend\Databases;

class DatabaseManager {
    private \PDO $pdo_connection;
    private DatabaseTypes $database_type;
    
    public function __construct(DatabaseTypes $database_type) {
        $this->database_type = $database_type;
        $this->pdo_connection =  match ($database_type) {
            DatabaseTypes::SQLITE => new \PDO("sqlite:sqlite.db"),
            default => throw new \Exception("database not supported"),
        };
    }
}
?>


