<?php
/**
 * TrcIMPLAN Sitio Web - AsociacionesPublicoPrivadas
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
 * Clase AsociacionesPublicoPrivadas
 */
class AsociacionesPublicoPrivadas extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Avances en el tema de Asociaciones Público Privadas: Medio para el Desarrollo Urbano Sostenible de Torreón.';
        $this->autor                      = 'Lic. Frida García Gutiérrez';
        $this->fecha                      = '2022-06-20T13:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'asociaciones-publico-privadas-junio-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '“La infraestructura es uno de los requerimientos básicos para el desarrollo económico, la integración territorial y el logro de la competitividad”';
        $this->claves                     = 'IMPLAN, Torreon, infraestructura, desarrollo, territorial';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/AsociacionesPublicoPrivadas.md';
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array('SIPP');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase AsociacionesPublicoPrivadas

?>
