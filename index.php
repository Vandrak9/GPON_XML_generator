<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>XML Generator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<script src="menu_change_visibility.js"></script>


    <div class="container">
        <h2>GPON XML Generator</h2>
        <form method="post" action="odoslat.php">
            <div class="form-group">
                <label for="name">Meno a priezvisko:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="numberofcontract">Číslo zmluvy:</label>
                <input type="text" name="numberofcontract" id="numberofcontract" required>
            </div>
            <div class="form-group">
                <label for="numberofcontract">Sériové číslo ONU:</label>
                <input type="text" name="numberofcontract" id="numberofcontract" required>
            </div>
            <div class="form-group">
                <label for="OLT">OLT:</label>
                <select name="OLT[]" id="OLT">
                    <option value="DASAN_H665">DASAN H665</option>
                    <option value="DASAN_H665C">DASAN H665C</option>
                    <option value="HALNY_HL-1GE">HALNY HL-1GE</option>
                    <option value="HALNY_HL-4GMV">HALNY HL-4GMV</option>                    
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
                <label for="ONU_ROUTER">Model ONU:</label>
                <select name="ONU_ROUTER[]" id="ONU_ROUTER">
                    <option value="DASAN_H665">DASAN H665</option>
                    <option value="DASAN_H665C">DASAN H665C</option>
                    <option value="HALNY_HL-1GE">HALNY HL-1GE</option>
                    <option value="HALNY_HL-4GMV">HALNY HL-4GMV</option>                    
                </select>
            </div>

            <div class="form-group">
                <label for="ONU_BRIDGE">Model ONU:</label>
                <select name="ONU_BRIDGE[]" id="ONU_BRIDGE">
                    <option value="DASAN_H665">DASAN H665</option>
                    <option value="DASAN_H665C">DASAN H665C</option>
                    <option value="HALNY_HL-1GE">HALNY HL-1GE</option>
                    <option value="HALNY_HL-4GMV">HALNY HL-4GMV</option>                    
                </select>
            </div>

            <div class="form-group">
                <label for="message">Správa:</label>
                <textarea name="message" id="message" required></textarea>
            </div>
            <button type="submit">Odoslať</button>
        </form>
    </div>

    

    <script src="menu_change_visibility.js"></script>
</body>
</html>
