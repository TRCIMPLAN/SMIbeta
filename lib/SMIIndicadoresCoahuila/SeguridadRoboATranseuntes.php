<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresCoahuila SeguridadRoboATranseuntes
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

namespace SMIIndicadoresCoahuila;

/**
 * Clase SeguridadRoboATranseuntes
 */
class SeguridadRoboATranseuntes extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Robo a Transeuntes en Coahuila';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-robo-a-transeuntes';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Robos a Transeuntes totales por mes.';
        $this->claves      = 'IMPLAN, Coahuila, Seguridad, Delincuencia';
        // Para el Organizador
        $this->categorias  = array('Seguridad', 'Delincuencia');
        $this->fuentes     = array('Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos');
        $this->regiones    = array('Coahuila');
    } // constructor

    /**
     * Datos Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function datos_estructura() {
        return array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'cantidad'),
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
            array('fecha' => '2019-09-30', 'valor' => '3', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2019-10-31', 'valor' => '2', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2022-03-31', 'valor' => '22', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2022-04-30', 'valor' => '22', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública')); // formateado 0, valor 8, crudo 4
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
            'valor' => array('enca' => 'Dato', 'formato' => 'cantidad'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2019-12-31', 'valor' => '8', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2019-12-31', 'valor' => '25', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2019-12-31', 'valor' => '4', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2019-12-31', 'valor' => '2', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2022-10-31', 'valor' => '18', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ' '),
            array('region_nombre' => 'Coahuila', 'fecha' => '2022-04-30', 'valor' => '22', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'Durango', 'fecha' => '2022-04-30', 'valor' => '32', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'Nacional', 'fecha' => '2022-04-30', 'valor' => '6268', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'));
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
Descarga la [Base de Datos](http://secretariadoejecutivo.gob.mx/incidencia-delictiva/incidencia-delictiva-fuero-comun.php)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SeguridadRoboATranseuntes

?>
