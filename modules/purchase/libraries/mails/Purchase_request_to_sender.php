<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Purchase_request_to_sender extends App_mail_template
{
    protected $for = 'purchase';

    protected $data;

    public $slug = 'purchase-request-to-sender';

    public function __construct($data)
    {
        parent::__construct();

        $this->data = $data;
        $this->set_merge_fields('purchase_request_to_sender_merge_fields', $this->data);
    }
    public function build()
    {
        $this->to($this->data->mail_to);
    }
}

?>