<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna EconomiaSalarioPromedioMensualParaTrabajadoresDeTiempoCompleto
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package TrcIMPLANSitioWeb
 */

namespace SMIIndicadoresLaLaguna;

/**
 * Clase EconomiaSalarioPromedioMensualParaTrabajadoresDeTiempoCompleto
 */
class EconomiaSalarioPromedioMensualParaTrabajadoresDeTiempoCompleto extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Salario Promedio Mensual para Trabajadores de Tiempo Completo en La Laguna';
        $this->fecha       = '2015-07-14T14:29:58';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Mide el salario promedio que obtienen los trabajadores que laboran 35 horas o más en cada ciudad ponderado por la participación de la población de cada municipio que integra dicha ciudad y descontando la presencia de actividades petroleras en los municipios. La lógica del indicador es que mientras más alto el salario promedio, mayor es la productividad laboral de la ciudad.';
        $this->claves      = 'IMPLAN, La Laguna, Índice de Competitividad Urbana, Empleo';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Empleo');
        $this->fuentes     = array('IMCO', 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos', 'INEGI');
        $this->regiones    = array('La Laguna');
    } // constructor

    /**
     * Datos Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function datos_estructura() {
        return array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'texto'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto'));
    } // datos_estructura

    /**
     * Datos
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function datos() {
        return array(
            array('fecha' => '2008-12-31', 'valor' => '5450.35', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '5857.29', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '5775.48', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '6128.42', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '5347.96', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2013-12-31', 'valor' => '6156.47', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2014-12-31', 'valor' => '6434.33', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2015-03-31', 'valor' => '5817.26', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2015-06-30', 'valor' => '5548.04', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2015-09-30', 'valor' => '5883.32', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2015-12-31', 'valor' => '6435.29', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2016-03-31', 'valor' => '5778.02', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2016-06-30', 'valor' => '6470.65', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2016-09-30', 'valor' => '5896.38', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2016-12-31', 'valor' => '6210.88', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2017-03-31', 'valor' => '6495.63', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2017-12-31', 'valor' => '7078.27', 'fuente_nombre' => 'IMCO', 'notas' => 'Pesos corrientes (ENOE)'),
            array('fecha' => '2018-12-31', 'valor' => '7126.42', 'fuente_nombre' => 'IMCO', 'notas' => 'Pesos corrientes (ENOE)'),
            array('fecha' => '2019-09-30', 'valor' => '8823.8800', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2019-12-31', 'valor' => '50', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2019-12-31', 'valor' => '50', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2021-12-31', 'valor' => '7612', 'fuente_nombre' => 'IMCO')); // formateado 0, valor 44, crudo 24
    } // datos

    /**
     * Otras Regiones Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones_estructura() {
        return array(
            'region_nombre' => array('enca' => 'Región', 'formato' => 'texto'),
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'texto'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto'));
    } // otras_regiones_estructura

    /**
     * Otras regiones
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2018-09-30', 'valor' => '6926.25', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2017-03-31', 'valor' => '6254.41', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2017-03-31', 'valor' => '6603.44', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2017-03-31', 'valor' => '4705.54', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2021-12-31', 'valor' => '7612', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2017-03-31', 'valor' => '7225.63', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('region_nombre' => 'Durango', 'fecha' => '2017-03-31', 'valor' => '6217.26', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('region_nombre' => 'Nacional', 'fecha' => '2017-03-31', 'valor' => '6543.52', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'));
    } // otras_regiones

    /**
     * Mapas
     *
     * @return string Código HTML con el iframe de Carto
     */
    public function mapas() {
        return NULL;
    } // mapas

    /**
     * Observaciones
     *
     * @return string Markdown
     */
    public function observaciones() {
        return <<<OBSERVACIONES_FINAL
Pesos de 2012.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaSalarioPromedioMensualParaTrabajadoresDeTiempoCompleto

?>
