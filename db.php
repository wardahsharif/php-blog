<?php
$database_connection = mysqli_connect('localhost', 'root', '', 'blog-project');


if ($database_connection->connect_error) {
    echo $database_connection->connect_error;
}



