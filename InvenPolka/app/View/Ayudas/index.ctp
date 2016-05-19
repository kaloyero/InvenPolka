<!DOCTYPE html>

<a class="ayudaCont" href="#" data-section="#home">Home</a>
<a class="ayudaCont" href="#" data-section="#products">Products</a>
<a class="ayudaCont" href="#" data-section="#contact">Contact</a>
<STYLE type="text/css">
section {
    display: none;
}

#home { height: 200px; background: beige; }
#products { height: 1000px; background: honeydew; display: block;}
#contact { height: 500px; background: seashell; }


.ayudaSection h3 {
		font-family: inherit;
		font-weight: bold;
		line-height: 20px;
		font-size: 18px;
		margin: 0;
		padding: 0;
		color: #B58080;
		text-rendering: optimizelegibility;	
		-webkit-margin-before: 1.67em;
		-webkit-margin-after: 1em;
		-webkit-margin-start: 0px;
		-webkit-margin-end: 0px;
		background: transparent;	

}
.ayudaSection h5 {
		font-family: inherit;
		font-weight: bold;
		line-height: 20px;
		font-size: 16px;
		margin: 0px;
		padding-left: 20px;
		color: #6D95DF;
		text-rendering: optimizelegibility;	
		-webkit-margin-before: 0em;
		-webkit-margin-after: 0.4em;
		-webkit-margin-start: 0px;
		-webkit-margin-end: 0px;
		background: transparent;	
 }
.ayudaSection h6 {
		font-family: inherit;
		font-weight: bold;
		line-height: 20px;
		font-size: 22px;
		margin: 0;
		padding: 0;
		color: #fc7d20;
		text-rendering: optimizelegibility;	
		-webkit-margin-before: 1.67em;
		-webkit-margin-after: 0.67em;
		-webkit-margin-start: 0px;
		-webkit-margin-end: 0px;
		background: transparent;
	  }
	  
.ayudaSection p { 
		font-size: 14px;
		padding-left: 40px;
		margin: 0px;
		 }
.ayudaIcono { 
	width:20px;
	height:20px;
}
.ayudaBoton { 
	margin-left: 5px;
}
.ayudaTitulo {
		font-size: 18px !important;
		color: #fc7d20;
		-webkit-margin-before: 0em;
		-webkit-margin-after: 1.67em;
		-webkit-margin-start: 0px;
		-webkit-margin-end: 0px;
	  }	  
.ayudaSubTitulo {
		font-size: 16px !important;
		color: #B58080;
		-webkit-margin-before: 1.67em;
		-webkit-margin-after: 1.67em;
		-webkit-margin-start: 0px;
		-webkit-margin-end: 0px;
	  }	

.ayudaSecciones {
		width:80%;
		float:left;
}
.AyudaMenu { 
		width:20%;
		float:left;
}

</STYLE>


<div id="wrapper"></div>
<div style="width:100%;">
<div class="AyudaMenu">

<?php $privis = $this->Session->read("privilegios"); ?>

<?php if (! empty($privis['menuArticulos'])) { ?>
	<li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#menuArticulos"><span class="icon-th-list"></span><?php echo $privis['menuArticulos']['nombre'] ?></a></li>
    <li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#opAgregarArticulo"> Agregar Artículo</a></li>
    <li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#opEditarArticulo"> Editar Artículo</a></li>
    <li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#opVerArticulo"> Ver Artículo</a></li>
	<li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#opCrearPedido"> Crear Pedido</a></li>
   	<li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#opAsignarStock"> Asignar Stock</a></li>
	<li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#opDevolucionArticulo"> Devolución de Artículos</a></li>
    <li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#opBajaArticulo">Baja de Artículos</a>
<?php } ?>
<?php if (! empty($privis['menuProyectos'])) { ?>
	<li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#menuProyectos"><span class="icon-th-list"></span><?php echo $privis['menuProyectos']['nombre'] ?></a></li>
   	<li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#opAgregarProyecto"> Agregar Proyecto</a></li>
	<li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#opEditarProyecto"> Editar Proyecto</a></li>
    <li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#opListadoPedidosProyecto"> Pedidos por Proyecto</a></li>
	<li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#opVerPedido"> "Sub item" Ver pedido</a></li>    
   	<li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#opDevolverPedido"> "Sub item" Devolver Pedido pedido</a></li>    
<?php } ?>
<?php if (! empty($privis['menuDeposito'])) { ?>
	<li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#menuDepositos"><span class="icon-th-list"></span><?php echo $privis['menuDeposito']['nombre'] ?></a></li>
<?php } ?>
<?php if (! empty($privis['menuInventario'])) { ?>
	<li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#menuInventario"><span class="icon-th-list"></span><?php echo $privis['menuInventario']['nombre'] ?></a></li>
<?php } ?>
<?php if (! empty($privis['menuPedidosArte'])) { ?>
	<li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#menuPedidosArte2"><span class="icon-th-list"></span><?php echo $privis['menuPedidosArte']['nombre'] ?></a></li>
<?php } ?>
<?php if (! empty($privis['menuPedEntrada'])) { ?>
	<li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#menuPedEntrada"><span class="icon-th-list"></span><?php echo $privis['menuPedEntrada']['nombre'] ?></a></li>
   	<li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#opVerPedido">Ver Pedido</a>
<?php } ?>
<?php if (! empty($privis['menuPedSal'])) { ?>
	<li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#menuPedSal"><span class="icon-th-list"></span><?php echo $privis['menuPedSal']['nombre'] ?></a></li>
    <li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#opVerPedido">Ver Pedido</a>
    <li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#opDespacharPedido">Despachar Pedido</a>
<?php } ?>
<?php if (! empty($privis['menuPedProyPend'])) { ?>
	<li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#menuPedProyPend"><span class="icon-th-list"></span><?php echo $privis['menuPedProyPend']['nombre'] ?></a></li>
    <li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#opVerPedido">Ver Pedido</a>
    <li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#opDevolverPedido">Devolver Pedido pedido</a></li>  
<?php } ?>
<?php if (! empty($privis['menuPedHisto'])) { ?>
	<li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#menuPedHisto"><span class="icon-th-list"></span><?php echo $privis['menuPedHisto']['nombre'] ?></a></li>
    <li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#opVerPedido">Ver Pedido</a>
<?php } ?>
<?php if (! empty($privis['menuMovi'])) { ?>
	<li class="active  animate8 fadeInUp"><a class="ayudaCont" href="#" data-section="#menuMovi"><span class="icon-th-list"></span><?php echo $privis['menuMovi']['nombre'] ?></a></li>
<?php } ?>

