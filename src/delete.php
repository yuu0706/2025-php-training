<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    $sql="DELETE FROM `ToDoList` WHERE id='$delete_id'";
    $stmt = $pdo->query($sql);
}
header('Location: index.php');
exit;
?>