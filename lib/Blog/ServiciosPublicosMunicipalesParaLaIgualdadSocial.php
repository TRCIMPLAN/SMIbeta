<?php
/**
 * TrcIMPLAN Sitio Web - ServiciosPublicosMunicipalesParaLaIgualdadSocial
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

namespace Blog;

/**
 * Clase ServiciosPublicosMunicipalesParaLaIgualdadSocial
 */
class ServiciosPublicosMunicipalesParaLaIgualdadSocial extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Servicios Públicos Municipales Para La Igualdad Social';
        $this->autor                      = 'Lic. Frida García Gutiérrez';
        $this->fecha                      = '2021-09-10T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'servicios-publicos-municipales-igualdad-social-sep-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Basado en los principios de la impersonalidad, predecibilidad y el trato a la ciudadanía, el universalismo ético, busca proponer un modelo de burocracia que funja como igualador social, en sus procesos de gobierno. La relación causa y efecto, nos señala la importancia de no trasladar costos a la ciudadanía derivados de procesos internos de baja visión.';
        $this->claves                     = 'IMPLAN, Torreon, servicios, igualdad, social';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ServiciosPublicosMunicipalesParaLaIgualdadSocial.md';
        // Para el Organizador
        $this->categorias                 = array('Servicios Públicos');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ServiciosPublicosMunicipalesParaLaIgualdadSocial

?>
