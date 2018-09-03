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

// var_dump($email);
// echo "<br>";
// var_dump($password);
// echo "<br>";
// echo "<br>";

$user = getUserByEmail($conn,$email);
// echo "<br>";
// echo "<br>";
// var_dump($user);
// echo "<br>";
// var_dump($user);
// echo "<br>";
// echo "<br>";
$options = [
    'cost' => 12,
];
// var_dump(password_hash($password, PASSWORD_BCRYPT, $options));
// echo "<br>";
// echo "<br>";
// if($user->getUserPassword() === password_hash($password, PASSWORD_BCRYPT, $options)) {
if(password_verify($password, $user['user_password'])) {
// if($user->getUserPassword() == $password) {
    echo 'log in. ADD TO SESSION. Redirect with message';
    $_SESSION["currentUser"] = $user;
    // echo "<br>";
    // echo "<br>";
    // echo "SESSION";
    // echo "<br>";
    // var_dump($_SESSION);
    // echo "<br>";
    // echo "<br>";
    // echo "redirect";
    // header("Location: http://localhost:8888/COGIP-app/index.php");
    // exit();
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

// echo 'ok';

?>