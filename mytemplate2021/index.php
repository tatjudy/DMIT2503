<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
    <head>
        <jdoc:include type="head" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/styles.css" type="text/css" />
    </head>
    <body>
        <jdoc:include type="modules" name="top" /> <!-- module position of 'top', places modules into this section -->
        <jdoc:include type="component" /> <!-- all articles and main content -->
        <jdoc:include type="modules" name="bottom" />
        <?php $config = JFactory::getConfig(); ?>
        <?php echo $config->get( 'sitename' ); ?>
        <a href="https://www.facebook.com/">
            <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/images/social-icons/32-facebook.png">
        </a>
    </body>
</html>