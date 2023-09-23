<?php
/**
 * @package   AkeebaEngage
 * @copyright Copyright (c)2020-2021 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

class HTMLPurifier_HTMLModule_CommonAttributes extends HTMLPurifier_HTMLModule
{
    /**
     * @type string
     */
    public $name = 'CommonAttributes';

    /**
     * @type array
     */
    public $attr_collections = array(
        'Core' => array(
            0 => array('Style'),
            // 'xml:space' => false,
            'class' => 'Class',
            'id' => 'ID',
            'title' => 'CDATA',
        ),
        'Lang' => array(),
        'I18N' => array(
            0 => array('Lang'), // proprietary, for xml:lang/lang
        ),
        'Common' => array(
            0 => array('Core', 'I18N')
        )
    );
}

// vim: et sw=4 sts=4
