<?php class MY_Controller extends CI_Controller {
 
    public function __construct(){ // this runs the constructor function of the parent class. Thereby making this class a CI controller class [code igniter's main controller]
        parent::__construct();
        $this->load->helper('url');
    }
    
    // functions and variables declared in this class will be scopeable from anywhere else in the application, if our other controllers extend from here. 
    public function five_test(){
        return 'Five';
    }
    
    
}
?>