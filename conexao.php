<?php
try {
    $username = "u597612842_p21";
    $password = "A123b456";
    $conn = new PDO('mysql:host=localhost;dbname=u597612842_p21', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'Erro com a conexão &#128528';
}
?>
