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

    public function get_datos($param) {

        $sql = 'select * from docente where nro_docum=' . $param;
        $registros = toba::db('mocovi')->consultar($sql);
        if (count($registros) > 0) {
            return $registros[0]['apellido'] . ' ' . $registros[0]['nombre'];
        } else {
            return false;
        }
    }
    public function get_datos_completo($dni) {

        $sql = 'select distinct dd.cat_mapuche,depto.descripcion as departamento,
                a.descripcion as area,
                o.descripcion as orientacion from docente d
                 left join designacion dd on d.id_docente=dd.id_docente
                 inner join departamento depto on dd.id_departamento=depto.iddepto
                 inner join area a on dd.id_area=a.idarea and a.iddepto=depto.iddepto
                 inner join orientacion o on dd.id_orientacion=o.idorient and o.idarea=a.idarea
                 where nro_docum=' . $dni . ' and desde<=now() and (hasta is null or hasta>=now())
                 and dd.uni_acad=\'FAEA\'
                 and dd.id_designacion not in(select id_designacion from novedad where desde<=now() and (hasta is null or hasta>=now()))';
        $registros = toba::db('mocovi')->consultar($sql);
        $salida=array();
        if (count($registros) > 0) {
            
            foreach ($registros as $key => $fila) {
                    $salida['cat_mapuche'][]=$fila['cat_mapuche'];
                    $salida['departamento'][]=$fila['departamento'];
                    $salida['area'][]=$fila['area'];
                    $salida['orientacion'][]=$fila['orientacion'];
    
            }
            foreach ($salida as $key => $value) {
                $salida[$key]= implode(' - ',array_unique($value, SORT_STRING));
            }
            
            return $salida;
        } else {
            return false;
        }
    }

}
