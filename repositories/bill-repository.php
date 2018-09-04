<?php

function getAllBills($conn) {
    $stmt = $conn->prepare('SELECT * FROM factures');
    $stmt->execute();
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $arr;
}

function getAllBillsFull($conn) {
    $stmt = $conn->prepare('SELECT factures.*, societes.societe_id, societes.societe_nom, contacts.contact_id, contacts.contact_prenom, contacts.contact_nom FROM factures INNER JOIN societes ON factures.societe_id=societes.societe_id INNER JOIN contacts ON factures.contact_id=contacts.contact_id');
    $stmt->execute();
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $arr;
}

function getAllBillsOrdered($conn) {
    $stmt = $conn->prepare('SELECT * FROM factures ORDER BY facture_nom ASC');
    $stmt->execute();
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $arr;
}

function getLastBills($conn) {
    $stmt = $conn->prepare('SELECT factures.*, societes.societe_id, societes.societe_nom, contacts.contact_id, contacts.contact_prenom, contacts.contact_nom FROM factures INNER JOIN societes ON factures.societe_id=societes.societe_id INNER JOIN contacts ON factures.contact_id=contacts.contact_id ORDER BY facture_date DESC LIMIT 5');
    $stmt->execute();
    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $arr;
}

function getBillById($conn,$id) {
    $stmt = $conn->prepare('SELECT * FROM factures WHERE facture_id = ?;');
    $stmt->execute([$id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getBillByIdFull($conn,$id) {
    $stmt = $conn->prepare('SELECT factures.*, societes.societe_id, societes.societe_nom, contacts.contact_id, contacts.contact_prenom, contacts.contact_nom FROM factures INNER JOIN societes ON factures.societe_id=societes.societe_id INNER JOIN contacts ON factures.contact_id=contacts.contact_id WHERE facture_id = ?;');
    // $stmt = $conn->prepare('SELECT * FROM factures WHERE facture_id = ?;');
    $stmt->execute([$id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function createBill($conn,$number, $date, $label, $companyId, $contactId) {
    // echo 'test';
    $stmt = $conn->prepare('INSERT INTO factures (facture_numero,facture_date,facture_motif,societe_id,contact_id) VALUES (?,?,?,?,?)');
    $stmt->execute([$number,$date,$label,$companyId,$contactId]);
}

function updateBill($conn,$number, $date, $label, $companyId, $contactId, $id) {
    // echo 'test';
    $stmt = $conn->prepare('UPDATE factures SET facture_numero = ?, facture_date = ?, facture_motif = ?, societe_id = ?, contact_id = ? WHERE facture_id = ?');
    $stmt->execute([$number,$date,$label,$companyId,$contactId,$id]);
}

function deleteBill($conn,$id) {
    $stmt = $conn->prepare('DELETE FROM factures WHERE facture_id = ?');
    $stmt->execute([$id]);
}

?>