</div>

<div class="ayudaSecciones">

<section id="products">


</section>
<section id="home">
Home
<a class="ayudaCont" href="#" data-section="#products">Products</a>
</section>

<section id="contact">Contact</section>

<section id="menuArticulos" class="ayudaSection">
<h4 class="widgettitle nomargin shadowed ayudaTitulo">Listado de Artículos</h4>
	<p>
	En la opción Listado de Artículos se podrá ver todos los Artículos.
	</p>
	<h4 class="widgettitle nomargin shadowed ayudaSubTitulo">Filtros de Búsqueda</h4>
	<p>
	<h5>Búsqueda de Artículos:</h5><BR><p> En esta opción se pueden ingresar palabras para filtrar los Artículos que se muestran.</p>
	<h5>Mostrar Artículos Disponibles:</h5><BR><p> Si se preciona este botón mostrara en el listado SOLO los Artículos disponibles.</p>
	<h5>Mostrar Todos los Artículos:</h5><BR><p> Si se preciona este botón mostrara en el listado TODOS los artículos disponibles y no disponibles.</p>
	<h5>Mostrar XXX Registros:</h5><BR><p> Cantidad de artículos que se mostrarán en el listado por p;agina.</p>
	
	<br>
	<h4 class="widgettitle nomargin shadowed ayudaSubTitulo">Funcionalidades</h4>
	<h5>
    	<a class="ayudaCont" href="#" data-section="#opAgregarArticulo"> Agregar Artículo:</a>
    </h5>
    
    <p> Acción para crear un NUEVO artículo.</p>
	<br>
    
    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="Ver Articulo"><img class="ayudaIcono" src="app/webroot/img/view.png" alt="Ver Articulo"></button>
    	<a class="ayudaCont" href="#" data-section="#opVerArticulo"> Ver Artículo:</a>
    </h5>    
	<p> Posibilidad de ver la información del artículo.</p>
    <h5>
        <button class="glyphicon ayudaBoton" type="button" title="Editar Articulo"><img class="ayudaIcono" src="app/webroot/files/gif/edit.png" alt="Editar Articulo"></button>
        <a class="ayudaCont" href="#" data-section="#opEditarArticulo"> Editar Artículo:</a>
    </h5>    

	<p> Posibilidad de editar la información del Artículo.</p>
	<h5><a class="ayudaCont" href="#" data-section="#opCrearPedido"> Crear Pedido:</a></h5>
    
    <p> Acción para crear un nuevo pedido al Deposito. 
	<BR>Se deben seleccionar los artículos que se desean solicitar al deposito y luego presionar "Crear Pedido" para ir al formulario solicitud. 
    </p>
	<h5><a class="ayudaCont" href="#" data-section="#opAsignarStock"> Asignar Stock:</a></h5>
    
    <p> Acción para incementar la cantidad de stock en el inventario de los artículos seleccionados. 
	<BR>Se deben seleccionar los artículos que se desean solicitar al deposito y luego presionar "Asignar Stock" para ir al formulario de Asignación. 
    </p>
	<h5><a class="ayudaCont" href="#" data-section="#opDevolucionArticulo">Devolución de Artículos:</a></h5>
    <p> Acción para Devolver artículos al Deposito. 
	<BR>Se deben seleccionar los artículos que se deseán devolver al deposito y luego presionar "Devolución de Artículos" para ir al formulario de devolución.
    </p>
	<h5><a class="ayudaCont" href="#" data-section="#opBajaArticulo">Baja de Artículos:</a></h5>
    <p> Acción para dar de baja en el deposito artículos los artículos seleccionados. 
	<BR>Se deben seleccionar los artículos que se deseán dar de baja en el deposito y luego presionar "Baja de Artículos" para ir al formulario de Baja.
    </p>
	<h5>DESCARGAR SELECCIÓN:</h5><BR><p> Crea un documento PDF con la foto y el código de los artículos seleccionados. </p>
	
    <br>
    <br>
	
	</p>
