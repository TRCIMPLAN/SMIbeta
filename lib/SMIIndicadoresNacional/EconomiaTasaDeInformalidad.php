<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresNacional EconomiaTasaDeInformalidad
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
 * Clase EconomiaTasaDeInformalidad
 */
class EconomiaTasaDeInformalidad extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Tasa de Informalidad en Nacional';
        $this->fecha       = '2014-12-11T13:00:58';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-tasa-de-informalidad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Tasa de empleos informales.';
        $this->claves      = 'IMPLAN, Nacional, Empleo';
        // Para el Organizador
        $this->categorias  = array('Empleo');
        $this->fuentes     = array('Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos');
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
            array('fecha' => '2015-03-31', 'valor' => '57.6100', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2015-06-30', 'valor' => '57.8111', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2015-09-30', 'valor' => '57.7927', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2015-12-31', 'valor' => '58.1779', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2016-03-31', 'valor' => '57.3613', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2016-06-30', 'valor' => '57.1800', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2016-09-30', 'valor' => '57.3700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2016-12-31', 'valor' => '57.2400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2017-03-31', 'valor' => '57.1700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('fecha' => '2017-06-30', 'valor' => '56.5082', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2017-09-30', 'valor' => '57.1900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2019-09-30', 'valor' => '56.5000', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2019-12-31', 'valor' => '56.2400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2020-03-31', 'valor' => '56.0800', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2020-09-30', 'valor' => '54.2400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2020-12-31', 'valor' => '55.5900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2021-03-31', 'valor' => '55.0700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2021-06-30', 'valor' => '56.1600', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2021-12-31', 'valor' => '55.8400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2021-12-31', 'valor' => '55.8400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2021-12-31', 'valor' => '55.8400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos')); // formateado 0, valor 42, crudo 21
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
            'valor' => array('enca' => 'Dato', 'formato' => 'porcentaje'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2017-03-31', 'valor' => '45.9200', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2017-03-31', 'valor' => '41.6500', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2017-03-31', 'valor' => '41.8200', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2017-03-31', 'valor' => '39.1000', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2022-07-31', 'valor' => '38.7700', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2021-12-31', 'valor' => '35.3800', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('region_nombre' => 'Durango', 'fecha' => '2021-12-31', 'valor' => '50.4600', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('region_nombre' => 'Nacional', 'fecha' => '2021-12-31', 'valor' => '55.8400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'));
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

} // Clase EconomiaTasaDeInformalidad

?>
