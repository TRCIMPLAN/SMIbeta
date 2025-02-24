<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SustentabilidadUsoDeBicicleta
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
 * Clase SustentabilidadUsoDeBicicleta
 */
class SustentabilidadUsoDeBicicleta extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Uso de Bicicleta en La Laguna';
        $this->fecha       = '2014-11-10T10:24:58';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-uso-de-bicicleta';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Distribución porcentual del total de viajes cotidianos realizados por modalidad.';
        $this->claves      = 'IMPLAN, La Laguna, Medio Ambiente, Movilidad, Vialidad';
        // Para el Organizador
        $this->categorias  = array('Medio Ambiente', 'Movilidad', 'Vialidad');
        $this->fuentes     = array('Logit', 'INEGI. Censos de Población y Vivienda');
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
            array('fecha' => '2011-12-31', 'valor' => '2.0000', 'fuente_nombre' => 'Logit'),
            array('fecha' => '2020-12-31', 'valor' => '6.8400', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda')); // formateado 0, valor 4, crudo 2
    } // datos

    /**
     * Otras Regiones Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones_estructura() {
        return NULL;
    } // otras_regiones_estructura

    /**
     * Otras regiones
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones() {
        return NULL;
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
Estudio realizado por Logit en 2011. Contempla los viajes de los municipios de Torreón y Matamoros.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadUsoDeBicicleta

?>
