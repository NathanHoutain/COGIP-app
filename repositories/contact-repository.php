<?php

function getAllContacts($conn) {
    $stmt = $conn->prepare('SELECT * FROM contacts');
    $stmt->execute();
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $arr;
    // echo '<br>';
    // foreach ($arr as $row) {
    //     var_dump($row);
    //     echo '<br>';
    //     echo '<br>';
    // }
}

function getAllContactsWCompany($conn) {
    $stmt = $conn->prepare('SELECT contacts.contact_id, contacts.contact_prenom, contacts.contact_nom, contacts.contact_email, contacts.contact_tel, societes.societe_nom FROM contacts INNER JOIN societes ON contacts.societe_id=societes.societe_id;');
    $stmt->execute();
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $arr;
}

function getContactById($conn,$id) {
    // $stmt = $conn->prepare('SELECT * FROM contacts WHERE contact_id = ?');
    $stmt = $conn->prepare('SELECT contacts.contact_id, contacts.contact_prenom, contacts.contact_nom, contacts.contact_email, contacts.contact_tel, societes.societe_nom FROM contacts INNER JOIN societes ON contacts.societe_id=societes.societe_id WHERE contact_id = ?;');
    $stmt->execute([$id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo '<br>';
    // var_dump($result);
    return $result;
}

function createContact($conn,$firstname, $surname, $phone, $email, $companyId) {
    $stmt = $conn->prepare('INSERT INTO contacts (contact_prenom,contact_nom,contact_tel,contact_email,societe_id) VALUES (?,?,?,?,?)');
    $stmt->execute([$firstName,$surname,$email,$password,$companyId]);
}

function deleteContact($conn,$id) {
    $stmt = $conn->prepare('DELETE FROM contacts WHERE id = ?');
    $stmt->execute([$id]);
}

function updateContact($conn,$firstname, $surname, $phone, $email, $companyId, $id) {
    $stmt = $conn->prepare('UPDATE contact SET contact_prenom = ?, contact_nom = ?, contact_tel = ?, contact_email = ?, societe_id = ? WHERE id = ?');
    $stmt->execute([$firstName,$surname,$email,$password,$companyId,$id]);
}

function getContactOrderedBy($conn,$param) {
    $stmt = $conn->prepare('SELECT * FROM contacts ORDER BY ' + $param);
    $stmt->execute();
    $arr = $stmt->fetchAll();
    echo '<br>';
    foreach ($arr as $row) {
        var_dump($row);
        echo '<br>';
        echo '<br>';
    }
}

function getContactFilteredBy($conn,$param, $value) {
    $stmt = $conn->prepare('SELECT * FROM contacts WHERE ' + $param + ' = ?');
    $stmt->execute([$value]);
    $arr = $stmt->fetchAll();
    echo '<br>';
    foreach ($arr as $row) {
        var_dump($row);
        echo '<br>';
        echo '<br>';
    }
}

?>