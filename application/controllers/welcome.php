<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $this->load->view('header');
            $this->load->model('notification_model');
            $notification_records = $this->notification_model->get_public_notifications();
            $this->data['notification_records'] = $notification_records;
            $this->load->view('welcome_message',$this->data);
            $this->load->view('footer');
	}
        
        public function about_us()
        {
            $this->load->view('header');
            $this->load->view('about_us');
            $this->load->view('footer');
        }
        
        public function administration()
        {
            $this->load->view('header');
            $this->load->view('administration');
            $this->load->view('footer');
        }
        
        public function notification()
        {
            $this->load->view('header');
            $this->data['title']="Search Notification";
            $this->load->model('notification_category_model');
            $this->data['notification_categories'] = $this->notification_category_model->get_categories();
            $search_view = "notification";
            $this->load->view('header');
            $this->load->model('notification_model');
            $notification_records = $this->notification_model->get_public_notifications();
            $this->data['notification_records'] = $notification_records;
            $this->load->view($search_view,$this->data);
            $this->load->view('footer');
        }
        
        public function contact()
        {
            $this->load->view('header');
            $this->load->view('contact');
            $this->load->view('footer');
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */