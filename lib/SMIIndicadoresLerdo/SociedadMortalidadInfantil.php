<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo SociedadMortalidadInfantil
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
 * Clase SociedadMortalidadInfantil
 */
class SociedadMortalidadInfantil extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Mortalidad Infantil en Lerdo';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-mortalidad-infantil';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Tasa de mortalidad infantil. Defunciones de menores de un año por cada mil nacidos vivos. Se incluye en el subíndice "Sociedad Preparada, Incluyente y Sana" de IMCO.';
        $this->claves      = 'IMPLAN, Lerdo, Salud, Objetivos del Milenio, Índice de Competitividad Urbana, Sector Automotriz';
        // Para el Organizador
        $this->categorias  = array('Salud', 'Objetivos del Milenio', 'Índice de Competitividad Urbana', 'Sector Automotriz');
        $this->fuentes     = array('SINAIS (SSA)', 'IMCO');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'decimal'),
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
            array('fecha' => '2009-12-31', 'valor' => '5.6000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2010-12-31', 'valor' => '14.1000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2011-12-31', 'valor' => '7.5000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2012-12-31', 'valor' => '15.3800', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => 'Dirección General de Información en Salud (DGIS). Base de datos de defunciones generales 1979-2007. [en línea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaría de Salud. <http://www.sinais.salud.gob.mx> [Consulta: 01 abril 2014].'),
            array('fecha' => '2013-12-31', 'valor' => '20.5000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('fecha' => '2016-12-31', 'valor' => '6.7500', 'fuente_nombre' => 'IMCO')); // formateado 0, valor 12, crudo 7
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '18.0800', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '13.1700', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '6.7500', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '2.4700', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2021-12-31', 'valor' => '17', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2013-12-31', 'valor' => '11.9000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('region_nombre' => 'Durango', 'fecha' => '2013-12-31', 'valor' => '14.1000', 'fuente_nombre' => 'SINAIS (SSA)'),
            array('region_nombre' => 'Nacional', 'fecha' => '2013-12-31', 'valor' => '12.6000', 'fuente_nombre' => 'SINAIS (SSA)'));
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
Los datos pueden modificarse debido al manejo de los registros administrativos por parte de la Secretaria de Salud.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadMortalidadInfantil

?>
