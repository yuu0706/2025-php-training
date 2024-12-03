<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD']) {
    $title = $_POST['input_title'];
    $content = $_POST['input_content'];
    $sql="INSERT INTO ToDoList (title,content,addday,lastday) VALUES ('$title','$content',NOW(),NOW())";
    $stmt = $pdo->query($sql);
}
header('Location: index.php');
exit;
?>