<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna EconomiaCostoDeElectricidad
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
 * Clase EconomiaCostoDeElectricidad
 */
class EconomiaCostoDeElectricidad extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Costo de electricidad en La Laguna';
        $this->fecha       = '2019-01-21T11:57:18';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-costo-de-electricidad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Número de dólares por mega watt-hora';
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
            array('fecha' => '2015-12-31', 'valor' => '45.4369', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2015-12-31', 'valor' => '1385', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2016-12-31', 'valor' => '26.3000', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2016-12-31', 'valor' => '1385', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2017-12-31', 'valor' => '1385.27', 'fuente_nombre' => 'IMCO', 'notas' => 'Dólares por mega watt-hora (CENACE)'),
            array('fecha' => '2017-12-31', 'valor' => '1385', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2018-12-31', 'valor' => '1586.75', 'fuente_nombre' => 'IMCO', 'notas' => 'Dólares por mega watt-hora (CENACE)'),
            array('fecha' => '2018-12-31', 'valor' => '1385', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2018-12-31', 'valor' => '1385', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2019-12-31', 'valor' => '1587', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2019-12-31', 'valor' => '1587', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2020-12-31', 'valor' => '875', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2021-12-31', 'valor' => '466', 'fuente_nombre' => 'IMCO', 'notas' => 'Dólares por mega watt-hora')); // formateado 0, valor 26, crudo 16
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '26.3116', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '26.3116', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '26.3116', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '26.3116', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2021-12-31', 'valor' => '466', 'fuente_nombre' => 'IMCO', 'notas' => 'Dólares por mega watt-hora'));
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

} // Clase EconomiaCostoDeElectricidad

?>
