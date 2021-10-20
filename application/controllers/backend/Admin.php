<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('currentActiveId')) {

        } else {
            $this->session->set_flashdata('login_failed', 'Link is broken');
            redirect('backend/Login');
        }
    }

    public function index()
    {
        $data['tittle'] = "dashboard";
        $data['divisions'] = $this->Common->get_data('divisions');
        $request_data = $this->input->get();
        $data['users'] = $this->Registration->get_register_users('users', $request_data);
        $data['side_menu'] = $this->load->view('backend/admin_view/side_menu', $data, TRUE);
        $data['main_content'] = $this->load->view('backend/admin_view/dashboard', $data, TRUE);
        $this->load->view('backend/admin_view/admin_layout', $data);
    }

    private function x_debug($data)
    {
        print_r($data);
        echo "<br>";
        exit();
    }


    private function set_confirmation_msg($data, $true_msg, $false_msg)
    {
        $confirm = 0;
        if ($data == FALSE) {
            $this->session->set_flashdata('error', $false_msg);


        } else {
            $this->session->set_flashdata('success', $true_msg);
            $confirm = 1;
        }
        return $confirm;
    }


    public function user_logout()
    {
        $this->session->unset_userdata('currentActiveId');
        $this->session->sess_destroy();
        redirect('backend/Login', 'location');
    }
}
