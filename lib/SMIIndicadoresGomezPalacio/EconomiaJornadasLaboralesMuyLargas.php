<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio EconomiaJornadasLaboralesMuyLargas
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
 * Clase EconomiaJornadasLaboralesMuyLargas
 */
class EconomiaJornadasLaboralesMuyLargas extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Jornadas Laborales Muy Largas en Gómez Palacio';
        $this->fecha       = '2015-07-14T14:33:21';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-jornadas-laborales-muy-largas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Mide los trabajadores que laboran más de 48 horas por semana, como un proxy de la baja productividad del trabajo. Existe evidencia que sustenta que entre más horas se trabajen, por encima de un umbral, la productividad decrece o al menos no aumenta. Sin embargo, los efectos psicológicos y sociales de jornadas muy largas son negativos.';
        $this->claves      = 'IMPLAN, Gómez Palacio, Índice de Competitividad Urbana, Empleo';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Empleo');
        $this->fuentes     = array('IMCO');
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
            array('fecha' => '2008-12-31', 'valor' => '23.6000', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '19.6100', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '19.9300', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '25.7900', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '27.4500', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2016-12-31', 'valor' => '50093', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Personas con jornadas laborales de más de 48 hrs')); // formateado 0, valor 12, crudo 7
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '78193', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Personas con jornadas laborales de más de 48 hrs'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '50093', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Personas con jornadas laborales de más de 48 hrs'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '10766', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Personas con jornadas laborales de más de 48 hrs'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '27668', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Personas con jornadas laborales de más de 48 hrs'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2021-12-31', 'valor' => '24.0000', 'fuente_nombre' => 'IMCO'));
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

} // Clase EconomiaJornadasLaboralesMuyLargas

?>
