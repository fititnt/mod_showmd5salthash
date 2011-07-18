<?php
/*
 * @package         Mod_showmd5salthash
 * @author          Emerson Rocha Luiz ( emerson@webdesign.eng.br - @fititnt -  http://fititnt.org )
 * @copyright       Copyright (C) 2011 Joomla! Coders Brazil ( @JCoderBR - http://jcoder.org )
 * @license         GPL3
 */
// no direct access
defined('_JEXEC') or die;


/*
 * Return MD5 Salt hash
 * @var         string      $plainpassword: string to obain hash
 * @return      string      $result
 */
function getMD5SaltHash($plainpassword){

    jimport('joomla.user.helper');
    $salt = JUserHelper::genRandomPassword(32);
    $crypt = JUserHelper::getCryptedPassword($plainpassword, $salt);
    $result = $crypt . ':' . $salt;
    
    return $result;
}