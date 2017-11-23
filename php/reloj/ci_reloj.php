<?php

class ci_reloj extends toba_ci {

    private $nombre_tabla='registro';

    public function get_datos($param) {

        $sql='select * from docente where nro_docum='.$param;
        $registros= toba::db('mocovi')->consultar($sql);
        if(count($registros)>0){
            return $registros[0]['apellido'].' '.$registros[0]['nombre'];
        }else{
            return false;
        }
    }
    
    function conf__formulario(toba_ei_formulario $form) {
            
    }
    function evt__formulario__modificacion($datos) {
        /*
         * todo: el periodo por defecto
         */
        //$datos['datos']=  $this->get_datos($datos['dni']);
        $this->dep('datos')->tabla($this->nombre_tabla)->set($datos);
        $this->dep('datos')->sincronizar();
        $this->dep('datos')->resetear();
    }
   
    
    

}

