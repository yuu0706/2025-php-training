<?php
include 'connect_db.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TodoList-add_screen</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        function add($title,$content){
            echo "a";
        }
        ?>
        <button onclick="location.href='index.php'">戻る</button><br>
        <form action="" method="post" onsubmit="add($_POST['input_title'],$_POST['input_content'])">
            <input type="text" class="title_textarea" name="input_title"  size="50"><br>
            <textarea class="about_textarea" name="input_content" cols="50" rows="10"></textarea><br>
            <input type="submit" value="追加">
        </form>
    </body>
</html>