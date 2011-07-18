<?php
/*
 * @package         Mod_showmd5salthash
 * @author          Emerson Rocha Luiz ( emerson@webdesign.eng.br - @fititnt -  http://fititnt.org )
 * @copyright       Copyright (C) 2011 Joomla! Coders Brazil ( @JCoderBR - http://jcoder.org )
 * @license         GPL3
 */
// no direct access
defined('_JEXEC') or die;

// Include helper.php once
require_once dirname(__FILE__).'/helper.php';

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

if ($passwordtomd5salthash = JRequest::getVar('passwordtomd5salthash')){
    $hash = getMD5SaltHash($passwordtomd5salthash);
}

require JModuleHelper::getLayoutPath('mod_showmd5salthash', $params->get('layout', 'default'));


