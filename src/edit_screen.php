<?php
include 'connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['edit_id'];
    $title = $_POST['edit_title'];
    $content = $_POST['edit_content'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TodoList-edit_screen</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <button onclick="location.href='index.php'">戻る</button><br>
        <form action="edit.php" method="post">
            <input type="hidden" name="edited_id" value="<?=$id; ?>">
            <input type="text" class="title_textarea" name="edited_title"  size="50" value="<?=$title; ?>"><br>
            <textarea class="about_textarea" name="edited_content" cols="50" rows="10"><?=$content; ?></textarea><br>
            <input type="submit" value="編集">
        </form>
    </body>
</html>