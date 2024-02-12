<?php

use Fadialailan\UrlShortenerBackend\Databases\DatabaseTypes;

use Fadialailan\UrlShortenerBackend\Databases\DatabaseManager;

require "./vendor/autoload.php";

$url = parse_url($_SERVER["REQUEST_URI"]);
echo "url path is:" . $url["path"] . " <br\>";

$db_manager = new DatabaseManager(DatabaseTypes::SQLITE);
?>
