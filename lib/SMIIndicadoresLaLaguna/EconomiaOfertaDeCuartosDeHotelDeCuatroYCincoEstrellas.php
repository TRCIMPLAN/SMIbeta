<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna EconomiaOfertaDeCuartosDeHotelDeCuatroYCincoEstrellas
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
 * Clase EconomiaOfertaDeCuartosDeHotelDeCuatroYCincoEstrellas
 */
class EconomiaOfertaDeCuartosDeHotelDeCuatroYCincoEstrellas extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Oferta de Cuartos de Hotel de Cuatro y Cinco Estrellas en La Laguna';
        $this->fecha       = '2015-07-14T15:16:02';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-oferta-de-cuartos-de-hotel-de-cuatro-y-cinco-estrellas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice de "Aprovechamiento de las Relaciones Internacionales". Mide el total de cuartos de hotel en las categorías de 4 y 5 estrellas como porcentaje de la oferta total de cuartos. Este indicador sólo está disponible para los principales centros turísticos.';
        $this->claves      = 'IMPLAN, La Laguna, Índice de Competitividad Urbana, Competitividad, Sector Automotriz';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Competitividad', 'Sector Automotriz');
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
            array('fecha' => '2008-12-31', 'valor' => '59.8700', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '59.2500', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '61.8800', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '59.4100', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '68.3000', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2014-12-31', 'valor' => '71.0000', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2016-12-31', 'valor' => '0.0000', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2017-12-31', 'valor' => '0.0000', 'fuente_nombre' => 'IMCO', 'notas' => 'Porcentaje de la oferta total de cuartos (SECTUR)'),
            array('fecha' => '2018-12-31', 'valor' => '0.0000', 'fuente_nombre' => 'IMCO', 'notas' => 'Porcentaje de la oferta total de cuartos (SECTUR)'),
            array('fecha' => '2021-12-31', 'valor' => '0', 'fuente_nombre' => 'IMCO')); // formateado 0, valor 20, crudo 12
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '0.1600', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '0.0000', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '0.0000', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '0.0000', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2021-12-31', 'valor' => '0', 'fuente_nombre' => 'IMCO'));
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
Porcentaje del total de cuartos de hotel.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaOfertaDeCuartosDeHotelDeCuatroYCincoEstrellas

?>
