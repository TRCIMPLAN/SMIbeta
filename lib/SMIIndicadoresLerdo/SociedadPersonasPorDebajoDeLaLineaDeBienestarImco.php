<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo SociedadPersonasPorDebajoDeLaLineaDeBienestarImco
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
 * Clase SociedadPersonasPorDebajoDeLaLineaDeBienestarImco
 */
class SociedadPersonasPorDebajoDeLaLineaDeBienestarImco extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Personas por Debajo de la Línea de Bienestar (IMCO) en Lerdo';
        $this->fecha       = '2015-07-14T15:41:06';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-personas-por-debajo-de-la-linea-de-bienestar-imco';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice "Sociedad Preparada, Incluyente y Sana". Mide la proporción de la PEA ocupada con ingresos menores a la línea de bienestar mínimo que marca CONEVAL. En diciembre 2012, esta línea se ubicó en $2,388 pesos. Incluye tanto la canasta básica alimentaria como la no alimentaria.';
        $this->claves      = 'IMPLAN, Lerdo, Índice de Competitividad Urbana, Bienestar';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Bienestar');
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
            array('fecha' => '2008-12-31', 'valor' => '1.3600', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '7.7800', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '4.5800', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '5.0400', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '2.6800', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2016-12-31', 'valor' => '5276', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Personas que ganan menos de lo establecido por CONEVAL')); // formateado 0, valor 12, crudo 7
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '36118', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Personas que ganan menos de lo establecido por CONEVAL'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '19327', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Personas que ganan menos de lo establecido por CONEVAL'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '5276', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Personas que ganan menos de lo establecido por CONEVAL'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '8791', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Personas que ganan menos de lo establecido por CONEVAL'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2021-12-31', 'valor' => '19', 'fuente_nombre' => 'IMCO'));
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
Fuente: INEGI (ENOE), CONEVAL.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadPersonasPorDebajoDeLaLineaDeBienestarImco

?>
