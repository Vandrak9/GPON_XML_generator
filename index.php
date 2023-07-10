<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Moderný PHP formulár</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Kontaktný formulár</h2>
        <form method="post" action="odoslat.php">
            <div class="form-group">
                <label for="name">Meno:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="message">Správa:</label>
                <textarea name="message" id="message" required></textarea>
            </div>
            <button type="submit">Odoslať</button>
        </form>
    </div>
</body>
</html>
