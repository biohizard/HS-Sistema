<?php
class Test extends CI_Controller
{
    //----->

    //--->
    public function __construct()
    {
        parent::__construct();
        set_language();
    }
    //--->

    //--->
    public function index()
    {   
         // Pasar los textos traducidos a la vista
         $data['welcome_message'] = $this->lang->line('welcome_message');
         $data['contact']         = $this->lang->line('contact');
         $data['about']           = $this->lang->line('about');

        $this->load->view('test/inicio',$data);
    }
    //--->

    //----->
}
