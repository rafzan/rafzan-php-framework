<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Parser_sass{

    public function compile($file)
    {
   
    $contents = read_file($file);

    require 'phamlp/sass/SassParser.php';

    $sass = new SassParser(array('style' => 'expanded', 'cache_location' => './assets/.sass-cache', 'extensions' => array('Compass' => array())));

    header('Content-Type: text/css');
    echo $sass->toCss($file);

    }
}

/* End of file Parser_sass.php */
