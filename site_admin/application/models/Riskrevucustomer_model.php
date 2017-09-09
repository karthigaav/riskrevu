<?php class Riskrevucustomer_model extends MY_Model {

    public $table = "riskrevu_customers";
    public $primary_key = "id";

    public function __construct()
    {
        parent::__construct();
        $this->return_as = "object";
    }

}
