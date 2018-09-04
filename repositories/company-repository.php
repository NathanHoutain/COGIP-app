<?php

function getAllCompanies($conn) {
    $stmt = $conn->prepare('SELECT * FROM societes');
    $stmt->execute();
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $arr;
}

function getAllCompaniesOrdered($conn) {
    $stmt = $conn->prepare('SELECT * FROM societes ORDER BY societe_nom ASC');
    $stmt->execute();
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $arr;
}

function getCompanyById($conn,$id) {
    $stmt = $conn->prepare('SELECT * FROM societes WHERE societe_id = ?;');
    $stmt->execute([$id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function createCompany($conn,$name, $address, $country, $phone, $tva, $type) {
    echo 'test';
    $stmt = $conn->prepare('INSERT INTO societes (societe_nom,societe_adresse,societe_pays,societe_tel,societe_tva,type_id) VALUES (?,?,?,?,?,?)');
    $stmt->execute([$name,$address,$country,$phone,$tva,$type]);
}

function updateCompany($conn,$name, $address, $country, $phone, $tva, $type, $id) {
    echo 'test';
    $stmt = $conn->prepare('UPDATE societes SET societe_nom = ?, societe_adresse = ?, societe_pays = ?, societe_tel = ?, societe_tva = ?, type_id = ? WHERE societe_id = ?');
    $stmt->execute([$name,$address,$country,$phone,$tva,$type,$id]);
}

function deleteCompany($conn,$id) {
    $stmt = $conn->prepare('DELETE FROM societes WHERE societe_id = ?');
    $stmt->execute([$id]);
}

?>