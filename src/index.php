<!DOCTYPE html>
<html>
    <head>
        <title>TodoList</title>
        <link rel="stylesheet" href="style.css">
        <style>
        .todoList {
            width: 50%; /* 任意の幅 */
            border-collapse: collapse; /* セルの枠線を統一 */
        }
        th, td {
            border: 1px solid black; /* セルに枠を追加 */
            padding: 8px; /* 内側の余白 */
            text-align: center; /* 中央揃え */
        }
        </style>
        <script>
            function deleteData(title){
                if(confirm('"'+title+"'"+"を本当に削除しますか？")){

                }
            }
        </script>
    </head>
    <body>
        <button onclick="location.href='add_screen.php'">追加</button>
        <?php
        $config=parse_ini_file('config.ini',true);
        $host=$config['database']['host'];
        $dbname=$config['database']['dbname'];
        $username=$config['database']['user'];
        $password=$config['database']['password'];
        try{
            // データベース接続を作成
            $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="SELECT num,title,about,addday,lastday FROM ToDoList";
            $stmt = $pdo->query($sql);
            function delete(){

            }
            
            echo "<table class='todoList'>";
            echo "<tr><th>番号</th><th>タイトル</th><th>内容</th><th>作成日</th><th>更新日</th><th>  </th></tr>";
            $data_number=0;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $data_number++;
                echo "<tr>";
                echo "<td>" . htmlspecialchars($data_number) . "</td>";
                echo "<td>" . htmlspecialchars($row['title']) . "</td>";
                echo "<td>" . htmlspecialchars($row['about']) . "</td>";
                echo "<td>" . htmlspecialchars($row['addday']) . "</td>";
                echo "<td>" . htmlspecialchars($row['lastday']) . "</td>";
                $title=$row['title'];
                echo "<td><button onclick='deleteData(\"$title\")'>削除</button></br>
        <button onclick=\"location.href='https://www.google.co.jp/'\">編集</button></td>";
                echo "</tr>";
            }
            echo "</table>";
        }catch (PDOException $e) {
            echo "データベース接続に失敗しました: " . $e->getMessage();
        }
        ?>
                
    </body>
</html>