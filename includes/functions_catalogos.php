<?php
function dispArticulos($conn, $idCompania){
    $sql="SELECT * FROM ArticuloExistente WHERE idCompania = ?";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql))
    {
        header("location: ../php/index.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"s", $idCompania);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if(mysqli_fetch_assoc($resultData))
    {
        return $resultData;
    }
    else{
        $result = "No hay artículos existentes para esta";
        return $result;
    }

    mysqli_stmt_close($stmt);
}
require_once("../includes/dbh.inc.php");

dispArticulos($conn, "225");
?>