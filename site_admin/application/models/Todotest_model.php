<?php class Todotest_model extends MY_Model {

    public $table = "todo_test";
    public $primary_key = "id";

    public function __construct()
    {
        parent::__construct();
        $this->return_as = "array";
    }

}
