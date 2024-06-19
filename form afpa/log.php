<?php
session_start();

$user = [
    'name' => null,
    'email' => null,
    'tel' => null,
    'situation' => null,
];

if (isset($_POST['submit'])) {
    if (empty($_POST['user_name']) && empty($_POST['user_mail']) && empty($_POST['user_tel']) && empty($_POST['user_situation'])) {
        print 'Il manque des informations!';
        session_destroy();
    } else {
        $_SESSION['name'] = $_POST['user_name'];
        $user['name'] = $_POST['user_name']; 
        $user['email'] = $_POST['user_mail'];
        $user['tel'] = $_POST['user_tel'];
        $user['situation'] = $_POST['user_situation'];  
        print 'Bonjour ' . $user['name'] . '' . $user['email'] . '' . $user['situation'];
    }
} else {
    print 'Hop hop hop mon garçon!';
}

?>