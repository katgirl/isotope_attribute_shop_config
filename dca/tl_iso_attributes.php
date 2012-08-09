<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Kirsten Roschanski (c) 2012 
 * @author     Kirsten Roschanski 
 * @package    IsotopeAttributeShopConfig 
 * @license    LGPL 
 * @filesource
 */

/**
 * Palette changes
 * Adds choose_options to all attributes that have an {search_filters_legend}
 */
foreach ($GLOBALS['TL_DCA']['tl_iso_attributes']['palettes'] as $key => $palette)
{
  $GLOBALS['TL_DCA']['tl_iso_attributes']['palettes'][$key] = str_replace
  (
    '{search_filters_legend}', 
    '{search_filters_legend},shop_config', 
    $GLOBALS['TL_DCA']['tl_iso_attributes']['palettes'][$key]
  );
}  

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_iso_attributes']['fields']['shop_config'] =  array
(
	'label'					=> &$GLOBALS['TL_LANG']['tl_iso_attributes']['iso_configs'],
  'exclude'       => true,
	'inputType'     => 'checkboxWizard',
	'foreignKey'		=> 'tl_iso_config.name',
	'eval'					=> array('multiple'=>true, 'tl_class'=>'clr'),
);
