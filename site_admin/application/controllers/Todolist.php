<?php 
class Todolist extends My_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('todo_model');
    }
    
    public function index(){
        // get data from the model 
        $items = $this->todo_model->get_all();
        $this->data['items'] = $items;
        // pass the data to the view 
        $this->load->view('todolist', $this->data);
    }
    
    public function set_item(){
        // get values from the post
        $item = $this->input->post('item');
        
        $insert = array();
        $insert['desc'] = $item;
        // insert them into the database
        $id = $this->todo_model->insert($insert);
        
        if($id){
            // do something 
             $items = $this->todo_model->get_all();
        
        $this->data['items'] = $items;
        $this->load->view('todolist', $this->data);
        } else {
            echo "did not record values";
        }
    }
    
    function delete($id){
        $this->todo_model->where('id', $id)->delete();
        $this->index();
    } 
    
}// class ends 