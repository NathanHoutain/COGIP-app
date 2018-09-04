<?php

function getAllTypes($conn) {
    $stmt = $conn->prepare('SELECT * FROM types');
    $stmt->execute();
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $arr;
}

?>