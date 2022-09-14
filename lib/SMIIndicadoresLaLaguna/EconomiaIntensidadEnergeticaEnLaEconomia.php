<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna EconomiaIntensidadEnergeticaEnLaEconomia
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
 * Clase EconomiaIntensidadEnergeticaEnLaEconomia
 */
class EconomiaIntensidadEnergeticaEnLaEconomia extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Intensidad energética en la economía en La Laguna';
        $this->fecha       = '2019-01-22T10:22:50';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-intensidad-energetica-en-la-economia';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Mide el número de KWh al año por cada millón de actividad económica';
        $this->claves      = 'IMPLAN, La Laguna, Servicios Públicos';
        // Para el Organizador
        $this->categorias  = array('Servicios Públicos');
        $this->fuentes     = array('IMCO');
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
            array('fecha' => '2015-12-31', 'valor' => '11504', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2016-12-31', 'valor' => '6542.3900', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2016-12-31', 'valor' => '11660', 'fuente_nombre' => 'IMCO', 'notas' => 'KWh al año por cada millón de actividad económica'),
            array('fecha' => '2017-12-31', 'valor' => '12030', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2018-12-31', 'valor' => '10967', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2018-12-31', 'valor' => '10967', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2019-12-31', 'valor' => '10286', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2019-12-31', 'valor' => '10286', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2020-12-31', 'valor' => '10994', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2021-11-23', 'valor' => '12313', 'fuente_nombre' => 'IMCO')); // formateado 0, valor 20, crudo 11
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '3745.3700', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '2242.9300', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '298.8300', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '255.2500', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2021-11-23', 'valor' => '12313', 'fuente_nombre' => 'IMCO'));
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

} // Clase EconomiaIntensidadEnergeticaEnLaEconomia

?>
