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
                <label for="OLT">Položka:</label>
                <select name="OLT[]" id="OLT">
                    <option value="OLT NOD8">Položka 3</option>
                    <option value="OLT Kalnica">Položka 4</option>
                </select>
            </div>

            <div class="form-group">
                <label for="message">Správa:</label>
                <textarea name="message" id="message" required></textarea>
            </div>
            <button type="submit">Odoslať</button>
        </form>
    </div>

    <script>
        // Zachytiť udalosť zmeny hodnoty na poliach
        var nameInput = document.getElementById('name');
        var emailInput = document.getElementById('email');
        var messageInput = document.getElementById('message');

        nameInput.addEventListener('input', handleInputChange);
        emailInput.addEventListener('input', handleInputChange);
        messageInput.addEventListener('input', handleInputChange);

        // Spracovať hodnoty
        function handleInputChange(event) {
            var nameValue = nameInput.value;
            var emailValue = emailInput.value;
            var messageValue = messageInput.value;

            // Tu môžete spracovať hodnoty z polí formulára
            // Napríklad môžete ich použiť na validáciu, dynamické zobrazenie alebo odoslanie asynchrónnych požiadaviek
            console.log('Meno:', nameValue);
            console.log('Email:', emailValue);
            console.log('Správa:', messageValue);
        }
    </script>



</body>
</html>