<div class="botonera widgettitle"></div>


</section>

<section id="opEditarArticulo">
	<h3>Editar Artículo</h3>
    <p>Permite editar la información de un artículo.</p>
    
    <h6>Campos del Formulario</h6>
    
    <h5>Foto:</h5>  
	<p>Foto del Artículo.</p>
<br>
    <h5>Código artículo:</h5>  
	<p>El nombre del artículo.</p>

    <h5>Categoría:</h5>  
	<p>Seleción de a que categoría pertenece el Artículo.</p>
    <h5>Objeto:</h5>  
	<p>Seleción de que tipo objeto es el Artículo.</p>
    <h5>Decorado:</h5>  
	<p>Seleción de que tipo de decorado es el Artículo.</p>
    <h5>MAterial:</h5>  
	<p>Seleción de que material es el Artículo.</p>
    <h5>Dimensión:</h5>  
	<p>Seleción de a que dimensión pertenece el Artículo.</p>
    <h5>Estilo:</h5>  
	<p>Seleción de a que estilo pertenece el Artículo.</p>
<br>
    <h5>Descripción:</h5>  
	<p>Caracteristicas o información extra que se desee mencionar sobre el artículo. Será útil para la búsqueda en el <a class="ayudaCont" href="#" data-section="#menuArticulos">listado de artículos</a>.</p>
<br>
    <h5>Stock Total:</h5>  
	<p>Cantidad total existente del artículo.</p>
    <h5>Stock Disponible:</h5>  
	<p>Cantidad total disponible del artículo en el depósito.</p>
<br>
    <h5>Ubicación del Inventario:</h5>  
	<p>Cantidad de stock disponible en el depósito y en los proyectos. Cuando el artículo se encuentra en un proyecto, indica la fecha estimada de devolución. </p>

</section>

<section id="opVerArticulo">
	<h3>Ver Artículo</h3>
    <p>Permite editar la información de un artículo.</p>
    
    <h6>Campos del Formulario</h6>
    
    <h5>Foto:</h5>  
	<p>Foto del Artículo.</p>

    <h5>Código artículo:</h5>  
	<p>El nombre del artículo.</p>

    <h5>Descripción:</h5>  
	<p>Caracteristicas o información extra que se desee mencionar sobre el artículo. Será útil para la búsqueda en el <a class="ayudaCont" href="#" data-section="#menuArticulos">listado de artículos</a>.</p>
    
    <h5>Categoría:</h5>  
	<p>Seleción de a que categoría pertenece el Artículo.</p>
    <h5>Objeto:</h5>  
	<p>Seleción de que tipo objeto es el Artículo.</p>
    <h5>Decorado:</h5>  
	<p>Seleción de que tipo de decorado es el Artículo.</p>
    <h5>MAterial:</h5>  
	<p>Seleción de que material es el Artículo.</p>
    <h5>Dimensión:</h5>  
	<p>Seleción de a que dimensión pertenece el Artículo.</p>
    <h5>Estilo:</h5>  
	<p>Seleción de a que estilo pertenece el Artículo.</p>

    <h5>Stock Inicial:</h5>  
	<p>Cantidad disponible del nuevo artículo.</p>
    <h5>Depósito:</h5>  
	<p>Selección del depósito al que pertenece.</p>
    <h5>Proyecto:</h5>  
	<p>Este campo es necesarió solo si el artículo que se deseea dar de alta se encuentra en un proyecto.</p>
    <h5>Estado:</h5>  
	<p>Si el estado es Disponible el artículo podrá ser seleccionado por el usuario invitado. <br>Si el estado es NO disponible, el usuario invitado no podrá seleccionarlo.</p>    
</section>

