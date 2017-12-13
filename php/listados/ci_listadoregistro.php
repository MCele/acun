<?php


class ci_listadoregistro   extends abm_ci {

    public $nombre_tabla='registro';

     function conf__cuadro(toba_ei_cuadro $cuadro) {
          
        if (!is_null($this->s__where)) {
            $datos = $this->dep('datos')->tabla($this->nombre_tabla)->get_listado($this->s__where);
        } else {
           $datos = $this->dep('datos')->tabla($this->nombre_tabla)->get_listado();
        }
        $cuadro->set_datos($datos);
    }

}



