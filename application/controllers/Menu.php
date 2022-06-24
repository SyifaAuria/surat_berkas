<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends  CI_Controller {
    public function index()
    {
        $data = array (
            'content' => 'dasboard/index'
        );
        $this->load->view('template/main',$data);
    }
    
}