<section id="opAgregarArticulo">
	<h3>Agregar Artículo</h3>
    <p>Permite crear un nuevo artículo.</p>
    
    <h6>Campos del Formulario</h6>
    
    <h5>Foto:</h5>  
	<p>Foto del Artículo. El nombre de la imágen le dará el nombre al artículo.</p>

    <h5>Descripción:</h5>  
	<p>Caracteristicas o información extra que se desee mencionar sobre el artículo. Será útil para la búsqueda en el <a class="ayudaCont" href="#" data-section="#menuArticulos">listado de artículos</a>.</p>
    
    <h5>Categoría:</h5>  
	<p>Seleción de a que categoría pertenece el Artículo.</p>
    <h5>Objeto:</h5>  
	<p>Seleción de que tipo objeto es el Artículo.</p>
    <h5>Decorado:</h5>  
	<p>Seleción de que tipo de decorado es el Artículo.</p>
    <h5>MAterial:</h5>  
	<p>Seleción de que material es el Artículo.</p>
    <h5>Dimensión:</h5>  
	<p>Seleción de a que dimensión pertenece el Artículo.</p>
    <h5>Estilo:</h5>  
	<p>Seleción de a que estilo pertenece el Artículo.</p>

    <h5>Stock Inicial:</h5>  
	<p>Cantidad disponible del nuevo artículo.</p>
    <h5>Depósito:</h5>  
	<p>Selección del depósito al que pertenece.</p>
    <h5>Proyecto:</h5>  
	<p>Este campo es necesarió solo si el artículo que se deseea dar de alta se encuentra en un proyecto.</p>
    <h5>Estado:</h5>  
	<p>Si el estado es Disponible el artículo podrá ser seleccionado por el usuario invitado. <br>Si el estado es NO disponible, el usuario invitado no podrá seleccionarlo.</p>

    
</section>

<section id="opCrearPedido">
	<h3> Crear Pedido</h3>
    
    <p>Acción para enviar una solicitud de artículos al Deposito.</p>

	<h6>Datos del Pedido</h6>
    <h5>Proyecto:</h5>  
	<p>Proyecto que hace la solicitud de artículos.</p>
    <h5>Fecha de Salída:</h5>  
	<p>Fecha en que se realizá el pedido.</p>
    <h5>Devolución Apróximada:</h5>  
	<p>Fecha estimada en la que se realizará la devolución de los artículos solicitados.</p>
    <h5>Comentarios:</h5>  
	<p>Comentario e información extra que sea de utilidad para la entrega del pedido. Principalmente lugar y hora de entrega.</p>

  	<h6>Listado de Artículos</h6>
    <p>Información que muestra sobre el artículo.</p>
    <h5>Código Artículo:</h5>  
	<p>Muestra el código del artículo.</p>
    <h5>Descripción:</h5>  
	<p>Muestra la descripción del artículo.</p>
    <h5>Cantidad:</h5>  
	<p>Muestra la cantidad que se desea solicitar del artículo. El tope máximo es el stock disponible.</p>
    <h5>Imágen:</h5>  
	<p>Foto del artículo.</p>
    <h5>Acciones:</h5>  
	<p>Eliminar artículo de la solicitud</p>
</section>

<section id="opAsignarStock">
	<h3>Formularió de Asignación de Stock</h3>
    
    <p> Acción para incementar la cantidad de stock en el inventario de los artículos seleccionados. 

	<h6>Ingreso de Articulos</h6>
    <h5>Fecha de Ingreso:</h5>  
	<p>Fecha en que ingresarón o ingresarán al depósito los artículos.</p>
    <h5>Depósito:</h5>  
	<p>Depósito al que se le asgnará el stock.</p>
    <h5>Comentarios:</h5>  
	<p>Comentario o información extra relevante.</p>

  	<h6>Listado de Artículos</h6>
    <p>Información que muestra sobre el artículo.</p>
    <h5>Código Artículo:</h5>  
	<p>Muestra el código del artículo.</p>
    <h5>Descripción:</h5>  
	<p>Muestra la descripción del artículo.</p>
    <h5>Cantidad:</h5>  
	<p>Muestra la cantidad que se desea asignar stock.</p>
    <h5>Imágen:</h5>  
	<p>Foto del artículo.</p>
    <h5>Acciones:</h5>  
	<p>Eliminar artículo de la asignación</p>
    
</section>


<section id="opDevolucionArticulo">
	<h3>Devolución de Artículos</h3>
    
    <p> Acción para registrar la devolución de un grupo de artículos.</p>

	<h6>Datos de la devolución</h6>
    <h5>Fecha:</h5>  
	<p>Fecha en que se registró la devoluvión.</p>
    <h5>Proyecto:</h5>  
	<p>Proyecto del cual es devuelto el artículo.</p>
    <h5>Depósito:</h5>  
	<p>Depósito al que será devuelto.</p>
    <h5>Comentarios:</h5>  
	<p>Comentario o información extra relevante.</p>

  	<h6>Listado de Artículos</h6>
    <p>Información que muestra sobre el artículo.</p>
    <h5>Código Artículo:</h5>  
	<p>Muestra el código del artículo.</p>
    <h5>Descripción:</h5>  
	<p>Muestra la descripción del artículo.</p>
    <h5>Cantidad:</h5>  
	<p>Muestra la cantidad del artículo que se devuelve.</p>
    <h5>Imágen:</h5>  
	<p>Foto del artículo.</p>
    <h5>Acciones:</h5>  
	<p>Eliminar artículo</p>
    
</section>


