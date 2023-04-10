<?php
//Establecer la conexión a la base de datos
$db = new Base;
$conn=$db->ConexionBD();

//Llenar la vista
// $stmt = $conn->prepare("SELECT Orden.ID, Usuario.Nombre, Usuario.Email, Descripcion,Fecha_Inicio, Ruta_archivos
// FROM Orden
// INNER JOIN Usuario
// ON Usuario.ID = Orden.ID_Usuario
// ORDER BY Orden.ID DESC");

// $stmt->execute();
// $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

//PAGINACION

// Calcular el número total de elementos
$total = $conn->query('SELECT COUNT(*)
FROM (
    SELECT Orden.ID, Usuario.Nombre, Usuario.Email, Descripcion, Fecha_Inicio, Ruta_archivos
    FROM Orden
    INNER JOIN Usuario ON Usuario.ID = Orden.ID_Usuario
) as consulta')->fetchColumn();

// Calcular la página actual y el número total de páginas
$elementosPorPagina = 10;
$totalPaginas = ceil($total / $elementosPorPagina);

// Calcular el inicio y el fin de la página actual
$inicio = max(0, min($inicio, $total - 1));
$fin = min($inicio + $elementosPorPagina - 1, $total - 1);

// Realizar la consulta para obtener los elementos de la página actual
$stmt = $conn->prepare('SELECT Orden.ID, Usuario.Nombre, Usuario.Email, Descripcion,Fecha_Inicio, Ruta_archivos
FROM Orden
INNER JOIN Usuario
ON Usuario.ID = Orden.ID_Usuario ORDER BY Orden.ID desc OFFSET ? ROWS FETCH NEXT ? ROWS ONLY');
$stmt->bindValue(1, $inicio, PDO::PARAM_INT);
$stmt->bindValue(2, $elementosPorPagina, PDO::PARAM_INT);
$stmt->execute();
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);





