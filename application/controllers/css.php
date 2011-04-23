<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Css extends CI_Controller {



	public function index()
	{

    $filename = $this->uri->segment(2);
    if (isset($filename) && $filename)
    {
      //mover para um arquivo CONFIG
      $_src_dir = 'assets/src/'; // Don't forget the trailing slash
      $_cache_dir = '.sass-cache';
      $file = $_src_dir . $filename;

      if (file_exists($file))
      {
        $this->load->library('Parser_sass');
	      $this->parser_sass->compile($file);
      }
      else
        return header("HTTP/1.0 404 Not Found");

    }
    else
      return header("HTTP/1.0 404 Not Found");

	}


}

/* End of file css.php */
