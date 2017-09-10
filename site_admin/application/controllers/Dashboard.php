<?php class Dashboard extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('clientform_model');
        $this->load->model('riskrevucustomer_model');
    }

    public function index(){
        $clientlist = $this->riskrevucustomer_model->get_all();

        $this->data['clientlist'] = $clientlist;

        $this->load->view('dashboard/main', $this->data);
    }

    public function agent_view(){
        // get data from the database first,
        // pass data to the view
        // load the view

        $clientlist = $this->riskrevucustomer_model->get_all();

        $this->data['clientlist'] = $clientlist;

        $this->load->view('dashboard/agentview', $this->data);

    }

    public function agent_login(){
        // get data from the user input
        // insert or update on the database
        // load a view / or return values, load a view
    }

    public function details(){
        $clientlist = $this->riskrevucustomer_model->get_all();

        $this->data['clientlist'] = $clientlist;

        $this->load->view('dashboard/details', $this->data);
    }

    public function form_details(){
        $this->load->view('dashboard/form_details');
    }

    public function chat(){
        $this->load->view('chat');
    } 

}