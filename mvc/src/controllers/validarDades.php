<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'dades.php';

    $enteredCode = $_POST['accessCode'];

    if ($enteredCode === $accessCode) {
        $_SESSION['identified'] = true;
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid access code']);
    }
}
?>