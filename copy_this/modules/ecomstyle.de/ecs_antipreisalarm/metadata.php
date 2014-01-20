<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'ecs_antipreisalarm',
    'title'        => '<strong style="color:#04B431;">e</strong><strong>ComStyle.de</strong>:  <i>AntiPreisalarm</i>',
    'description'  => array(
        'de' => '<i>Deaktiviert den Preisalarm im gesamten Shop.</i>
                <br><iframe frameborder="no" width="600px" height="400px" src="https://ssl-account.com/incl.oxidtheme.de/gratis.html"></iframe>',
    ),

    'version'      => '1.0',
    'thumbnail'    => 'ecomstyle.png',
    'author'       => '<strong style="font-size: 17px;color:#04B431;">e</strong><strong style="font-size: 16px;">ComStyle.de</strong>',
    'email'        => 'info@ecomstyle.de',
    'url'          => 'http://ecomstyle.de',
    'extend'       => array(
        'oxwarticledetails'     => 'ecomstyle.de/ecs_antipreisalarm/antipreisalarm' 
    ),

);
?>