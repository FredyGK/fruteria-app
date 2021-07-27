<?php
include 'db.php';

$query = $conexion->prepare('SELECT id, nombre_fruta, precio, peso FROM frutas WHERE activo = 1');
$query->execute();

$frutas = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutas</title>
    <style>
        table, thead, tr, td, th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<button>Nuevo</button>
<table>
<thead>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Peso</th>
    <th>Costo</th>
    <th>Acciones</th>
  </tr>
</thead>
<tbody>
    <?php foreach ($frutas as $fruta): ?>
        <tr>
    <td><?= $fruta['id'] ?></td>
    <td><?= utf8_encode($fruta['nombre_fruta']) ?></td>
    <td><?= $fruta['peso'] ?> grms</td>
    <td>$ <?= $fruta['precio'] ?></td>
    <td>
        <button>Editar</button>
        <button>Eliminar</button>
    </td>
</tr>
    <?php endforeach; ?>
</tbody>
</table>
</body>
</html>