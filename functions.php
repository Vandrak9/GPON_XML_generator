<?php

function validateMacAddress($macAddress) {
    // Odstránenie medzier a pomlčiek z MAC adresy
    $macAddress = str_replace([' ', '-'], '', $macAddress);
    
    // Kontrola dĺžky MAC adresy
    if (strlen($macAddress) !== 12) {
        return false;
    }
    
    // Kontrola platnosti MAC adresy
    if (!preg_match('/^([0-9A-Fa-f]{2}){6}$/', $macAddress)) {
        return false;
    }
    
    return true;
}

?>