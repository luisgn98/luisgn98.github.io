/*
 * @package   AkeebaEngage
 * @copyright Copyright (c)2020-2021 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

function toggleWriteability(id_of_patient, checked) {
    document.getElementById(id_of_patient).disabled = checked;
}

// vim: et sw=4 sts=4
