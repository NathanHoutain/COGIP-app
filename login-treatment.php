<?php
session_start();
require_once('includes/db-connect.php');
require_once('repositories/user-repository.php');

if(isset($_POST['loginEmail']) && $_POST['loginEmail'] != "") {
    $email = filter_var($_POST['loginEmail'], FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Cette adresse email est valide.";
    } else {
        echo "Cette adresse email n'est pas valide.";
    }
}
if(isset($_POST['loginPwd']) && $_POST['loginPwd'] != "") {
    $password = filter_var($_POST['loginPwd'], FILTER_SANITIZE_STRING);
}

$user = getUserByEmail($conn,$email);
$options = [
    'cost' => 12,
];
if(password_verify($password, $user['user_password'])) {
    echo 'log in. ADD TO SESSION. Redirect with message';
    $_SESSION["currentUser"] = $user;
    echo '<script type="text/javascript">
            window.location = "http://localhost:8888/COGIP-app/index.php";
            exit();
        </script>';
    die;
} else {
    echo '<script type="text/javascript">
            window.location = "http://localhost:8888/COGIP-app/index.php?login=pwdError"
        </script>';
}

?>