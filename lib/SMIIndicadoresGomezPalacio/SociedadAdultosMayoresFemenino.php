<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio SociedadAdultosMayoresFemenino
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

namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadAdultosMayoresFemenino
 */
class SociedadAdultosMayoresFemenino extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Adultos Mayores Femenino en Gómez Palacio';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-adultos-mayores-femenino';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Población estimada a mediados de año de personas de 65 años y más de sexo femenino.';
        $this->claves      = 'IMPLAN, Gómez Palacio, Grupos Vulnerables, Género';
        // Para el Organizador
        $this->categorias  = array('Grupos Vulnerables', 'Género');
        $this->fuentes     = array('CONAPO');
        $this->regiones    = array('Gómez Palacio');
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
            array('fecha' => '2011-06-30', 'valor' => '9694', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2012-06-30', 'valor' => '10058', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2013-06-30', 'valor' => '10447', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2014-06-30', 'valor' => '10863', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2015-06-30', 'valor' => '11308', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2016-06-30', 'valor' => '11784', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2017-06-30', 'valor' => '12292', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2018-06-30', 'valor' => '12829', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2019-06-30', 'valor' => '13397', 'fuente_nombre' => 'CONAPO'),
            array('fecha' => '2020-06-30', 'valor' => '13994', 'fuente_nombre' => 'CONAPO')); // formateado 0, valor 20, crudo 10
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
            array('region_nombre' => 'Torreón', 'fecha' => '2020-06-30', 'valor' => '32270', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2020-06-30', 'valor' => '13994', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2020-06-30', 'valor' => '6195', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2020-06-30', 'valor' => '4671', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2022-12-31', 'valor' => '61878', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2020-06-30', 'valor' => '127132', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'Durango', 'fecha' => '2020-06-30', 'valor' => '76226', 'fuente_nombre' => 'CONAPO'),
            array('region_nombre' => 'Nacional', 'fecha' => '2020-06-30', 'valor' => '5164521', 'fuente_nombre' => 'CONAPO'));
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

} // Clase SociedadAdultosMayoresFemenino

?>
