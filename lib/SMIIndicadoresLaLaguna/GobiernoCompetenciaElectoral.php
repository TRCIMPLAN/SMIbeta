<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna GobiernoCompetenciaElectoral
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
 * Clase GobiernoCompetenciaElectoral
 */
class GobiernoCompetenciaElectoral extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Competencia Electoral en La Laguna';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-competencia-electoral';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Diferencia entre los dos candidatos con más votación entre el total de votos. Forma parte de subíndice de "Sistema Político Estable y Funcional". Mide la diferencia de votos entre el primero y segundo lugar como proporción del total de votos de las últimas elecciones federales. Este indicador asume que una mayor competencia electoral supone contextos más propicios para una mayor rendición de cuentas.';
        $this->claves      = 'IMPLAN, La Laguna, Participación Ciudadana, Gobierno, Índice de Competitividad Urbana';
        // Para el Organizador
        $this->categorias  = array('Participación Ciudadana', 'Gobierno', 'Índice de Competitividad Urbana');
        $this->fuentes     = array('IMCO', 'INE-IEPCC');
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
            array('fecha' => '2008-12-31', 'valor' => '35.0300', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '35.0300', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '35.0300', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '5.2900', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '5.2900', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2013-07-07', 'valor' => '6.7000', 'fuente_nombre' => 'INE-IEPCC'),
            array('fecha' => '2016-12-31', 'valor' => '26.0000', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2017-12-31', 'valor' => '17.0100', 'fuente_nombre' => 'IMCO', 'notas' => 'Diferencia votos entre 1º lugar y el 2º como % del total de votos (INE)'),
            array('fecha' => '2018-12-31', 'valor' => '18.5700', 'fuente_nombre' => 'IMCO', 'notas' => 'Diferencia votos entre 1º lugar y el 2º como % del total de votos (INE)'),
            array('fecha' => '2019-12-31', 'valor' => '18.5700', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2020-12-31', 'valor' => '18.5700', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2021-12-31', 'valor' => '18.5700', 'fuente_nombre' => 'IMCO')); // formateado 0, valor 24, crudo 14
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '22.4800', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '31.8800', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '33.0400', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '29.0500', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2021-12-31', 'valor' => '18.5700', 'fuente_nombre' => 'IMCO'));
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
Unidades: Porcentaje de votos totales. Fuente: IFE, 2009 y 2012.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase GobiernoCompetenciaElectoral

?>
