<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresDurango SeguridadPresuntosDelitosDelFueroComun
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

namespace SMIIndicadoresDurango;

/**
 * Clase SeguridadPresuntosDelitosDelFueroComun
 */
class SeguridadPresuntosDelitosDelFueroComun extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Presuntos Delitos del Fuero Común en Durango';
        $this->fecha       = '2015-04-29T15:20:25';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-presuntos-delitos-del-fuero-comun';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = '';
        $this->claves      = 'IMPLAN, Durango, Seguridad, Delincuencia';
        // Para el Organizador
        $this->categorias  = array('Seguridad', 'Delincuencia');
        $this->fuentes     = array('Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos');
        $this->regiones    = array('Durango');
    } // constructor

    /**
     * Datos Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function datos_estructura() {
        return array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'cantidad'),
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
            array('fecha' => '2022-03-31', 'valor' => '0', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos')); // formateado 0, valor 2, crudo 1
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
            'valor' => array('enca' => 'Dato', 'formato' => 'cantidad'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2012-12-31', 'valor' => '6647', 'fuente_nombre' => 'INEGI', 'notas' => 'Fuente: [INEGI](http://www.inegi.org.mx/est/lista_cubos/consulta.aspx?p=gob&c=5)'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2012-12-31', 'valor' => '13584', 'fuente_nombre' => 'INEGI', 'notas' => 'Fuente: [INEGI](http://www.inegi.org.mx/est/lista_cubos/consulta.aspx?p=gob&c=5)'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2012-12-31', 'valor' => '1100', 'fuente_nombre' => 'INEGI', 'notas' => 'Fuente: [INEGI](http://www.inegi.org.mx/est/lista_cubos/consulta.aspx?p=gob&c=5)'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2022-04-30', 'valor' => '2941', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2022-03-31', 'valor' => '0', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('region_nombre' => 'Durango', 'fecha' => '2022-03-31', 'valor' => '0', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('region_nombre' => 'Nacional', 'fecha' => '2022-03-31', 'valor' => '0', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'));
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
Fuente: [INEGI](http://www.inegi.org.mx/est/lista_cubos/consulta.aspx?p=gob&c=5)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SeguridadPresuntosDelitosDelFueroComun

?>
