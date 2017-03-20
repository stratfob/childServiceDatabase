<?php
class Pages extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('model');
                $this->load->helper('url_helper');
                $this->load->library('session');
        }

        public function view($page = 'home')
	{
                if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                        // Whoops, we don't have a page for that!
                        show_404();
                }

        	$this->load->helper('url'); // For helper fuctions like base_url();.
        		
        		// send data to view
                $data['title'] = ucfirst($page); // Capitalize the first letter
        	$data['testData'] = $this->model->get_test();
        		
        		// load the view
                $this->load->view('pages/'.$page, $data);
	}

        public function logout()
        {
                $this->session->sess_destroy();
                redirect(site_url());
        }

        public function edit($id)
        {
                $this->load->helper('url'); // For helper fuctions like base_url();.
                        
                        // send data to view
                $data['title'] = "Edit";
                $data['data'] = $this->model->getClient($id);
                        
                        // load the view
                $this->load->view('pages/edit', $data);
        }
}
