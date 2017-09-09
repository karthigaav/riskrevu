<?php class Clientform_model extends MY_Model {

    public $table = "wpuv_rg_lead_detail";
    public $primary_key = "id";

    public function __construct()
    {
        parent::__construct();
        $this->return_as = "object";
    }

}
