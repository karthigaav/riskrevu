<?php class Dashboard extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('clientform_model');
    }

    public function index(){
        $this->load->view('dashboard/main');
    }

    public function agent_view(){
        // get data from the database first,
        // pass data to the view
        // load the view




        $clientlist = $this->clientform_model->get_all();

        $this->data['clientlist'] = $clientlist;

        $this->load->view('dashboard/agentview', $this->data);

    }

    public function agent_login(){
        // get data from the user input
        // insert or update on the database
        // load a view / or return values, load a view
    }

    public function client_details(){

    }

}