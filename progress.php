<?php
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $numberofcontract = $_POST['numberofcontract'];
    $serialONU = $_POST['serialONU'];
    $macAddress = $_POST['macAddress'];
    $OLT = $_POST['OLT'];
    $ONU_mode = $_POST['ONU_mode'];
    $ONU_ROUTER = $_POST['ONU_ROUTER'];
    $ONU_BRIDGE = $_POST['ONU_BRIDGE'];
    

    if (validateMacAddress($macAddress)) {
        echo 'Platná MAC adresa';
    } else {
            echo 'Neplatná MAC adresa';
             // Presmerovanie na index.php
            header('Location: index.php');
    exit(); // Ukončenie vykonávania skriptu
    


    // Tu môžete spracovať hodnoty premenných $name a $email

    // Príklad výstupu:
    echo 'Meno: ' . $name . '<br>';
    echo 'Číslo zmluvy: ' . $numberofcontract;
    echo 'Sériové číslo ONU: ' . $serialONU . '<br>';
    echo 'MAC adresa: ' . $macAddress . '<br>';
    echo 'OLT: ' . $OLT . '<br>';
    echo 'Mód ONU:' . $ONU_mode . '<br>';
    echo 'Model ONU v móde ROUTER: ' . $ONU_ROUTER . '<br>';
    echo 'Model ONU v móde BRIDGE: ' . $ONU_BRIDGE . '<br>';
}
?>
