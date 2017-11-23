<?php

class ci_reloj extends toba_ci {

    public function get_datos($param) {
        //print_r($param);
        if($param==27894458){
            return "Pablo Kogan";
        }else{
            return false;
        }
    }
    
 function conf__formulario(toba_ei_formulario $form) {
    
    }

}

