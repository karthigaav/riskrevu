<?php class Dashboard extends MY_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('dashboard/main');
    }

    public function get_clients(){
        // get data from the database first,
        // pass data to the view
        // load the view


    }

    public function set_clients(){
        // get data from the user input
        // insert or update on the database
        // load a view / or return values, load a view
    }

    public function client_details(){

    }

}