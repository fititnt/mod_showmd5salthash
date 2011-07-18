<?php
/*
 * @package         Mod_werandonmessage
 * @author          Emerson Rocha Luiz ( emerson@webdesign.eng.br - @fititnt -  http://fititnt.org )
 * @copyright       Copyright (C) 2011 Joomla! Coders Brazil ( @JCoderBR - http://jcoder.org )
 * @license         GPL3
 */
// no direct access
defined('_JEXEC') or die;


/*
 * Return one randon result from table #__mod_werandonmessage
 * return object
 */
function getRandonText(){
    $db = &JFactory::getDBO();
    $query = $db->getQuery(true);
    $query->select('*')
          ->from('#__mod_werandonmessage')
          ->where('published = 1')
          ->order('RAND()')//chose one randon
          //->limit('1') //@todo: testar mais tarde para retornar sometne um valor
            ;
    $db->setQuery($query);
    $result = $db->loadObject();
    
    return $result;
}