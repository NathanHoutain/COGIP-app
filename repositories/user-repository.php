<?php

function getAllUsers($conn) {
    $stmt = $conn->prepare('SELECT * FROM users');
    $stmt->execute();
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $arr;
}

function getUserById($conn,$id) {
    $stmt = $conn->prepare('SELECT * FROM users WHERE user_id = ?');
    $stmt->execute([$id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo '<br>';
    return $result;
}

function getUserByEmail($conn,$email) {
    echo '1';
    echo $email;
    // $stmt = $conn->prepare('SELECT * FROM users WHERE user_email = '.$email.'');
    $stmt = $conn->prepare('SELECT * FROM users WHERE user_email = ?');
    echo '2';
    $stmt->execute([$email]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo '<br>';
    return $result;
}

// function createContact($conn,$firstname, $surname, $phone, $email, $companyId) {
//     echo '1';
//     var_dump($conn);
//     echo '<br>';
//     var_dump($firstname);
//     echo '<br>';
//     var_dump($surname);
//     echo '<br>';
//     var_dump($phone);
//     echo '<br>';
//     var_dump($email);
//     echo '<br>';
//     var_dump($companyId);
//     echo '<br>';
//     $stmt = $conn->prepare('INSERT INTO contacts (contact_prenom,contact_nom,contact_tel,contact_email,societe_id) VALUES (?,?,?,?,?)');
//     echo '2';
//     $stmt->execute([$firstname,$surname,$phone,$email,$companyId]);
//     echo '3';
// }

// function deleteContact($conn,$id) {
//     print_r($id);
//     echo '1';
//     $stmt = $conn->prepare('DELETE FROM contacts WHERE contact_id = ?');
//     echo '2';
//     $stmt->execute([$id]);
//     echo '3';
// }

// function updateContact($conn,$firstname, $surname, $phone, $email, $companyId, $id) {
//     $stmt = $conn->prepare('UPDATE contact SET contact_prenom = ?, contact_nom = ?, contact_tel = ?, contact_email = ?, societe_id = ? WHERE id = ?');
//     $stmt->execute([$firstname,$surname,$phone,$email,$companyId,$id]);
// }

// function getContactOrderedBy($conn,$param) {
//     $stmt = $conn->prepare('SELECT * FROM contacts ORDER BY ' + $param);
//     $stmt->execute();
//     $arr = $stmt->fetchAll();
//     echo '<br>';
//     foreach ($arr as $row) {
//         var_dump($row);
//         echo '<br>';
//         echo '<br>';
//     }
// }

// function getContactFilteredBy($conn,$param, $value) {
//     $stmt = $conn->prepare('SELECT * FROM contacts WHERE ' + $param + ' = ?');
//     $stmt->execute([$value]);
//     $arr = $stmt->fetchAll();
//     echo '<br>';
//     foreach ($arr as $row) {
//         var_dump($row);
//         echo '<br>';
//         echo '<br>';
//     }
// }

?>