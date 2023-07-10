<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Animácia načítavania stránky</title>
    <style>
        #loading-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .loader {
            border: 16px solid #3498db;
            border-radius: 50%;
            border-top: 16px solid #ffffff;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div id="loading-container">
        <div class="loader"></div>
    </div>

    <script>
        // Zavolajte túto funkciu, keď je stránka plne načítaná
        window.addEventListener('load', function() {
            var loadingContainer = document.getElementById('loading-container');
            loadingContainer.style.display = 'none';
        });
    </script>
</body>
</html>
