<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Colour extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://localhost/git_project/index.php/kalyani
     * 	- or -
     * 		http://localhost/git_project/index.php/kalyani/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to http://localhost/git_project/index.php/kalyani/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('colour_view');
    }
    
    public function getColour() {
        $this->load->view('colour_view');
    }
    
     public function getColours() {

        //get marks from kalyani_model
        $this->load->model('swathi_model');
        $data['marks'] = $this->swathi_model->get_data();
        
        $this->load->view('kalyani_marks_view', $data);
    }

}


