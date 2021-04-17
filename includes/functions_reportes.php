<?php
require_once("dbh.inc.php");


function dispOrdenes($conn, $idCompania){
    $sql = $sql = "SELECT * FROM Orden JOIN Cliente ON Orden.idCliente = Cliente.idCliente WHERE Orden.estatus = 1 AND Orden.idCompania = ? ORDER BY fechaOrden";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql))
    {
        header("location: ../php/index.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"s", $idCompania);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    while($orders = mysqli_fetch_assoc($resultData))
    {
        //Order Info
        $noOrden       = $orders["idOrden"];
        $idCliente     = $orders["idCliente"];
        $nombreCliente = $orders["nombreCliente"];
        $fechaOrden    = $orders["fechaOrden"];

        //Tiempo por departamento
        $fac =  tiempoPorDepartamento($orders["tFac"],$fechaOrden);
        $cxc =  tiempoPorDepartamento($orders["tCXC"],$fechaOrden);
        $pre =  tiempoPorDepartamento($orders["tPRE"],$fechaOrden);
        $cst =  tiempoPorDepartamento($orders["tCST"],$fechaOrden);
        $ing =  tiempoPorDepartamento($orders["tING"],$fechaOrden);
        $pln =  tiempoPorDepartamento($orders["tPLN"],$fechaOrden);
        $fec =  tiempoPorDepartamento($orders["tFEC"],$fechaOrden);

        $total = $orders["total"];

        //Creating table
        echo "<tr>";
        echo "<td> $noOrden </td>";
        echo "<td> $idCliente </td>";
        echo "<td> $nombreCliente </td>";
        echo "<td> $fechaOrden </td>";
        echo "<td> $fac </td>";
        echo "<td> $cxc </td>";
        echo "<td> $pre </td>";
        echo "<td> $cst </td>";
        echo "<td> $ing </td>";
        echo "<td> $pln </td>";
        echo "<td> $fec </td>";
        echo "<td> $total </td>";
        echo "</tr>";

    }
    mysqli_stmt_close($stmt);
    exit();
}



?>