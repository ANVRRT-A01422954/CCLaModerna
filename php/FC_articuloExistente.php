<div class="fix-margin">
	<h1 class="h1-mine">Artículo existente</h1>

	<form class="formulario">

        <div class="campo">
			<label class="campo__label" for="idArticulo">Id Artículo</label>
			<input class="campo__field" type="text" id="idArticulo">
		</div>

		<div class="campo">
			<label class="campo__label" for="idCompania">Compañía</label>
			<input class="campo__field" type="text" id="idCompania">
		</div>

		<div class="campo campo__text">
			<label class="campo__label" for="descripcion">Descripción</label>
			<textarea class="campo__field campo__field--textarea" id="descripcion"></textarea>
		</div>

		<div class="campo">
			<label class="campo__label" for="unidad">Costo estándar</label>
			<input class="campo__field" type="number" id="costo">
		</div>


		<div class="campo__3--button">
			<input class="campo__field button--red" style="grid-row: 3 / 4;" type="reset" value="Limpiar">
			<input class="campo__field button--blue" type="submit" value="Baja">
			<input class="campo__field button--blue" type="submit" value="Alta">
		</div>
	</form>
</div>