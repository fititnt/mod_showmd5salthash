<?php
/*
 * @package         Mod_werandonmessage
 * @author          Emerson Rocha Luiz ( emerson@webdesign.eng.br - @fititnt -  http://fititnt.org )
 * @copyright       Copyright (C) 2011 Joomla! Coders Brazil ( @JCoderBR - http://jcoder.org )
 * @license         GPL3
 */
// no direct access
defined('_JEXEC') or die;

// Include helper.php once
require_once dirname(__FILE__).'/helper.php';
if( $params->get('loadcss', 1) == 1){
    JHTML::stylesheet('werandonmessage.css', '/modules/mod_werandonmessage/');
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$randonresult = getRandonText();

require JModuleHelper::getLayoutPath('mod_werandonmessage', $params->get('layout', 'default'));