<section id="opBajaArticulo">
	<h3>Baja de Artículos</h3>
    
    <p> Acción para dar de baja stock en el inventario de los artículos seleccionados. 

	<h6>Datos de la devolución</h6>
    <h5>Fecha de baja:</h5>  
	<p>Fecha en que se registró la baja del artículo.</p>
    <h5>Depósito Origén:</h5>  
	<p>Depósito al que esta asociado.</p>
    <h5>Proyecto:</h5>  
	<p>Proyecto al que estaba asignado el artículo.</p>
    <h5>Comentarios:</h5>  
	<p>Comentario o información extra relevante.</p>

  	<h6>Listado de Artículos</h6>
    <p>Información que muestra sobre el artículo.</p>
    <h5>Código Artículo:</h5>  
	<p>Muestra el código del artículo.</p>
    <h5>Descripción:</h5>  
	<p>Muestra la descripción del artículo.</p>
    <h5>Cantidad:</h5>  
	<p>Muestra la cantidad que se desea dar de baja.</p>
    <h5>Imágen:</h5>  
	<p>Foto del artículo.</p>
    <h5>Acciones:</h5>  
	<p>Eliminar artículo</p>
    
</section>

<section id="menuProyectos">
	<h3>Proyectos</h3>
	<p>
	En la opción Listado de Artículos se podrá ver todos los artículos.
	</p>
	<h6>Funcionalidades</h6>
        
    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="Agregar Proyecto"><img class="ayudaIcono" src="app/webroot/img/view.png" alt="Agregar Proyecto"></button>
    	<a class="ayudaCont" href="#" data-section="#opAgregarProyecto"> Agregar Proyecto:</a>
    </h5>    
	<p> Acción para crear un NUEVO proyecto.</p>

    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="Editar Proyecto"><img class="ayudaIcono" src="app/webroot/files/gif/edit.png" alt="Editar Proyecto"></button>
    	<a class="ayudaCont" href="#" data-section="#opEditarProyecto"> Editar Proyecto:</a>
    </h5>    
	<p> Posibilidad de editar la información del Proyecto.</p>
    
    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="Eliminar Proyecto"><img class="ayudaIcono" src="app/webroot/files/gif/desactivar.png" alt="Eliminar Proyecto"></button>
    	Eliminar Proyecto:
    </h5>    
	<p> Elimina el proyecto seleccionado. <br /> Eliminara el proyecto siempre y cuando no tenga Artículos asignados, que esten pendientes de devolución.</p>

    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="Pedidos del proyecto"><img class="ayudaIcono" src="app/webroot/img/pedidosLista.png" alt="Pedidos del proyecto"></button>
    	<a class="ayudaCont" href="#" data-section="#opListadoPedidosProyecto"> Pedidos del proyecto:</a>
    </h5>    
	<p> Lista los pedidos que fueron realizados por el proyecto. <br>Muestra el estado de cada uno de los pedidos y permite devolver Artículos por pedido.</p>


    
</section>

<section id="opAgregarProyecto">
	<h3>Agregar Proyecto</h3>
   	<p> Acción para crear un nuevo proyecto.</p>
    
    <h6>Campos del Formulario</h6>
    
    <h5>Nombre</h5>  
	<p>Nombre para identificar al proyecto.</p>

    <h5>Fecha Inicio</h5>  
	<p>Fecha en que se inicia el proyecto.</p>

    <h5>Fecha Cierre</h5>  
	<p>Fecha en que finaliza el proyecto.</p>

    <h5>Director</h5>  
	<p>Director a cargo del proyecto.</p>

    <h5>Descripción:</h5>  
	<p>Caracteristicas o información extra que se desee mencionar sobre el Proyecto.</p>
    
</section>

<section id="opEditarProyecto">
	<h3>Editar Proyecto</h3>
   	<p> Acción para modificar la información de un proyecto.</p>
    
    <h6>Campos del Formulario</h6>
    
    <h5>Nombre</h5>  
	<p>Nombre para identificar al proyecto.</p>

    <h5>Fecha Inicio</h5>  
	<p>Fecha en que se inicia el proyecto.</p>

    <h5>Fecha Cierre</h5>  
	<p>Fecha en que finaliza el proyecto.</p>

    <h5>Director</h5>  
	<p>Director a cargo del proyecto.</p>

    <h5>Descripción:</h5>  
	<p>Caracteristicas o información extra que se desee mencionar sobre el Proyecto.</p>
</section>

<section id="opListadoPedidosProyecto">
	<h3>Ver Pedidos de Proyectos</h3>
    <p>Muestra el listado de pedidos realizado por un proyecto. Permite ver pedidos, realizar una devolución e imprimir una comanda.</p>

    <h6>Acciones</h6>
    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="Ver Pedido"><img class="ayudaIcono" src="app/webroot/img/view.png" alt="Ver Pedido"></button>
    	<a class="ayudaCont" href="#" data-section="#opVerPedido"> Ver Pedido:</a>
    </h5>    
	<p>Esta opción permite ver la información del Pedido y los artículos solicitados en el mismo.</p>

	<h5><button class="glyphicon ayudaBoton" type="button" title="Devolver Pedido"><img class="ayudaIcono" src="app/webroot/img/devolver.jpg" alt="Devolver Pedido"></button>
    <a class="ayudaCont" href="#" data-section="#opDevolverPedido">Devolución de Artículos:</a></h5>
    <p> Acción para Devolver los articulos del pedido al Depósito. <br>Permite hacer devoluciones parciales o totales.</p>
    
    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="Descargar Comanda"><img class="ayudaIcono" src="app/webroot/img/pdf.gif" alt="Descargar Comanda"></button>
    	Descargar Comanda:
    </h5>        
	<p>Descarga la información del pedido y un listado con las fotos de los artículos solicitados.</p>    
    
    
    
