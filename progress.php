<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $numberofcontract = $_POST['numberofcontract'];

    // Tu môžete spracovať hodnoty premenných $name a $email

    // Príklad výstupu:
    echo 'Meno: ' . $name . '<br>';
    echo 'E-mail: ' . $numberofcontract;
}
?>
