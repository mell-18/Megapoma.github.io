<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulos - Pomaray</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #56ab2f;
            font-size: 28px;
            margin: 0;
        }

        .search-bar {
            width: 200px;
            padding: 8px;
            border: 2px solid #56ab2f;
            border-radius: 8px;
            font-size: 14px;
        }

        .config-button {
            padding: 10px;
            background-color: #56ab2f;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .config-button:hover {
            background-color: #2c8e47;
        }

        .module {
            width: 200px;
            padding: 20px;
            margin: 10px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .module:hover {
            transform: translateY(-5px);
            background-color: #f0f0f0;
        }

        .module h3 {
            font-size: 18px;
            color: #56ab2f;
            margin: 0;
        }

        .modules-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Pomaray</h1>
        <input type="text" class="search-bar" placeholder="Buscar...">
        <button class="config-button" onclick="openConfig()">Colores</button>
    </header>

    <!-- Módulos -->
    <div class="modules-container">
        <div class="module" onclick="window.location.href='mensaje.php?category=escuelas'">
            <h3>Escuelas</h3>
        </div>
        <div class="module" onclick="window.location.href='mensaje.php?category=alumnos'">
            <h3>Alumnos</h3>
        </div>
        <div class="module" onclick="window.location.href='mensaje.php?category=padres'">
            <h3>Padres</h3>
        </div>
        <div class="module" onclick="window.location.href='mensaje.php?category=instituciones'">
            <h3>Instituciones Públicas</h3>
        </div>
        <div class="module" onclick="window.location.href='mensaje.php?category=empresas'">
            <h3>Empresas Privadas</h3>
        </div>
    </div>

    <script>
        let configClickCount = 0;

        function openConfig() {
            configClickCount++;

            // Cambiar el color de fondo de forma cíclica cada vez que se presiona el botón
            if (configClickCount % 4 === 1) {
                // Fondo rojo
                document.body.style.backgroundColor = '#ff0000';
            } else if (configClickCount % 4 === 2) {
                // Fondo negro
                document.body.style.backgroundColor = '#000000';
            } else if (configClickCount % 4 === 3) {
                // Fondo dorado
                document.body.style.backgroundColor = '#ffd700';
            } else {
                // Fondo verde
                document.body.style.backgroundColor = '#56ab2f';
            }
        }
    </script>

</body>
</html>