</section>

<section id="opVerPedido">
	<h3>Ver Pedido</h3>
    <p>Muestra la información de un pedido.</p>
    
    <h6>Datos del Pedido</h6>
    <h5>Número Pedido:</h5>    
	<p> Número que identifica al pedido.</p>
    <h5>Proyecto:</h5>    
	<p> Proyecto que realizo la solicitud del pedido.</p>
    <h5>Fecha de Salida:</h5>    
	<p> Fecha de salida del pedido.</p>
    <h5>Devolución Apróximada:</h5>    
	<p> Fecha de devolución apróximada del pedido.</p>

    <h5>Descripción:</h5>    
	<p> Información extra o relevante del pedido.</p>

    <h5>Estado:</h5>    
	<p> Estado en que se encuentra el pedido.</p>

  	<h6>Listado de Artículos</h6>
    <p>Información que muestra sobre el artículo.</p>
    <h5>Código Artículo:</h5>  
	<p>Muestra el código del artículo.</p>
    <h5>Descripción:</h5>  
	<p>Muestra la descripción del artículo.</p>
    <h5>Cantidad:</h5>  
	<p>Muestra la cantidad que se desea solicitar del artículo. El tope máximo es el stock disponible.</p>
    <h5>Imágen:</h5>  
	<p>Foto del artículo.</p>
    
</section>

<section id="opDevolverPedido">
	<h3>Devolver Artículos de un Pedido</h3>
    <p> Solicitud para devolver los articulos del pedido al Depósito. <br>Permite hacer devoluciones parciales o totales.</p>
    
    <h6>Datos del Pedido</h6>
    <h5>Número Pedido:</h5>    
	<p> Número que identifica al pedido.</p>
    <h5>Fecha de Emisión:</h5>    
	<p> Fecha de creación del pedido.</p>
    <h5>Comentarios:</h5>    
	<p> Información extra o relevante del pedido.</p>

    <h6>Datos de la devolución</h6>
    <h5>Fecha Devolución:</h5>    
	<p> Completar con fecha en que se realizá la devolución.</p>
    <h5>Depósito:</h5>    
	<p> Depoósito al que se asignarán los artículos.</p>
    <h5>Comentarios:</h5>    
	<p> Información extra o relevante sobre la devolución.</p>

  	<h6>Listado de Artículos</h6>
    <p>Información que muestra sobre el artículo.</p>
    <h5>Código Artículo:</h5>  
	<p>Muestra el código del artículo.</p>
    <h5>Descripción:</h5>  
	<p>Muestra la descripción del artículo.</p>
    <h5>Cantidad Solicitada:</h5>  
	<p>Muestra la cantidad que se solicitó cuando se realizó el pedido.</p>
    <h5>Cantidad Recibida:</h5>  
	<p>Muestra la cantidad que se fue entregada del artículo solicitado.</p>
    <h5>Cantidad Disponible:</h5>  
	<p>Muestra la cantidad total del artículo que tiene asignado el Proyecto.</p>
    <h5>Cantidad a Devolver:</h5>  
	<p>Muestra la cantidad que se desea devolver del artículo. El tope máximo es el stock disponible del proyecto.</p>
    <h5>Imágen:</h5>  
	<p>Foto del artículo.</p>
</section>

