<?php
    $text = $_POST['input_text'];
    $pdo = new PDO("mysql:host=localhost;dbname=php_examples", "root", "");
    $sql = "INSERT INTO texts (text) VALUES (:text)";
    $statement = $pdo->prepare($sql);
    $statement->execute(["text" => $text]);

    header("Location: /task_9.php");

?>