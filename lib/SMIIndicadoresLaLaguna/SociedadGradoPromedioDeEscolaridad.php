<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SociedadGradoPromedioDeEscolaridad
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
 * Clase SociedadGradoPromedioDeEscolaridad
 */
class SociedadGradoPromedioDeEscolaridad extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Grado Promedio de Escolaridad en La Laguna';
        $this->fecha       = '2015-10-21T12:51:27';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-grado-promedio-de-escolaridad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Un grado se considera un año de acuerdo al sistema educativo nacional.';
        $this->claves      = 'IMPLAN, La Laguna, Educación, Sector Automotriz';
        // Para el Organizador
        $this->categorias  = array('Educación', 'Sector Automotriz');
        $this->fuentes     = array('INEGI', 'IMCO');
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
            array('fecha' => '2010-12-31', 'valor' => '9.6000', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2011-12-31', 'valor' => '7', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '8', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2013-12-31', 'valor' => '8', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2014-12-31', 'valor' => '8', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2015-12-31', 'valor' => '9.9700', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2016-12-31', 'valor' => '9.7400', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2017-12-31', 'valor' => '8.1600', 'fuente_nombre' => 'IMCO', 'notas' => 'Años promedio de escolaridad en población de 25 años o más (ENOE)'),
            array('fecha' => '2018-12-31', 'valor' => '8.0000', 'fuente_nombre' => 'IMCO', 'notas' => 'Años promedio de escolaridad en población de 25 años o más (ENOE)'),
            array('fecha' => '2019-12-31', 'valor' => '8', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2020-12-31', 'valor' => '10', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2021-12-31', 'valor' => '10', 'fuente_nombre' => 'IMCO')); // formateado 0, valor 24, crudo 14
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '9.7400', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '9.7400', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '9.7400', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '9.7400', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2021-12-31', 'valor' => '10', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2015-12-31', 'valor' => '9.9000', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Durango', 'fecha' => '2015-12-31', 'valor' => '9.1500', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Nacional', 'fecha' => '2015-12-31', 'valor' => '9.1600', 'fuente_nombre' => 'INEGI'));
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
        return NULL;
    } // observaciones

} // Clase SociedadGradoPromedioDeEscolaridad

?>
