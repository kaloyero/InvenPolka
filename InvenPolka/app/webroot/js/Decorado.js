var Decorado = new Class({
    Extends: Render,
    initialize: function(name){
        this.name = name;
        this.type="decorado";
        this.breadcrumb='Decorados';
        this.descripcion="Desde aqui administre los Decorados"
    },
    onList: function(data){
            this.parent(data);
            this.hacerTablaEditable();
    },
    bindListEvents:function() {
			var self=this;
			this.generateValidation();

          	jQuery('.save').bind("click", function(e) {
          	    if (self.getForm().valid()){
          	        self.addLoader();
          		    translator.save(self.type, self.getForm());
				    //Actualizo la tabla en la pagina en q esta
				    //jQuery('.paginate_active').click();
				    //Este false,hace que el form,no se submitee sin Ajax,osea,de la accion propia del boton submit
				    return false;
				}
			});
    },
	afterDataTable:function(){
	  var self=this;
	 //Ocultamos la columna ID
	 jQuery("#configurationTable td:first-child").css('display','none');

		jQuery('.view').bind("click", function(e) {
			 translator.viewDetail(self.type,self.getSelectedRowId(this));
			 return false;
		});
        jQuery('.desactivar').bind("click", function(e) {
             if (confirm("Seguro desea eliminar?"))
                {
                    translator.delete(self.type,self.getSelectedRowId(this));

                }
        })


	},
     checkContinue:function() {
        jQuery('.stdform')[0].reset();
         //Actualizo la tabla en la pagina en q esta
    	jQuery('.paginate_active').click();
    },
    onDeleted:function() {
          //Actualizo la tabla en la pagina en q esta
     	jQuery('.paginate_active').click();
     }

});

decoradoRender=new Decorado();