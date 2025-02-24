<?php
class Pacientes extends CI_Controller
{
    //----->

    //--->
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->default = $this->load->database('default', TRUE);
        $this->load->model('pacientes/Querys');
    }
    //--->

    //--->
    public function index()
    {
    }
    //--->

    //---> C
    public function pacientesNew()
    {
        if (
            empty($this->input->post('permissions')) ||
            empty($this->input->post('email')) ||
            empty($this->input->post('first')) ||
            empty($this->input->post('second')) ||
            empty($this->input->post('tel'))
        ) {
            $xr8_data =  array('code' => 'user new', 'value' => False);
        } else {
            $xr8_data = $this->Querys->querysPacientesNew();
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($xr8_data));
    }
    //--->

    //---> R
    public function pacientesView()
    {   
        if (empty($_GET['querty'])) {
            $xr8_data   = $this->Querys->querysPacientesView();
        }else{            
            //$token = $this->input->get_request_header('Authorization', TRUE);
            
            $xr8_data   = $this->Querys->querysPacienteOnlyView();
            
            //$xr8_data =array_merge($xr8_data, array('token' => $token));


            if ($xr8_data === null) {
                $xr8_data = "No se encontraron datos.";
                } else {
                    $xr8_data = $xr8_data;
                }
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($xr8_data));
    }
    //--->

    //---> U
    public function pacientesUpdate()
    {
            /*
            id_advance: P-0a87dcfc88ef865a51
            permissions: paciente
            email: xxx
            first: zzz
            second: yyy
            tel: 9999
            puesto: drpacientes
            */
        if (
            empty($this->input->post('email'))       ||
            empty($this->input->post('first'))       ||
            empty($this->input->post('second'))
        ) {
            $xr8_data =
                array(
                    'code' => 'Pacientes Update',
                    'value' => False
                );
        } else {
            $xr8_data = $this->Querys->querysPacientesUpdate();
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($xr8_data));
    }
    //--->

    //---> D
    public function pacientesDelete()
    {
        if (
            empty($this->input->post('id_advance'))
        ) {
            $xr8_data =
                array(
                    'code' => 'Pacientes Delete',
                    'value' => False
                );
        } else {
            $xr8_data = $this->Querys->querysPacientesDelete();
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($xr8_data));
    }
    //--->

    //----->
}