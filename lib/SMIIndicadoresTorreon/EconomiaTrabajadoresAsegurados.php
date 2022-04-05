<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon EconomiaTrabajadoresAsegurados
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

namespace SMIIndicadoresTorreon;

/**
 * Clase EconomiaTrabajadoresAsegurados
 */
class EconomiaTrabajadoresAsegurados extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Trabajadores Asegurados en Torreón';
        $this->fecha       = '2014-11-07T09:04:55';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-trabajadores-asegurados';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Total de trabajadores asegurados en el Instituto Mexicano del Seguro Social a nivel municipal';
        $this->claves      = 'IMPLAN, Torreón, Empleo';
        // Para el Organizador
        $this->categorias  = array('Empleo');
        $this->fuentes     = array('Instituto Mexicano del Seguro Social (IMSS)');
        $this->regiones    = array('Torreón');
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
            array('fecha' => '2013-11-30', 'valor' => '162744', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2013-12-31', 'valor' => '161591', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-01-31', 'valor' => '161679', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-02-28', 'valor' => '162541', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-03-31', 'valor' => '163726', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-04-30', 'valor' => '164698', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-05-31', 'valor' => '165762', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-06-30', 'valor' => '166473', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-07-31', 'valor' => '167134', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-08-31', 'valor' => '169162', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-09-30', 'valor' => '170628', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => 'La diferencia de trabajadores asegurados entre el 31 de Diciembre de 2013 y el 30 de Septiembre de 2014, es de 9037 trabajadores más durante el presente año.'),
            array('fecha' => '2014-10-31', 'valor' => '171233', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-11-30', 'valor' => '171804', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2014-12-31', 'valor' => '169066', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-01-31', 'valor' => '169434', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-02-28', 'valor' => '171485', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-03-31', 'valor' => '172263', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-04-30', 'valor' => '172563', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-05-31', 'valor' => '173179', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-06-30', 'valor' => '174252', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-07-31', 'valor' => '174614', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-08-31', 'valor' => '176500', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-09-30', 'valor' => '175798', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-10-31', 'valor' => '177681', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-11-30', 'valor' => '178305', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2015-12-31', 'valor' => '175813', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-01-31', 'valor' => '177367', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-02-29', 'valor' => '179103', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-03-31', 'valor' => '179362', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-04-30', 'valor' => '180602', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-05-31', 'valor' => '181231', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-06-30', 'valor' => '183582', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-07-31', 'valor' => '183430', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-08-31', 'valor' => '185952', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-09-30', 'valor' => '187057', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-10-31', 'valor' => '187365', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-11-30', 'valor' => '187176', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2016-12-31', 'valor' => '183240', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-01-31', 'valor' => '183426', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-02-28', 'valor' => '185458', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-03-31', 'valor' => '186824', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-04-30', 'valor' => '187175', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-05-31', 'valor' => '188223', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-06-30', 'valor' => '189222', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-07-31', 'valor' => '191316', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-08-31', 'valor' => '192619', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-09-30', 'valor' => '194314', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-10-31', 'valor' => '196475', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-11-30', 'valor' => '197746', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2017-12-31', 'valor' => '194220', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-01-31', 'valor' => '196149', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-02-28', 'valor' => '197305', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-03-31', 'valor' => '197924', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-04-30', 'valor' => '198976', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-05-31', 'valor' => '199780', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-06-30', 'valor' => '200399', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-07-31', 'valor' => '200369', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-08-31', 'valor' => '201628', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-09-30', 'valor' => '201958', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-10-31', 'valor' => '203718', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-11-30', 'valor' => '202639', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2018-12-31', 'valor' => '197890', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2019-01-31', 'valor' => '198707', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2019-02-28', 'valor' => '200096', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2019-03-31', 'valor' => '199779', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2019-04-30', 'valor' => '200547', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2019-05-31', 'valor' => '199962', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2019-06-30', 'valor' => '200577', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2019-07-31', 'valor' => '200657', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2019-08-31', 'valor' => '201261', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2019-09-30', 'valor' => '201850', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2019-10-31', 'valor' => '202214', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2019-11-30', 'valor' => '202446', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2019-12-31', 'valor' => '199406', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2020-01-31', 'valor' => '202278', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2020-02-29', 'valor' => '204307', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2020-03-31', 'valor' => '204573', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2020-04-30', 'valor' => '200581', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2020-05-31', 'valor' => '197772', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2020-06-30', 'valor' => '197253', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2020-07-31', 'valor' => '198364', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2020-08-31', 'valor' => '198397', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2020-09-30', 'valor' => '199358', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2020-10-31', 'valor' => '202446', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2020-11-30', 'valor' => '203922', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2020-12-31', 'valor' => '202794', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2021-01-31', 'valor' => '202567', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2021-02-28', 'valor' => '204068', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2021-03-31', 'valor' => '203284', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2021-04-30', 'valor' => '203775', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2021-05-31', 'valor' => '203768', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2021-06-30', 'valor' => '204708', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2021-07-31', 'valor' => '207730', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2021-08-31', 'valor' => '208769', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2021-09-30', 'valor' => '209092', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2021-10-30', 'valor' => '210325', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2021-11-30', 'valor' => '211242', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2021-12-31', 'valor' => '208058', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2022-01-31', 'valor' => '209910', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('fecha' => '2022-02-28', 'valor' => '211977', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)')); // formateado 0, valor 200, crudo 101
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
            array('region_nombre' => 'Torreón', 'fecha' => '2022-02-28', 'valor' => '211977', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2022-02-28', 'valor' => '90565', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2022-02-28', 'valor' => '13551', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2022-02-28', 'valor' => '11034', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2022-02-28', 'valor' => '327127', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2022-02-28', 'valor' => '807975', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('region_nombre' => 'Durango', 'fecha' => '2022-02-28', 'valor' => '257932', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'),
            array('region_nombre' => 'Nacional', 'fecha' => '2022-02-28', 'valor' => '20941286', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)'));
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
Datos obtenidos de [IMSS](http://datos.imss.gob.mx/dataset)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaTrabajadoresAsegurados

?>
