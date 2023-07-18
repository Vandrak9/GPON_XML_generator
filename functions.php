<?php

class MacAddressValidator {
    private $macAddress;
    
    public function __construct($macAddress) {
        $this->macAddress = $macAddress;
    }
    
    public function validate() {
        $macAddress = str_replace([' ', '-'], '', $this->macAddress);
         // Odstránenie dvojbodiek zo vstupu
         $macAddress = str_replace(':', '', $macAddress);
        
        if (strlen($macAddress) !== 12) {
            return false;
        }
        
        if (!preg_match('/^([0-9A-Fa-f]{2}){6}$/', $macAddress)) {
            return false;
        }
        
        return true;
    }
}
