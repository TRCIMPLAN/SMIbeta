<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SociedadViviendasParticularesHabitadasQueDisponenDeTelefonoCelular
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
 * Clase SociedadViviendasParticularesHabitadasQueDisponenDeTelefonoCelular
 */
class SociedadViviendasParticularesHabitadasQueDisponenDeTelefonoCelular extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Viviendas Particulares Habitadas que disponen de Teléfono Celular en La Laguna';
        $this->fecha       = '2018-07-26T14:16:14';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-viviendas-particulares-habitadas-que-disponen-de-telefono-celular';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de viviendas en las que tienen teléfono celular';
        $this->claves      = 'IMPLAN, La Laguna, Vivienda, Bienestar, Población';
        // Para el Organizador
        $this->categorias  = array('Vivienda', 'Bienestar', 'Población');
        $this->fuentes     = array('INEGI. Censos de Población y Vivienda');
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
            array('fecha' => '2010-12-31', 'valor' => '73.0000', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'),
            array('fecha' => '2015-12-31', 'valor' => '85.1022', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'),
            array('fecha' => '2020-12-31', 'valor' => '361782', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda')); // formateado 0, valor 6, crudo 3
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
            array('region_nombre' => 'Torreón', 'fecha' => '2015-12-31', 'valor' => '87.0000', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda', 'notas' => 'Fuente: INEGI, Intercensal 2015'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2020-12-31', 'valor' => '361782', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'));
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
Fuente: INEGI
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadViviendasParticularesHabitadasQueDisponenDeTelefonoCelular

?>
