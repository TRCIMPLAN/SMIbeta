<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo SociedadCamasDeHospital
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

namespace SMIIndicadoresLerdo;

/**
 * Clase SociedadCamasDeHospital
 */
class SociedadCamasDeHospital extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Camas de Hospital en Lerdo';
        $this->fecha       = '2015-07-14T15:06:39';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-camas-de-hospital';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide el número de camas censables relativo a la población. Este indicador es un proxy de la infraestructura médica con la que cuenta el sector público de salud.';
        $this->claves      = 'IMPLAN, Lerdo, Índice de Competitividad Urbana, Salud';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Salud');
        $this->fuentes     = array('IMCO');
        $this->regiones    = array('Lerdo');
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
            array('fecha' => '2008-12-31', 'valor' => '2.4238', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '2.3906', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '2.6354', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '2.5998', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '2.5678', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2016-12-31', 'valor' => '114', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de camas censables')); // formateado 0, valor 12, crudo 7
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '1792', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de camas censables'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '818', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de camas censables'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '114', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de camas censables'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '71', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de camas censables'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2021-12-31', 'valor' => '10', 'fuente_nombre' => 'IMCO'));
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
Fuente: SINAIS.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadCamasDeHospital

?>
