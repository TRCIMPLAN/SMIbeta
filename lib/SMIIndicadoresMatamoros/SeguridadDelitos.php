<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros SeguridadDelitos
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

namespace SMIIndicadoresMatamoros;

/**
 * Clase SeguridadDelitos
 */
class SeguridadDelitos extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Delitos en Matamoros';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-delitos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Total de delitos cometidos.';
        $this->claves      = 'IMPLAN, Matamoros, Delincuencia, Seguridad';
        // Para el Organizador
        $this->categorias  = array('Delincuencia', 'Seguridad');
        $this->fuentes     = array('Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública');
        $this->regiones    = array('Matamoros');
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
            array('fecha' => '2014-01-31', 'valor' => '69', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2014-02-28', 'valor' => '65', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2014-03-31', 'valor' => '79', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2014-04-30', 'valor' => '63', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2014-05-31', 'valor' => '95', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2014-06-30', 'valor' => '72', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2014-07-31', 'valor' => '85', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2014-08-31', 'valor' => '100', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2014-09-30', 'valor' => '75', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2014-10-31', 'valor' => '100', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2014-11-30', 'valor' => '78', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2014-12-31', 'valor' => '81', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2015-01-31', 'valor' => '76', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2015-02-28', 'valor' => '87', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2015-03-31', 'valor' => '72', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2015-04-30', 'valor' => '98', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2015-05-31', 'valor' => '65', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2015-06-30', 'valor' => '88', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2015-07-31', 'valor' => '98', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2015-08-31', 'valor' => '70', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2015-09-30', 'valor' => '88', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2015-10-31', 'valor' => '79', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2015-11-30', 'valor' => '33', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2015-12-31', 'valor' => '42', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2016-01-31', 'valor' => '34', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2016-02-29', 'valor' => '42', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2016-03-31', 'valor' => '40', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2016-04-30', 'valor' => '72', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2016-05-31', 'valor' => '85', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2016-06-30', 'valor' => '142', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2016-07-31', 'valor' => '109', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2016-08-31', 'valor' => '115', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2016-09-30', 'valor' => '136', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2016-10-31', 'valor' => '126', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2016-11-30', 'valor' => '106', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2016-12-31', 'valor' => '112', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-01-31', 'valor' => '110', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-02-28', 'valor' => '106', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-03-31', 'valor' => '146', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-04-30', 'valor' => '104', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-05-31', 'valor' => '137', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-06-30', 'valor' => '248', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-07-31', 'valor' => '155', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-08-31', 'valor' => '166', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-09-30', 'valor' => '148', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-10-31', 'valor' => '135', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-11-30', 'valor' => '189', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-12-31', 'valor' => '89', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-01-31', 'valor' => '114', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-02-28', 'valor' => '115', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-03-31', 'valor' => '148', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-04-30', 'valor' => '154', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-05-31', 'valor' => '180', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-06-30', 'valor' => '145', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-07-31', 'valor' => '117', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-08-31', 'valor' => '151', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-09-30', 'valor' => '120', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-10-31', 'valor' => '105', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-11-30', 'valor' => '131', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-12-31', 'valor' => '74', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2019-01-31', 'valor' => '80', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2019-02-28', 'valor' => '142', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2019-03-31', 'valor' => '141', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2019-04-30', 'valor' => '120', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2019-05-31', 'valor' => '176', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2019-06-30', 'valor' => '139', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2019-07-31', 'valor' => '123', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2019-08-31', 'valor' => '178', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2019-09-30', 'valor' => '161', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2019-10-31', 'valor' => '191', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2019-11-30', 'valor' => '170', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2019-12-31', 'valor' => '103', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública')); // formateado 0, valor 144, crudo 72
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
            array('region_nombre' => 'Torreón', 'fecha' => '2019-12-31', 'valor' => '808', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2019-12-31', 'valor' => '536', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2019-12-31', 'valor' => '144', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2019-12-31', 'valor' => '103', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2022-07-31', 'valor' => '2367', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'));
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
Descarga la [Base de Datos](http://secretariadoejecutivo.gob.mx/incidencia-delictiva/incidencia-delictiva-fuero-comun.php)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SeguridadDelitos

?>
