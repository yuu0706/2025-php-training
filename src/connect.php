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
    $sql="SELECT * FROM ToDoList";
    $stmt = $pdo->query($sql);
    }catch (PDOException $e) {
        echo "データベース接続に失敗しました: " . $e->getMessage();
}
?>