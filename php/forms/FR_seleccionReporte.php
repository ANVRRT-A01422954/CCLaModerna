<div class="fix-margin">
    <h1 class="h1-mine">Creación de reportes</h1>

    <form class="formulario" style="min-height:18rem" method="POST" action="../php/R_reportePrueba2.php" autocomplete="off">
    <br>
        <div class="form-group">
            <label for="seleccionReporte">Selección de reporte</label>
            <select class="form-control" id="seleccionReporte" name="tipoReporte" required>
                <option value="VUV">Ventas por Unidad de Ventas</option>
                <option value="VR">Ventas por Representante</option>
                <option value="VC">Ventas por Cliente</option>
                <option value="VA">Ventas por Artículo</option>
                <option value="VMA">Ventas por Mes-Año</option>
            </select>
        </div>
        <div class="campo__3--button">
            <input class="campo__field button--blue" type="submit" value="Generar reporte" name="Generar">
        </div>
    </form>
</div>