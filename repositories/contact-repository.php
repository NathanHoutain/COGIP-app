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
    // $stmt = $conn->prepare('SELECT contacts.contact_id, contacts.contact_prenom, contacts.contact_nom, contacts.contact_email, contacts.contact_tel, societes.societe_nom FROM contacts INNER JOIN societes ON contacts.societe_id=societes.societe_id ORDER BY contacts.contact_surname;');
    $stmt = $conn->prepare('SELECT contacts.*, societes.societe_nom FROM contacts INNER JOIN societes ON contacts.societe_id=societes.societe_id ORDER BY contacts.contact_nom;');
    $stmt->execute();
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $arr;
}

function getContactById($conn,$id) {
    // $stmt = $conn->prepare('SELECT * FROM contacts WHERE contact_id = ?');
    $stmt = $conn->prepare('SELECT contacts.contact_id, contacts.contact_prenom, contacts.contact_nom, contacts.contact_email, contacts.contact_tel, contacts.societe_id, societes.societe_nom FROM contacts INNER JOIN societes ON contacts.societe_id=societes.societe_id WHERE contact_id = ?;');
    $stmt->execute([$id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo '<br>';
    // var_dump($result);
    return $result;
}

function getLastContacts($conn,$limit) {
    // $stmt = $conn->prepare('SELECT contacts.*, societes.societe_nom FROM contacts INNER JOIN societes ON contacts.societe_id=societes.societe_id ORDER BY contacts.contact_id DESC LIMIT ?;');
    $stmt = $conn->prepare('SELECT contacts.*, societes.societe_nom FROM contacts INNER JOIN societes ON contacts.societe_id=societes.societe_id ORDER BY contacts.contact_id DESC LIMIT '.$limit.';');
    // var_dump($limit);
    $stmt->execute();
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $arr;
}

function createContact($conn,$firstname, $surname, $phone, $email, $companyId) {
    echo '1';
    var_dump($conn);
    echo '<br>';
    var_dump($firstname);
    echo '<br>';
    var_dump($surname);
    echo '<br>';
    var_dump($phone);
    echo '<br>';
    var_dump($email);
    echo '<br>';
    var_dump($companyId);
    echo '<br>';
    $stmt = $conn->prepare('INSERT INTO contacts (contact_prenom,contact_nom,contact_tel,contact_email,societe_id) VALUES (?,?,?,?,?)');
    echo '2';
    $stmt->execute([$firstname,$surname,$phone,$email,$companyId]);
    echo '3';
}

function deleteContact($conn,$id) {
    print_r($id);
    echo '1';
    $stmt = $conn->prepare('DELETE FROM contacts WHERE contact_id = ?');
    echo '2';
    $stmt->execute([$id]);
    echo '3';
}

function updateContact($conn,$firstname, $surname, $phone, $email, $companyId, $id) {
    $stmt = $conn->prepare('UPDATE contact SET contact_prenom = ?, contact_nom = ?, contact_tel = ?, contact_email = ?, societe_id = ? WHERE id = ?');
    $stmt->execute([$firstname,$surname,$phone,$email,$companyId,$id]);
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