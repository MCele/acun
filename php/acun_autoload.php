<?php
/**
 * Esta clase fue y será generada automáticamente. NO EDITAR A MANO.
 * @ignore
 */
class acun_autoload 
{
	static function existe_clase($nombre)
	{
		return isset(self::$clases[$nombre]);
	}

	static function cargar($nombre)
	{
		if (self::existe_clase($nombre)) { 
			 require_once(dirname(__FILE__) .'/'. self::$clases[$nombre]); 
		}
	}

	static protected $clases = array(
		'acun_comando' => 'extension_toba/acun_comando.php',
		'acun_modelo' => 'extension_toba/acun_modelo.php',
		'acun_ci' => 'extension_toba/componentes/acun_ci.php',
		'acun_cn' => 'extension_toba/componentes/acun_cn.php',
		'acun_datos_relacion' => 'extension_toba/componentes/acun_datos_relacion.php',
		'acun_datos_tabla' => 'extension_toba/componentes/acun_datos_tabla.php',
		'acun_ei_arbol' => 'extension_toba/componentes/acun_ei_arbol.php',
		'acun_ei_archivos' => 'extension_toba/componentes/acun_ei_archivos.php',
		'acun_ei_calendario' => 'extension_toba/componentes/acun_ei_calendario.php',
		'acun_ei_codigo' => 'extension_toba/componentes/acun_ei_codigo.php',
		'acun_ei_cuadro' => 'extension_toba/componentes/acun_ei_cuadro.php',
		'acun_ei_esquema' => 'extension_toba/componentes/acun_ei_esquema.php',
		'acun_ei_filtro' => 'extension_toba/componentes/acun_ei_filtro.php',
		'acun_ei_firma' => 'extension_toba/componentes/acun_ei_firma.php',
		'acun_ei_formulario' => 'extension_toba/componentes/acun_ei_formulario.php',
		'acun_ei_formulario_ml' => 'extension_toba/componentes/acun_ei_formulario_ml.php',
		'acun_ei_grafico' => 'extension_toba/componentes/acun_ei_grafico.php',
		'acun_ei_mapa' => 'extension_toba/componentes/acun_ei_mapa.php',
		'acun_servicio_web' => 'extension_toba/componentes/acun_servicio_web.php',
	);
}
?>