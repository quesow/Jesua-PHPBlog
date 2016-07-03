<?php

defined('BASEPATH') OR exit('No direct script access allowed');


/**
 *
 */

class MY_Controller extends CI_Controller {

    protected $data_default = array(
        'page_title'        => 'Jesua | PHPBlog'
    );

    function __construct() {
        parent::__construct();
        $this->load->helper("url");
    }

    protected function layout($view, $data) {
        if (is_array($data) && !empty($data)) {
            foreach ($data as $k => $v) {
                $this->data_default[$k] = $v;
            }
        }


        $this->load->view('shared/header', $this->data_default);

        if(is_string($view)){
            $this->load->view($view);
        }else if(is_array($view)){
            foreach($view as $v){
                $this->load->view($v);
            }
        }

        $this->load->view('shared/footer');
    }
}
