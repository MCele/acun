<?php

class ci_reloj extends toba_ci {

    private $nombre_tabla = 'registro';

  

    function conf__formulario(toba_ei_formulario $form) {
        
    }

    function evt__formulario__modificacion($datos) {
        /*
         * todo: el periodo por defecto
         */
        //$datos['datos']=  $this->get_datos($datos['dni']);
        $completo = $this->dep('datos')->tabla($this->nombre_tabla)->get_datos_completo($datos['dni']);
        //print_r($compelto);
        if ($completo != false) {
            $datos['categoria'] = $completo['cat_mapuche'];
            $datos['departamento'] = $completo['departamento'];
            $datos['area'] = $completo['area'];
            $datos['orientacion'] = $completo['orientacion'];
        }
        $this->dep('datos')->tabla($this->nombre_tabla)->set($datos);
        $this->dep('datos')->sincronizar();
        $this->dep('datos')->resetear();
    }

}
