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

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx', NULL));
$passwordtomd5salthash = JRequest::getVar('passwordtomd5salthash', JTEXT::_('MOD_SHOWMD5SALTHASH_DEFALT_PASSWORD'));

if ($passwordtomd5salthash){
    $hash = getMD5SaltHash($passwordtomd5salthash);
} else {
    $hash = 'default'; //fail
}
if($params->get('advabced', 1)){
    $md5Encoded = getMd5Encode($passwordtomd5salthash);
    $base64Encoded = getBase64Encode($passwordtomd5salthash);
    $CryptEncoded = getCryptEncode($passwordtomd5salthash);
}

require JModuleHelper::getLayoutPath('mod_showmd5salthash', 'default');


