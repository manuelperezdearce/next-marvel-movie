<?php
$personas = [
    ['id' => '1', 'nombre' => 'Juan', 'edad' => 25],
    ['id' => '2', 'nombre' => 'María', 'edad' => 30],
    ['id' => '3', 'nombre' => 'Pedro', 'edad' => 22],
    ['id' => '4', 'nombre' => 'Ana', 'edad' => 28],
    ['id' => '5', 'nombre' => 'Luis', 'edad' => 35],
    ['id' => '6', 'nombre' => 'Sofía', 'edad' => 24],
    ['id' => '7', 'nombre' => 'Carlos', 'edad' => 27],
    ['id' => '8', 'nombre' => 'Laura', 'edad' => 29],
    ['id' => '9', 'nombre' => 'Javier', 'edad' => 31],
    ['id' => '10', 'nombre' => 'Clara', 'edad' => 26],
];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjetas de Personas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            width: 150px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <?php foreach ($personas as $persona): ?>
        <div class="card">
            <h3><?php echo $persona['nombre']; ?></h3>
            <p>Edad: <?php echo $persona['edad']; ?></p>
        </div>
    <?php endforeach; ?>

</body>

</html>