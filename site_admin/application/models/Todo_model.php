<?php class Todo_model extends MY_Model {

    public $table = "todos";
    public $primary_key = "id";

    public function __construct()
    {
        parent::__construct();
        $this->return_as = "object";
    }

}
