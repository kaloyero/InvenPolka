<h4 class="widgettitle nomargin shadowed">
	<?php $privis = $this->Session->read("privilegios"); ?>

	<?php if (! empty($privis['addArticulo'])) { ?>
		<button id="addArticulo" class="btn" title= "<?php echo $privis['addArticulo']['ayuda'] ?>"><?php echo $privis['addArticulo']['nombre'] ?></button>
	<?php } ?>
	<?php if (! empty($privis['addCrearPed'])) { ?>
		<button class="btn btn-primary crearPedido " disabled="true" title= "<?php echo $privis['addCrearPed']['ayuda'] ?>"><?php echo $privis['addCrearPed']['nombre'] ?></button>
	<?php } ?>
	<?php if (! empty($privis['addAsignarDepo'])) { ?>
		<button class="btn btn-primary asignarDepo" disabled="true" title= "<?php echo $privis['addAsignarDepo']['ayuda'] ?>"><?php echo $privis['addAsignarDepo']['nombre'] ?></button>
	<?php } ?>
	<?php if (! empty($privis['addDevolucion'])) { ?>
		<button class="btn btn-primary devolucionArt" disabled="true" title= "Cuando llegan art&iacute;culos del proyecto"><?php echo $privis['addDevolucion']['nombre'] ?></button>
	<?php } ?>
	<?php if (! empty($privis['addBajaArt'])) { ?>
		<button class="btn btn-primary deleteArt" disabled="true" title= "Dar de baja Art&iacute;culos"><?php echo $privis['addBajaArt']['nombre'] ?></button>
	<?php } ?>
	<a class="btn btn-primary comandaArtSel " title="Descarga en pdf los artículos seleccionados" href="33">Descargar Selección</a>
	
</h4>
<h4 class="widgettitle nomargin shadowed">Listado de Articulos 	
<input id="artMostrarDisponibles" type="button" name="artDisponibles"  value="Mostrar Articulos Disponibles" /> 
<input id="artMostrarTodos" type="button" name="artDisponibles" style = "border-color: rgb(105, 131, 236);"  value="Mostrar Todos los Articulos" /> 
<input id="artMostrarConStock" type="hidden" name="conStock" value="S" /> 
</h4>
<table  id="configurationTable" class ="table table-bordered" width="100%"  style="width: 100%;">
	<thead>
	     <tr>
			<th style="display:none;">Id</th>
         </tr>
	</thead>
	<tbody>
	</tbody>
</table>