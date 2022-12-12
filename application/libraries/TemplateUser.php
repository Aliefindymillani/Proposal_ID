<?php

class TemplateUser
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }
    function disp_register($template = NULL, $data = NULL) {
        if ($template != NULL)
            $data['_content'] = $this->ci->load->view($template, $data, TRUE);
        $data['_template'] = $this->ci->load->view('templates/auth', $data);
    }

    function disp_login($template = NULL, $data = NULL) {
        if ($template != NULL)
            $data['_content'] = $this->ci->load->view($template, $data, TRUE);
        $data['_template'] = $this->ci->load->view('templates/auth', $data);
    }

    function display($template = NULL, $data = NULL)
    {
        if ($template != NULL)
            $data['_content'] = $this->ci->load->view($template, $data, TRUE);
        $data['_header'] = $this->ci->load->view('templates/header', $data, TRUE);
        $data['_sidebar'] = $this->ci->load->view('templates/sidebar', $data, TRUE);
        $data['_template'] = $this->ci->load->view('templates/layout', $data);
    }
}
