<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Todoリスト</title>
        <link rel="stylesheet" href="style.css">
        <script src='script.js'></script>
    </head>
    <body>
        <?php
        $sql="SELECT * FROM ToDoList";
        $stmt = $pdo->query($sql);

        echo "<button onclick='location.href=\"add_screen.php\"'>追加</button>";
        echo "<table class='todoList'>";
        echo "<tr><th>番号</th><th>タイトル</th><th>内容</th><th>作成日</th><th>更新日</th><th>  </th></tr>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['title']) . "</td>";
            echo "<td>" . htmlspecialchars($row['content']) . "</td>";
            echo "<td>" . htmlspecialchars($row['addday']) . "</td>";
            echo "<td>" . htmlspecialchars($row['lastday']) . "</td>";
            $id=$row['id'];
            $title=$row['title'];
            $content=$row['content'];
            echo "<td>";
            echo "<form action='delete.php' method='POST' onsubmit='return deleteConfirm(\"$title\")'>
                <input type='hidden' name='delete_id' value='$id'>
                <button type='submit'>削除</button>
                </form>";
            echo "</br>";
            echo "<form action='edit_screen.php' method='POST'>
                <input type='hidden' name='edit_id' value='$id'>
                <input type='hidden' name='edit_title' value='$title'>
                <input type='hidden' name='edit_content' value='$content'>
                <button type='submit'>編集</button>
                </form>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>