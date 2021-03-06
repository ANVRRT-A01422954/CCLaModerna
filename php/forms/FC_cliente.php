<div class="fix-margin">
	<h1 class="h1-mine">Cliente</h1>

	<form class="formulario" name="fc_cliente" method="POST" action="../includes/functions_catalogos.php" autocomplete="off">
		<div class="campo">
			<label class="campo__label" for="cliente"> id Cliente</label>
			<input class="campo__field" type="text" name="idCliente" id="idCliente" list="cliente" maxlength="10" required >
			<?php
				
				$reg = dispClientes($conn, $_SESSION["idCompania"]);
				
				echo "<datalist id='cliente'>";
				while($row = mysqli_fetch_assoc($reg))
				{
					if($row["estatus"]==1){
						echo "<option value = '".$row["idCliente"]."'>".$row["nombreCliente"]."</option>";
					}
					

				}
				echo "</datalist>";
			?>
		</div>

		<div class="campo">
			<label class="campo__label" for="compania">Compañía</label>
			<?php
				echo "<input class='campo__field' type='text'name='idCompania' id='idCompania' value='".$_SESSION["idCompania"]."' readonly>";
			?>
		</div>

		<div class="campo">
			<label class="campo__label" for="idRepresentante">Representante*</label>
			<input class="campo__field" type="text" name="idRepresentante" id="idRepresentante" list="representante" >
			<?php

				$reg = dispRepresentante($conn, $_SESSION["idCompania"]);
				
				echo "<datalist id='representante'>";
				while($row = mysqli_fetch_assoc($reg))
				{
					if($row["estatus"]==1){
						echo "<option value='".$row["idRepresentante"]."'>".$row["nomRepresentante"]."</option>";
					}
					

				}
				
				echo "</datalist>";
			?>
		</div>

		<div class="campo">
			<label class="campo__label" for="idAlmacen">Lista de  precios a utilizar*</label>
			<input class="campo__field" type="text" name="listaPrecios" id="listaPrecios" list="listaPrecio" required>
			<?php
				
				$reg = dispListaPrecios($conn, $_SESSION["idCompania"]);
				
				echo "<datalist id='listaPrecio'>";
				while($row = mysqli_fetch_assoc($reg))
				{
					echo "<option>".$row["idLista"]."</option>";
					

				}
				echo "</datalist>";
			?>
		</div>

		<div class="campo">
			<label class="campo__label" for="idAlmacen">Almacen</label>
			<input class="campo__field" type="text" name="idAlmacen" id="idAlmacen" list="almacen">
			<?php
				
				$reg = dispAlmacen($conn, $_SESSION["idCompania"]);
				
				echo "<datalist id='almacen'>";
				while($row = mysqli_fetch_assoc($reg))
				{
					if($row["estatus"]==1){
						echo "<option value='".$row["idAlmacen"]."'>".$row["descripcion"]."</option>";
					}
					

				}
				echo "</datalist>";
			?>
		</div>

		<div class="campo">
			<label class="campo__label" for="nomCliente">Nombre del cliente*</label>
			<input class="campo__field" type="text" name="nomCliente" id="nomCliente" required>
		</div>

		<div class="campo">
			<label class="campo__label" for="listPrecios">Estatus de cliente*</label>
			<input class="campo__field" type="number" name="estatus" id="estatus" min="1" max="3" required>
		</div>

		<div class="campo">
			<label class="campo__label" for="analista">Analista*</label>
			<input class="campo__field" type="text" name="idAnalista" id="idAnalista" list="analista" >
			<?php

				$reg = dispRepresentante($conn, $_SESSION["idCompania"]);
				
				echo "<datalist id='analista'>";
				while($row = mysqli_fetch_assoc($reg))
				{
					if($row["estatus"]==1){
						echo "<option value='".$row["idRepresentante"]."'>".$row["nomRepresentante"]."</option>";
						// echo "<option>".$row["idRepresentante"]."</option>";
					}
	
				}
				echo "</datalist>";
			?>
		</div>

		<div class="campo">
			<label class="campo__label" for="divisa">Divisa</label>
			<input class="campo__field" type="text" name="divisa" id="divisa" required>
		</div>

		<div class="campo">
			<label class="campo__label" for="lim_credito">Límite de crédito*</label>
			<input class="campo__field" type="number" name="limCredito" id="limCredito" required>
		</div>

		<div class="campo">
			<label class="campo__label" for="saldoOrden">Saldo orden*</label>
			<input class="campo__field" type="number" name="saldoOrden" id="saldoOrden" required >
		</div>

		<div class="campo">
			<label class="campo__label" for="saldoFact">Saldo factura*</label>
			<input class="campo__field" type="number" name="saldoFactura" id="saldoFactura" required>
		</div>

		<div class="campo campo--aside">
			<label class="campo__label" for="bloqueo">Bloqueo</label>
			<input class="campo__checkbox" type="checkbox" name="bloqueo" id="bloqueo" value="1" >
		</div>

		<div class="campo__3--button">
			<input class="campo__field button--red" style="grid-row: 3 / 4;" type="reset" value="Limpiar">
			<input class="campo__field button--blue" type="submit" name= "B_cliente" value="Baja">
			<input class="campo__field button--blue" type="submit" name= "A_cliente" value="Alta" >
		</div>
		<div class="campo__3--button">
		<input style="background-color:#E2CD01" class="campo__field button--blue" type="button" value="Actualizar" name="U_cliente" id="U_cliente" onclick="updateCliente()">
		</div>
	</form>

	<form method="POST" action="../php/C_cliente.php" style="overflow: hidden">
		<div class="consultas">
			<input class="campo__field consultas--button button--blue" type="submit" value="Consultar Todo" name="C_cliente">
		</div>
	</form>
</div>
