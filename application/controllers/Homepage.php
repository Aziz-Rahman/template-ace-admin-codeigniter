<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function __construct() 
	{
        parent::__construct();
    }
    
    public function index()
    {
    	// $this->load->view('tables');
    	$data['aaaaaaaaaaaa'] = 'wkwkwkwkwkkw wkwkwkkwkw wkwkwkkwkw';
    	$this->template->set('title', 'Dashboard !!!!!!!!!!!!');
        $this->template->load('template', 'index', $data);
    }

    public function table()
    {
    	$this->template->set('title', 'Table !!!!!!!!!!!!');
    	$this->template->load('template', 'tables');
    }

    public function form()
    {
    	$this->template->set('title', 'Form !!!!!!!!!!!!');
    	$this->template->load('template', 'form');
    }

    public function form2()
    {
    	$this->template->set('title', 'Form2 !!!!!!!!!!!!');
    	$this->template->load('template', 'form2');
    }

    public function top_menu()
    {
    	$this->template->set('title', 'Page with top menu !!!!!!!!!!!!');
    	$this->load->view('top-menu');
    }

    public function jq_ui()
    {
    	$this->template->set('title', 'Page jquery_ui !!!!!!!!!!!!');
    	$this->template->load('template', 'jq-ui');
    }

    public function elements()
    {
    	$this->template->set('title', 'Page elements !!!!!!!!!!!!');
    	$this->template->load('template', 'elements');
    }

    public function form_wizard()
    {
    	$this->template->set('title', 'Page form_wizard !!!!!!!!!!!!');
    	$this->template->load('template', 'form-wizard');
    }

    public function wysiwyg()
    {
    	$this->template->set('title', 'Page wysiwyg !!!!!!!!!!!!');
    	$this->template->load('template', 'wysiwyg');
    }

    public function profile()
    {
    	$this->template->set('title', 'Page profile !!!!!!!!!!!!');
    	$this->template->load('template', 'profile');
    }

    public function invoice()
    {
    	$this->template->set('title', 'Page invoice !!!!!!!!!!!!');
    	$this->template->load('template', 'invoice');
    }

    public function login()
    {
    	$this->template->set('title', 'Login !!!!!!!!!!!!');
    	$this->load->view('login');
    }

     public function inbox()
    {
    	$this->template->set('title', 'Page inbox !!!!!!!!!!!!');
    	$this->template->load('template', 'inbox');
    }

     public function buttons()
    {
    	$this->template->set('title', 'Page buttons !!!!!!!!!!!!');
    	$this->template->load('template', 'buttons');
    }
}
