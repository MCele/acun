<?php

class dt_asistencia extends toba_datos_tabla {
    


    function get_listado($where = null) {

        if (is_null($where)) {
            $where = '';
        } else {
            $where = ' where ' . $where;
        }
        $sql = "SELECT * FROM asistencia $where ORDER BY fecha_inicio";
        return toba::db('acun')->consultar($sql);
    }


}
