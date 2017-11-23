<?php

class formulario extends acun_ei_formulario {

    //-----------------------------------------------------------------------------------
    //---- JAVASCRIPT -------------------------------------------------------------------
    //-----------------------------------------------------------------------------------
    function extender_objeto_js() {
        echo "
		//---- Validacion general ----------------------------------
		
		{$this->objeto_js}.evt__dni__procesar = function()
		{
                        var dni = this.ef('dni').get_estado();
			console.log(dni);
                        if (dni != '') {
				this.cascadas_cambio_maestro('dni');
			}
		} 
                {$this->objeto_js}.evt__datos__procesar = function()
		{
                    var dni = this.ef('dni').get_estado();
                        if (dni != '') {
                        	var datos=this.ef('datos').get_estado();
                                console.log(datos);
                                if(datos=='false'){
                                    this.ef('datos').set_estado('');
                                    this.ef('dni').set_estado('');
                                    alert('No se encuentra DNI');
                                    document.getElementById(this.ef('dni')._id_form).focus();
                                }else{
                                    document.getElementById(this.ef('aula')._id_form).focus();
                                }
                          }
			
		}

		";
    }

}
