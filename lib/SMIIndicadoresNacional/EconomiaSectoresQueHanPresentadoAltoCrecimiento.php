<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresNacional EconomiaSectoresQueHanPresentadoAltoCrecimiento
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

namespace SMIIndicadoresNacional;

/**
 * Clase EconomiaSectoresQueHanPresentadoAltoCrecimiento
 */
class EconomiaSectoresQueHanPresentadoAltoCrecimiento extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Sectores que Han Presentado Alto Crecimiento en Nacional';
        $this->fecha       = '2015-07-14T14:58:54';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-sectores-que-han-presentado-alto-crecimiento';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice de "Economía Estable". Mide el PIB generado por los sectores que han tenido un crecimiento superior al promedio del crecimiento de todos los sectores a nivel nacional. Para 2012 estos sectores son: generación, transmisión y distribución de energía eléctrica; suministro de agua y de gas por ductos al consumidor final; comercio al por mayor; transportes, correos y almacenamiento; información en medios masivos y servicios financieros y de seguros.';
        $this->claves      = 'IMPLAN, Nacional, Índice de Competitividad Urbana, Mercados';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Mercados');
        $this->fuentes     = array('Elaboración propia con datos obtenidos del INEGI');
        $this->regiones    = array('Nacional');
    } // constructor

    /**
     * Datos Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function datos_estructura() {
        return array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'porcentaje'),
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
            array('fecha' => '2009-01-01', 'valor' => '26.4400', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI')); // formateado 0, valor 2, crudo 1
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '139894042.00', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "dinero" en Producción de dichos sectores (miles de pesos corrientes)'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '21527736.00', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "dinero" en Producción de dichos sectores (miles de pesos corrientes)'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '2395472.00', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "dinero" en Producción de dichos sectores (miles de pesos corrientes)'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '3034970.00', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "dinero" en Producción de dichos sectores (miles de pesos corrientes)'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2021-12-31', 'valor' => '22', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Nacional', 'fecha' => '2009-01-01', 'valor' => '26.4400', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'));
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
Porcentaje del PIB de la ciudad.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaSectoresQueHanPresentadoAltoCrecimiento

?>
