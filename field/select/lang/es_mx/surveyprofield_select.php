<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local language pack from http://localhost
 *
 * @package    surveyprofield
 * @subpackage select
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowed'] = 'permitido';
$string['customdefault'] = 'Personalizado';
$string['defaultoption'] = 'Por defecto';
$string['defaultoption_help'] = 'Este es el valor que el usuario remoto encontrará contestado por defecto. El valor por defecto para este tipo de pregunta es obligatorio, por lo que cuando no sea especificado, será "Elija..." (Choose...).';
$string['downloadformat'] = 'Formato de descarga';
$string['downloadformat_help'] = 'Elija el formato de la contestación como aparece una vez que sean descargados los intentos de los usuarios';
$string['ierr_foreigndefaultvalue'] = 'El ítem por defecto "{$a}" no fue encontrado entre las opciones';
$string['ierr_labelsduplicated'] = 'Las etiquetas deben de ser diferentes entre sí';
$string['ierr_missingdefault'] = 'El valor por defecto personalizado falta. Usted podría desear elegir el de "{$a}" .';
$string['ierr_valuesduplicated'] = 'Los valores deben de ser diferentes entre sí';
$string['labelother'] = 'Opción "otra"';
$string['labelother_help'] = 'Si esta pregunta está equipada con la opción "otra" seguida por un campo de texto, escriba aquí la etiqueta para esa opción. Usted puede elegir esta opción con el formato: etiqueta->valor, La etiqueta se mostrará en la pantalla, el valor será usado como valor por defecto para el campo de texto. Si Usted solamente especifica una palabra, el campo de valor por defecto será descartado.';
$string['option'] = 'Opción';
$string['options'] = 'Opciones';
$string['options_help'] = 'La lista de las opciones para este ítem. Usted tiene permitido escribirlas como: valor::etiqueta para definir ambos valor y etiqueta. La etiqueta será mostrada en el menú desplegable, el valor será almacenado en elcampo. Si Usted solamente especifica una palabra por línea (sin separador), ambos el valor y la etiqueta serán valorados para esa palabra.';
$string['parentformat'] = '[etiqueta]';
$string['pluginname'] = 'Seleccionar';
$string['returnlabels'] = 'etiqueta del ítem seleccionado';
$string['returnposition'] = 'contestación posicional';
$string['returnvalues'] = 'valor del ítem seleccionado';
$string['uerr_optionnotset'] = 'Por favor elija una opción';
$string['userfriendlypluginname'] = 'Seleccionar';
