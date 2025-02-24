<?php
/**
 * TrcIMPLAN Sitio Web - UnCuartoDeHora
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
 * Clase UnCuartoDeHora
 */
class UnCuartoDeHora extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Un cuarto de hora';
        $this->autor                      = 'Mtro. Aldo Valdés López';
        $this->fecha                      = '2022-06-06T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'un-cuarto-de-hora-junio-2022';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El Objetivo #11 de Desarrollo Sostenible de la ONU plantea que debemos “lograr que las ciudades sean más inclusivas, seguras, resilientes y sostenibles”.';
        $this->claves                     = 'IMPLAN, Torreon, ciudad, social, servicios';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/UnCuartoDeHora.md';
        // Para el Organizador
        $this->categorias                 = array('Población');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase UnCuartoDeHora

?>
