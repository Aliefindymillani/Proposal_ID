<?php

class TemplateUser
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }
    function disp_signup_user($template = NULL, $data = NULL) {
        if ($template != NULL)
            $data['_content'] = $this->ci->load->view($template, $data, TRUE);
        $data['_template'] = $this->ci->load->view('templates/auth', $data);
    }

    function disp_login($template = NULL, $data = NULL) {
        if ($template != NULL)
            $data['_content'] = $this->ci->load->view($template, $data, TRUE);
        $data['_template'] = $this->ci->load->view('templates/auth', $data);
    }

    function disp_dashboard($template = NULL, $data = NULL)
    {
        if ($template != NULL)
            $data['_content'] = $this->ci->load->view($template, $data, TRUE);
        $data['_header'] = $this->ci->load->view('components/navbar_user', $data, TRUE);
        $data['_sidebar'] = $this->ci->load->view('components/sidebar_user', $data, TRUE);
        $data['_template'] = $this->ci->load->view('templates/layout', $data);
    }

    function disp_jadwal($template = NULL, $data = NULL)
    {
        if ($template != NULL)
            $data['_content'] = $this->ci->load->view($template, $data, TRUE);
        $data['_header'] = $this->ci->load->view('components/navbar_user', $data, TRUE);
        $data['_sidebar'] = $this->ci->load->view('components/sidebar_user', $data, TRUE);
        $data['_template'] = $this->ci->load->view('templates/layout', $data);
    }

    function disp_pengajuan($template = NULL, $data = NULL)
    {
        if ($template != NULL)
            $data['_content'] = $this->ci->load->view($template, $data, TRUE);
        $data['_header'] = $this->ci->load->view('components/navbar_user', $data, TRUE);
        $data['_sidebar'] = $this->ci->load->view('components/sidebar_user', $data, TRUE);
        $data['_template'] = $this->ci->load->view('templates/layout', $data);
    }

    function disp_status($template = NULL, $data = NULL)
    {
        if ($template != NULL)
            $data['_content'] = $this->ci->load->view($template, $data, TRUE);
        $data['_header'] = $this->ci->load->view('components/navbar_user', $data, TRUE);
        $data['_sidebar'] = $this->ci->load->view('components/sidebar_user', $data, TRUE);
        $data['_template'] = $this->ci->load->view('templates/layout', $data);
    }
}
