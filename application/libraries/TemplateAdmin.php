<?php

class TemplateAdmin
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }
    function disp_signup_admin($template = NULL, $data = NULL) {
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
        $data['_header'] = $this->ci->load->view('components/navbar_admin', $data, TRUE);
        $data['_sidebar'] = $this->ci->load->view('components/sidebar_admin', $data, TRUE);
        $data['_template'] = $this->ci->load->view('templates/layout_admin', $data);
    }

    function disp_kegiatan_diterima($template = NULL, $data = NULL)
    {
        if ($template != NULL)
            $data['_content'] = $this->ci->load->view($template, $data, TRUE);
        $data['_header'] = $this->ci->load->view('components/navbar_admin', $data, TRUE);
        $data['_sidebar'] = $this->ci->load->view('components/sidebar_admin', $data, TRUE);
        $data['_template'] = $this->ci->load->view('templates/layout_admin', $data);
    }

    function disp_kegiatan_ditolak($template = NULL, $data = NULL)
    {
        if ($template != NULL)
            $data['_content'] = $this->ci->load->view($template, $data, TRUE);
        $data['_header'] = $this->ci->load->view('components/navbar_admin', $data, TRUE);
        $data['_sidebar'] = $this->ci->load->view('components/sidebar_admin', $data, TRUE);
        $data['_template'] = $this->ci->load->view('templates/layout_admin', $data);
    }

    function disp_kegiatan_masuk($template = NULL, $data = NULL)
    {
        if ($template != NULL)
            $data['_content'] = $this->ci->load->view($template, $data, TRUE);
        $data['_header'] = $this->ci->load->view('components/navbar_admin', $data, TRUE);
        $data['_sidebar'] = $this->ci->load->view('components/sidebar_admin', $data, TRUE);
        $data['_template'] = $this->ci->load->view('templates/layout_admin', $data);
    }

    function disp_list_user($template = NULL, $data = NULL)
    {
        if ($template != NULL)
            $data['_content'] = $this->ci->load->view($template, $data, TRUE);
        $data['_header'] = $this->ci->load->view('components/navbar_admin', $data, TRUE);
        $data['_sidebar'] = $this->ci->load->view('components/sidebar_admin', $data, TRUE);
        $data['_template'] = $this->ci->load->view('templates/layout_admin', $data);
    }

    function disp_tambah_user($template = NULL, $data = NULL)
    {
        if ($template != NULL)
            $data['_content'] = $this->ci->load->view($template, $data, TRUE);
        $data['_header'] = $this->ci->load->view('components/navbar_admin', $data, TRUE);
        $data['_sidebar'] = $this->ci->load->view('components/sidebar_admin', $data, TRUE);
        $data['_template'] = $this->ci->load->view('templates/layout_admin', $data);
    }

    function disp_form_proposal($template = NULL, $data = NULL)
    {
        if ($template != NULL)
            $data['_content'] = $this->ci->load->view($template, $data, TRUE);
            $data['_header'] = $this->ci->load->view('components/navbar_admin', $data, TRUE);
            $data['_sidebar'] = $this->ci->load->view('components/sidebar_admin', $data, TRUE);
            $data['_template'] = $this->ci->load->view('templates/layout_admin', $data);
    }

    function disp_update($template = NULL, $data = NULL)
    {
        if ($template != NULL)
            $data['_content'] = $this->ci->load->view($template, $data, TRUE);
        $data['_template'] = $this->ci->load->view('templates/auth', $data);
    }
}
