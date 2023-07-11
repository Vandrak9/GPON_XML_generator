<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>XML Generator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>GPON XML Generator</h2>
        <form id="New_ONU">
        <form method="post" action="progres.php">
            <div class="form-group">
                <label for="name">Meno a priezvisko:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="numberofcontract">Číslo zmluvy:</label>
                <input type="text" name="numberofcontract" id="numberofcontract" required>
            </div>

            <div class="form-group">
                <label for="serialONU">Sériové číslo ONU:</label>
                <input type="text" name="serialONU" id="serialONU" required>
            </div>

            <div class="form-group">
                <label for="macAddress">MAC adresa:</label>
                <input type="text" name="macAddress" id="macAddress" required>
                <span id="macError" class="error"></span>
            </div>

            <script>
        var macAddressInput = document.getElementById('macAddress');
        var macErrorSpan = document.getElementById('macError');
        var macRegex = /^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/;

        macAddressInput.addEventListener('input', function() {
            var macAddress = macAddressInput.value;
            if (macRegex.test(macAddress)) {
                macErrorSpan.textContent = '';
            } else {
                macErrorSpan.textContent = 'Neplatná MAC adresa';
            }
        });
    </script>

            <div class="form-group">
                <label for="OLT">OLT:</label>
                <select name="OLT[]" id="OLT">
                    <option value="">-- Vyberte --</option>
                    <option value="OLT_NOD8">OLT NOD8</option>
                    <option value="OLT_Kalnica">OLT Kálnica</option>                
                </select>
            </div>

            <div class="form-group">
                <label for="ONU_mode">Mód ONU:</label>
                <select name="ONU_mode[]" id="ONU_mode">
                    <option value="">-- Vyberte --</option>
                    <option value="ROUTER">Privátna IP router</option>
                    <option value="BRIDGE">Verejná IP bridge</option>          
                </select>
            </div>

            <div class="form-group">
                <label for="ONU_ROUTER" id="label_select_router"class="hidden">Model ONU v móde ROUTER:</label>
                <select name="ONU_ROUTER[]" id="ONU_ROUTER" class="hidden">
                    <option value="">-- Vyberte --</option>
                    <option value="DASAN_H665_ROUTER">DASAN H665</option>
                    <option value="DASAN_H665C_ROUTER">DASAN H665C</option>
                    <option value="DASAN_H660GM_ROUTER">DASAN H665C</option>
                    <option value="HALNY_HL-1GE_ROUTER">HALNY HL-1GE</option>
                    <option value="HALNY_HL-4GMV_ROUTER">HALNY HL-4GMV</option>                    
                </select>
            </div>

            <div class="form-group">
                <label for="ONU_BRIDGE" id="label_select_bridge" class="hidden">Model ONU v móde BRIDGE:</label>
                <select name="ONU_BRIDGE[]" id="ONU_BRIDGE" class="hidden">
                    <option value="">-- Vyberte --</option>
                    <option value="DASAN_H665_BRIDGE">DASAN H665</option>
                    <option value="DASAN_H665C_BRIDGE">DASAN H665C</option>
                    <option value="HALNY_HL-1GE_BRIDGE">HALNY HL-1GE</option> 
                    <option value="HALNY_HL-GSFP_BRIDGE">HALNY HL-GSFP</option>             
                </select>
            </div>

            <div class="form-group">
                <label for="message">Správa:</label>
                <textarea name="message" id="message" required></textarea>
            </div>
            <button type="submit">Odoslať</button>
        </form>
    </div>

    
    <script src="mac_validator.js"></script>
    <script src="menu_change_visibility.js"></script>
</body>
</html>
