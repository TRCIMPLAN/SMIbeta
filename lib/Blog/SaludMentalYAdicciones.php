<?php
/**
 * TrcIMPLAN Sitio Web - SaludMentalYAdicciones
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
 * Clase SaludMentalYAdicciones
 */
class SaludMentalYAdicciones extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Salud Mental y Adicciones';
        $this->autor                      = 'Mtro. Omar Ortega Herrera';
        $this->fecha                      = '2021-12-03T10:50';
        // El nombre del archivo a crear
        $this->archivo                    = 'salud-mental-y-adicciones-dic-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Uno de los proyectos prioritarios en el Plan 2040 desarrollado por el IMPLAN Torreón, dentro del eje de Desarrollo Social es el generar una campaña de prevención de adicciones y violencia en educación media superior, parece que es el mejor momento para comenzar, si no es que ya vamos retrasados.';
        $this->claves                     = 'IMPLAN, Torreon, adicciones, violencia, salud, mental';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/SaludMentalYAdicciones.md';
        // Para el Organizador
        $this->categorias                 = array('Salud');
        $this->fuentes                    = array('ENCODE');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase SaludMentalYAdicciones

?>
