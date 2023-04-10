<?php

//Establecer la conexión a la base de datos
$db = new Base;
$conn=$db->ConexionBD();

//Llenar la vista
// $stmt2 = $conn->prepare("SELECT * FROM Usuario");
// $stmt2->execute();
// $resultado2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

//PAGINACION

// Calcular el número total de elementos
$total = $conn->query('SELECT COUNT(*) FROM Usuario')->fetchColumn();

// Calcular la página actual y el número total de páginas
$elementosPorPagina = 10;
$totalPaginas = ceil($total / $elementosPorPagina);

// Calcular el inicio y el fin de la página actual
$inicio = max(0, min($inicio, $total - 1));
$fin = min($inicio + $elementosPorPagina - 1, $total - 1);

// Realizar la consulta para obtener los elementos de la página actual
$stmt = $conn->prepare('SELECT * from Usuario ORDER BY ID OFFSET ? ROWS FETCH NEXT ? ROWS ONLY');
$stmt->bindValue(1, $inicio, PDO::PARAM_INT);
$stmt->bindValue(2, $elementosPorPagina, PDO::PARAM_INT);
$stmt->execute();
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);