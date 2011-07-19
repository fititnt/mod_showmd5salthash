<?php
/*
 * @package         Mod_showmd5salthash
 * @author          Emerson Rocha Luiz ( emerson@webdesign.eng.br - @fititnt -  http://fititnt.org )
 * @copyright       Copyright (C) 2011 Joomla! Coders Brazil ( @JCoderBR - http://jcoder.org )
 * @license         GPL3
 */
// no direct access
defined('_JEXEC') or die;
?>

<div class="showmd5salhash<?php echo $moduleclass_sfx; ?>">
    <div class="showmd5salhash-form">
        <form target="<?php echo JURI::current(); ?>" type="post">
            <input name="passwordtomd5salthash" size="80" value="<?php echo $passwordtomd5salthash; ?>" />
            <input type="submit" value="<?php echo JText::_('MOD_SHOWMD5SALTHASH_SEND'); ?>"/>
        </form>
    </div>
    <div class="showmd5salhash-encoded">
         <hr />
         <?php echo JText::_('MOD_SHOWMD5SALTHASH_RESULT'); ?>
         <?php echo JText::_('MOD_SHOWMD5SALTHASH_MD5WITHSALT'); ?>:<br /><input name="passwordtomd5salthash" size="80"  value="<?php echo $hash; ?>"/>
         <?php if($params->get('advanced', 1)): ?>
         <br /> <?php echo JText::_('MOD_SHOWMD5SALTHASH_MD5_ENCODED'); ?>: <br /><input size="80" value="<?php echo $md5Encoded; ?>"/>
         <br /> <?php echo JText::_('MOD_SHOWMD5SALTHASH_BASE64_ENCODED'); ?>: <br /><input size="80" value="<?php echo $base64Encoded; ?>"/>
         <br /> <?php echo JText::_('MOD_SHOWMD5SALTHASH_CRYPT_ENCODED'); ?>: <br /><input size="80" value="<?php echo $CryptEncoded; ?>"/>
         <?php endif; ?>
    </div>
</div>

