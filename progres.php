<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Animácia loading po odoslaní formulára</title>
    <style>
        #loading {
            display: none;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Animácia loading po odoslaní formulára</h2>
        <form id="myForm">
            <div class="form-group">
                <label for="macAddress">MAC adresa:</label>
                <input type="text" name="macAddress" id="macAddress">
            </div>
            <button type="submit">Odoslať</button>
        </form>
        <div id="loading">
            <img src="loading.gif" alt="Loading">
            <p>Čakajte prosím...</p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>