<section id="opEstadoPedidos">
	<h3>Estados de los pedidos</h3>
   	<p>Descripción de los estado que se le asignaran a cada etapa del proceso de gestión de Pedidos.</p>
    <?php if (! empty($privis['menuPedHisto'])) { ?>
	<p>Los pedidos podrán ser consultados en <a class="ayudaCont" href="#" data-section="#menuPedHisto"><?php echo $privis['menuPedHisto']['nombre'] ?> </a></p>    
    <?php } ?>
	<h6>Estados</h6>
    <h5>Abierto:</h5>    
	<p> Este estado indica que un proyecto ha enviado una solicitud de artículos que será revisada por Deposito.     <?php if (! empty($privis['menuPedEntrada'])) { ?><br> Los pedidos en estado "abierto" podrán ser consultados y gestionados en la bandeja de <a class="ayudaCont" href="#" data-section="#menuPedEntrada"><?php echo $privis['menuPedEntrada']['nombre'] ?></a><?php } ?></p>
    <h5>Confirmado:</h5>    
	<p> Este estado indica que el deposito ha validado los artículos solicitados, pero el pedido aún no ha sido despachado al Proyecto. <?php if (! empty($privis['menuPedSal'])) { ?><br> Los pedidos en estado "confirmado" podrán ser consultados y gestionados en la bandeja de <a class="ayudaCont" href="#" data-section="#menuPedSal"><?php echo $privis['menuPedSal']['nombre'] ?></a><?php } ?></p>
    <h5>Enviado:</h5>    
	<p> Este estado indica que el deposito ha enviado el pedido al Proyecto que ha hecho la solicitud.<br>El pedido permanecerá en estado "enviado" hasta que el proyecto haya devuelto todos los artículos solicitados en el mismo.<?php if (! empty($privis['menuPedProyPend'])) { ?><br> Los pedidos en estado "enviado" podrán ser consultados y gestionados en la bandeja de <a class="ayudaCont" href="#" data-section="#menuPedProyPend"><?php echo $privis['menuPedProyPend']['nombre'] ?></a><?php } ?></p>
    <h5>Devuelto:</h5>    
	<p> Este estado indica que el Proyecto ha devuelto todos los artículos pertenecientes al Pedido.</p>
    <h5>Cerrado:</h5>    
	<p> Este estado indica que el pedido que estaba en estado "abierto" fue cancelado. <br> Este caso puede darse porque se ha eliminado el proyecto y los pedidos en estado "abierto" fueron cerrados.	</p>

</section>





<section id="menuDepositos">
	<h3>Deposito</h3>
    
    <p>Posibilidad de Modicar la información del Deposito</p>
    
    <h6>Campos del Formulario</h6>
    
    <h5>Nombre:</h5>    
	<p>Nombre con el que se identificará al depósito.</p>

</section>

<section id="menuInventario">
	<h3>Inventario</h3>
    <p>Listado de todos los artículos existentes. <br> Muestra la cantidad total de cada artículo en el Deposito y en cada proyecto.</p>
    
    <h6>Filtros de Búsqueda</h6>
    <h5>Filtro por Deposito:</h5>    
	<p>Si se marca esté filtro se mostrara solo el stock disponible de cada artículo para el depósito.</p>
    <h5>Filtro por Proyecto:</h5>    
	<p>Si se selecciona un proyecto mostrará solo el stock disponible de Artículos para el proproyecto seleccionado.</p>
	<br>
</section>


<section id="menuPedidosArte2">
	<h3>Pedidos nuevos</h3>
    
    <p>En esta bandeja se listan las solicitudes de artículos en estado "Abierto". Son las solicitudes iniciadas por los proyectos.</p>
    
    <h6>Acciones</h6>
    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="Ver Pedido"><img class="ayudaIcono" src="app/webroot/img/view.png" alt="Ver Pedido"></button>
    	<a class="ayudaCont" href="#" data-section="#opVerPedido"> Ver Pedido:</a>
    </h5>    
	<p>Esta opción permite ver la información del Pedido y los artículos solicitados en el mismo.</p>

    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="Pedidos del proyecto"><img class="ayudaIcono" src="app/webroot/img/confirmar.png" alt="Pedidos del proyecto"></button>
    	Confirmar Pedido:
    </h5>        
	<p>Esta acción permite confirmar el pedido. Esta acción se marca antes de empezar a trabajar con el pedido. Indica que se toma el pedido para empezar a armarlo.</p>

    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="Descargar Comanda"><img class="ayudaIcono" src="app/webroot/img/pdf.gif" alt="Descargar Comanda"></button>
    	Descargar Comanda:
    </h5>        
	<p>Descarga la información del pedido y un listado con las fotos de los artículos solicitados.</p>

	<br>Para mas información, ver los <a class="ayudaCont" href="#" data-section="#opEstadoPedidos">estados del pedido</a>.
</section>

<section id="menuPedEntrada">
	<h3>Pedidos nuevos</h3>
    
    <p>En esta bandeja se listan las solicitudes de artículos en estado "Abierto". Son las solicitudes iniciadas por los proyectos.</p>
    
    <h6>Acciones</h6>
    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="Ver Pedido"><img class="ayudaIcono" src="app/webroot/img/view.png" alt="Ver Pedido"></button>
    	<a class="ayudaCont" href="#" data-section="#opVerPedido"> Ver Pedido:</a>
    </h5>    
	<p>Esta opción permite ver la información del Pedido y los artículos solicitados en el mismo.</p>

    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="Pedidos del proyecto"><img class="ayudaIcono" src="app/webroot/img/confirmar.png" alt="Pedidos del proyecto"></button>
    	Confirmar Pedido:
    </h5>        
	<p>Esta acción permite confirmar el pedido. Esta acción se marca antes de empezar a trabajar con el pedido. Indica que se toma el pedido para empezar a armarlo.</p>

    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="Descargar Comanda"><img class="ayudaIcono" src="app/webroot/img/pdf.gif" alt="Descargar Comanda"></button>
    	Descargar Comanda:
    </h5>        
	<p>Descarga la información del pedido y un listado con las fotos de los artículos solicitados.</p>

	<br>Para mas información, ver los <a class="ayudaCont" href="#" data-section="#opEstadoPedidos">estados del pedido</a>.
