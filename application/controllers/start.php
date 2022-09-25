<?php
 defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

 class Start extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
    }
   
    public function index() 
    {
        $this->load->view('home_view');
    }
        
     public function logo()
    {
        $this->load->view('logo_view');
    }
    
    public function emblem()
    {
        $this->load->view('emblem_view');
    }
    
    public function mascot()
    {
        $this->load->view('mascot_view');
    }
    
    public function colour()
    {
        $this->load->view('color_view');
    }
    
    public function form()
    {
        $this->load->view('form_view');
    }

}