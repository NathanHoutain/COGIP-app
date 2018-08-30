<?php

function getAllCompanies($conn) {
    $stmt = $conn->prepare('SELECT * FROM societes');
    $stmt->execute();
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $arr;
}

?>