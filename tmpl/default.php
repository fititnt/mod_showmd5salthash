<?php
/*
 * @package         Mod_werandonmessage
 * @author          Emerson Rocha Luiz ( emerson@webdesign.eng.br - @fititnt -  http://fititnt.org )
 * @copyright       Copyright (C) 2011 Joomla! Coders Brazil ( @JCoderBR - http://jcoder.org )
 * @license         GPL3
 */
// no direct access
defined('_JEXEC') or die;
?>
<div class="werandonmessage<?php echo $moduleclass_sfx ?>">	
    <?php if ($params->get('showtitle', 1) != 0 && $randonresult->title != ''):?>
        <span id="werandonmessage-title"><?php echo $randonresult->title; ?></span>
    <?php endif;?>    
    <div id="werandonmessage-message"><?php echo $randonresult->message; ?></div>    
    <?php if ($params->get('showauthor', 1) != 0 && $randonresult->author != ''):?>
        <span id="werandonmessage-author"><?php echo $randonresult->author; ?></span>
    <?php endif;?>
</div>
