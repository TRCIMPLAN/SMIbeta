<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna EconomiaTamanoDelMercadoHipotecario
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
 * Clase EconomiaTamanoDelMercadoHipotecario
 */
class EconomiaTamanoDelMercadoHipotecario extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Tamaño del Mercado Hipotecario en La Laguna';
        $this->fecha       = '2015-07-14T14:52:06';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-tamano-del-mercado-hipotecario';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice de "Economía Estable". Mide el número de créditos que son otorgados con respecto al número de habitantes.';
        $this->claves      = 'IMPLAN, La Laguna, Índice de Competitividad Urbana, Mercados';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Mercados');
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
            array('fecha' => '2008-12-31', 'valor' => '8.2033', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '8.0950', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '7.9881', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '9.2852', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '9.7623', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2016-12-31', 'valor' => '19.4200', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2017-12-31', 'valor' => '22.7100', 'fuente_nombre' => 'IMCO', 'notas' => 'Créditos por cada mil adultos (CNBV)'),
            array('fecha' => '2018-12-31', 'valor' => '22.5300', 'fuente_nombre' => 'IMCO', 'notas' => 'Créditos por cada mil adultos (CNBV)'),
            array('fecha' => '2021-12-31', 'valor' => '20', 'fuente_nombre' => 'IMCO')); // formateado 0, valor 18, crudo 11
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '15644', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Contratos de crédito hipotecarios'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '5943', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Contratos de crédito hipotecarios'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '3102', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Contratos de crédito hipotecarios'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '1099', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Contratos de crédito hipotecarios'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2021-12-31', 'valor' => '20', 'fuente_nombre' => 'IMCO'));
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

} // Clase EconomiaTamanoDelMercadoHipotecario

?>