</section>

<section id="menuPedSal">
	<h3>Pedidos a Despachar</h3>
    
    <p>En esta bandeja se listan los pedidos en estado "Confirmado". Son los pedidos que se han comenzado a armar en el deposito.</p>
    
    <h6>Acciones</h6>
    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="Ver Pedido"><img class="ayudaIcono" src="app/webroot/img/view.png" alt="Ver Pedido"></button>
    	<a class="ayudaCont" href="#" data-section="#opVerPedido"> Ver Pedido:</a>
    </h5>    
	<p>Esta opción permite ver la información del Pedido y los artículos solicitados en el mismo.</p>

    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="Despachar Pedido"><img class="ayudaIcono" src="app/webroot/img/armar.png" alt="Despachar Pedido"></button>
    	<a class="ayudaCont" href="#" data-section="#opDespacharPedido"> Despachar Pedido:</a>
    </h5>        
	<p>Esta acción permite confirmar el pedido. Esta acción se marca antes de empezar a trabajar con el pedido. Indica que se toma el pedido para empezar a armarlo.</p>

	<br>Para mas información, ver los <a class="ayudaCont" href="#" data-section="#opEstadoPedidos">estados del pedido</a>.
</section>


<section id="opDespacharPedido">
	<h3>Despachar Pedido</h3>
</section>


<section id="menuPedProyPend">
	<h3>Pedidos pendientes por Proyectos</h3>

    <p>En esta bandeja se listan los pedidos en estado "enviado". Son los pedidos que fueron entregado y los artículos aún no han sido devueltos.</p>
    
    <h6>Acciones</h6>
    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="Ver Pedido"><img class="ayudaIcono" src="app/webroot/img/view.png" alt="Ver Pedido"></button>
    	<a class="ayudaCont" href="#" data-section="#opVerPedido"> Ver Pedido:</a>
    </h5>    
	<p>Esta opción permite ver la información del Pedido y los artículos solicitados en el mismo.</p>

    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="Descargar Comanda"><img class="ayudaIcono" src="app/webroot/img/recibo.jpg" alt="Descargar Comanda"></button>
    	Descargar Comanda:
    </h5>        
	<p>Descarga la información del pedido y un listado con las fotos de los artículos solicitados.</p>

	<h5><button class="glyphicon ayudaBoton" type="button" title="Devolver Pedido"><img class="ayudaIcono" src="app/webroot/img/devolver.jpg" alt="Devolver Pedido"></button>
    <a class="ayudaCont" href="#" data-section="#opDevolverPedido">Devolución de Artículos:</a></h5>
    <p> Acción para Devolver los articulos del pedido al Depósito. <br>Permite hacer devoluciones parciales o totales.</p>
    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="Descargar Remito"><img class="ayudaIcono" src="app/webroot/img/pdf.gif" alt="Descargar Remito"></button>
    	Descargar Remito:
    </h5>        
	<p>Descarga la información de la entrega y un listado de los artículos entregados.</p>
   
  	<br>Para mas información, ver los <a class="ayudaCont" href="#" data-section="#opEstadoPedidos">estados del pedido</a>.
</section>

<section id="menuPedHisto">
	<h3>Historico de Pedidos</h3>
  	<p>En esta bandeja se listan todos los pedidos.</p>
    
    <h6>Acciones</h6>
    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="Ver Pedido"><img class="ayudaIcono" src="app/webroot/img/view.png" alt="Ver Pedido"></button>
    	<a class="ayudaCont" href="#" data-section="#opVerPedido"> Ver Pedido:</a>
    </h5>    
	<p>Esta opción permite ver la información del Pedido y los artículos solicitados en el mismo.</p>
    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="Descargar Comanda"><img class="ayudaIcono" src="app/webroot/img/recibo.jpg" alt="Descargar Comanda"></button>
    	Descargar Comanda:
    </h5>        
	<p>Descarga la información del pedido y un listado con las fotos de los artículos solicitados.</p>
    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="Descargar Remito"><img class="ayudaIcono" src="app/webroot/img/pdf.gif" alt="Descargar Remito"></button>
    	Descargar Remito:
    </h5>        
	<p>Descarga la información de la entrega y un listado de los artículos entregados.</p>

	<br>Para mas información, ver los <a class="ayudaCont" href="#" data-section="#opEstadoPedidos">estados del pedido</a>.
    
</section>

<section id="menuMovi">
	<h3>Movimientos</h3>
    <p>Registra los movimientos hechos sobre los artículos.</p>
    <h6>Acciones</h6>

    <h5>
    	<button class="glyphicon ayudaBoton" type="button" title="ver Detalle"><img class="ayudaIcono" src="app/webroot/img/view.png" alt="ver Detalle"></button>
    	Ver Detalle:
    </h5>        
	<p>Muestra el detalle de la transacción realizada.</p>
    
    
</section>




</div>
</div>

