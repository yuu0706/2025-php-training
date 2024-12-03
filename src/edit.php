<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD']) {
    $id = $_POST['edited_id'];
    $title = $_POST['edited_title'];
    $content = $_POST['edited_content'];
    $sql="UPDATE ToDoList SET title = '$title', content = '$content', lastday=NOW() WHERE id = '$id'";
    $stmt = $pdo->query($sql);
}
header('Location: index.php');
exit;
?>