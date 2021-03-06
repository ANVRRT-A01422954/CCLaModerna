<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bloqueo de clientes</title>
    </head>
    <body>
        <div class="fix-margin">
        <br>
            <h2>Bloqueo de clientes</h2>
            <br>
            <table style="width:100%" class="table">
                <thead class="thead-light">
                    <tr style="text-align: center;">
                        <th><label class="campo__label" >Disponibles</label></th>
                        <th><label class="campo__label" >Bloqueados</label></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <table style="width: 100%;">
                            <?php
                                $clientesD = disClients($conn, 0, $_SESSION["idCompania"], 1);
                                $check=mysqli_fetch_assoc($clientesD);
                                if($check){
                                    echo"<tr>";
                                            echo"<td>".$check["nombreCliente"]."</td>";
                                            echo"<td>";
                                                echo"<a href='../includes/functions_catalogos.php?estadoB=2&idB=".$check["idCliente"]."'class='btn btn-danger'>Bloquear</a></th>";
                                            echo"</td>";
                                        echo"</tr>";
                                    while($row = mysqli_fetch_assoc($clientesD))
                                    {
                                        if ($row["estatus"] == 1)
                                        {
                                            echo"<tr>";
                                                echo"<td>".$row["nombreCliente"]."</td>";
                                                echo"<td>";
                                                    echo"<a href='../includes/functions_catalogos.php?estadoB=2&idB=".$row["idCliente"]."'class='btn btn-danger'>Bloquear</a></th>";
                                                echo"</td>";
                                            echo"</tr>";
                                        }
                                    }
                                }
                                else{
                                    echo"No hay clientes disponibles";
                                }
                            ?>
                            </table>
                            </td>
                            <td>
                            <table style="width: 100%;">
                            <?php
                                $clientesB = disClients($conn, 1, $_SESSION["idCompania"], 1);
                                $check=mysqli_fetch_assoc($clientesB);
                                if($check){
                                    echo"<tr>";
                                            echo"<td>".$check["nombreCliente"]."</td>";
                                            echo"<td>";
                                                echo"<a href='../includes/functions_catalogos.php?estadoB=1&idB=".$check["idCliente"]."'class='btn btn-success'>Desbloquear</a></th>";
                                            echo"</td>";
                                        echo"</tr>";
                                    while($row = mysqli_fetch_assoc($clientesB))
                                    {
                                        if ($row["estatus"] == 1)
                                        {
                                            echo"<tr>";
                                                echo"<td>".$row["nombreCliente"]."</td>";
                                                echo"<td>";
                                                    echo"<a href='../includes/functions_catalogos.php?estadoD=1&idD=".$row["idCliente"]."'class='btn btn-success'>Desbloquear</a></th>";
                                                echo"</td>";
                                            echo"</tr>";
                                        }
                                    }
                                }
                                else{
                                    echo"No hay clientes bloqueados";
                                }
                            ?>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>