<?php
/**
 * TrcIMPLAN Sitio Web - EducacionAmbiental
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
 * Clase EducacionAmbiental
 */
class EducacionAmbiental extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Educación ambiental: una oportunidad para conducir a un crecimiento sostenible.';
        $this->autor                      = 'Arq. Estefanía Rodríguez Schott';
        $this->fecha                      = '2023-01-19T09:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'educacion-ambiental-ene-2023';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En 1972, durante la conferencia de las Naciones Unidas en Estocolmo, Suecia; se habló por primera vez sobre la importancia de cuidar el medio ambiente.';
        $this->claves                     = 'IMPLAN, Torreon, ambiental';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/EducacionAmbiental.md';
        // Para el Organizador
        $this->categorias                 = array('Medio Ambiente');
        $this->fuentes                    = array('PROFEPA');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase EducacionAmbiental

?>
