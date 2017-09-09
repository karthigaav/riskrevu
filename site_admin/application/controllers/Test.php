<?php 
class Test extends My_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('todotest_model');
        $this->load->library('blade');
    }
    
    public function index(){
        $this->home();
    }
    
    public function set_item(){
        $insert = array();
        
        $insert['item'] = "something";
        $id = $this->todotest_model->insert($insert);
        
        if($id){
            echo $id;   
        } else {
            echo "nothing inserted";
        }
    }
    
    public function home(){ 
        $items = $this->todotest_model->get_all();
        $this->data['items'] = $items;
        $this->blade->set('title', 'To Do List')
                    ->render('home', $this->data);
        // $this->load->view('home', $this->data);
    }
    
    public function live_update(){
        $items = $this->todotest_model->get_all();
        $this->data['items'] = $items;
        $this->load->view('live', $this->data);
    }
    
    public function new_item(){
        $new = $this->input->post();
        
        $insert = array();
        $insert['desc'] = $new['item'];
        $this->todotest_model->insert($insert);
        $this->home();
    }
    
    function delete_item($id){
        $this->todotest_model->where('id', $id)->delete();
        $this->home();
    }
    
    function delete_ajax(){
        // make a function to delete items and reload data without loading the page 
    }
       
}