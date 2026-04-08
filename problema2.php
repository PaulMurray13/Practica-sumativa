<?php
$numero1 = 10;
$numero2 = 4;
$resultado = $numero1 - $numero2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma</title>

    <style>
        body {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .contenedor {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 10px 25px rgba(0,0,0,0.2);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .resultado {
            font-size: 40px;
            color: #4facfe;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="contenedor">
        <h1>Resultado de la resta</h1>

        <div class="resultado">
            <?php echo $resultado; ?>
        </div>
    </div>

</body>
</html>