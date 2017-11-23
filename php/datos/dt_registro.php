<?php

class dt_registro extends toba_datos_tabla {
    


    function get_listado($where = null) {

        if (is_null($where)) {
            $where = '';
        } else {
            $where = ' where ' . $where;
        }
        $sql = "SELECT * FROM registro $where ORDER BY time";
        return toba::db('acun')->consultar($sql);
    }


}
