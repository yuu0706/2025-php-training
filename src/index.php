<?php
include 'connect_db.php';
include 'functions.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Todoリスト</title>
        <link rel="stylesheet" href="style.css">
        <script src='script.js'></script>
    </head>
    <body>
        <button onclick="location.href='add_screen.php'">追加</button>
        <?php
        $sql="SELECT num,title,about,addday,lastday FROM ToDoList";
        $stmt = $pdo->query($sql);
        echo "<table class='todoList'>";
        echo "<tr><th>番号</th><th>タイトル</th><th>内容</th><th>作成日</th><th>更新日</th><th>  </th></tr>";
        $data_number=0;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data_number++;
            echo "<tr>";
            echo "<td>" . htmlspecialchars($data_number) . "</td>";
            echo "<td>" . htmlspecialchars($row['title']) . "</td>";
            echo "<td>" . htmlspecialchars($row['content']) . "</td>";
            echo "<td>" . htmlspecialchars($row['addday']) . "</td>";
            echo "<td>" . htmlspecialchars($row['lastday']) . "</td>";
            $title=$row['title'];
            echo "<td><button onclick='deleteData(\"$title\")'>削除</button></br>
        <button onclick=\"location.href='https://www.google.co.jp/'\">編集</button></td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
                
    </body>
</html>