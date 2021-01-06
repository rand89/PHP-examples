<?php
    session_start();
    
    $text = $_POST['input_text'];
    $pdo = new PDO("mysql:host=localhost;dbname=php_examples", "root", "");
    $sql = "SELECT * FROM texts WHERE text=:text";
    $statement = $pdo->prepare($sql);
    $statement->execute(["text" => $text]);
    $texts = $statement->fetch(PDO::FETCH_ASSOC);

    if(!empty($texts))
    {
        $msg = "Такая запись уже существует.";
        $_SESSION['danger'] = $msg;

        header("Location: /task_10.php");
        exit;
    }

    $sql = "INSERT INTO texts (text) VALUES (:text)";
    $statement = $pdo->prepare($sql);
    $statement->execute(["text" => $text]);
    $msg = "Запись добавлена.";
    $_SESSION['success'] = $msg;

    header("Location: /task_10.php");

?>