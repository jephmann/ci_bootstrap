<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of about
 *
 * @author Jeffrey
 */

    class About extends MY_Controller
    {
        public function index()
        {
            /*
             * Special for this demo, based on the starter template
             */

            $lead = 'Bootstrap did not supply an About page.';
            $lead .= ' However, its navagation often points to one.';
            $lead .= ' So I created one based on the starter template.';

            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'starter-template';
            $data['brand']          = CB_BRAND;
            $data['title']          = "About";
            $data['navbar']         = $this->navbar;
            $data['navfoot']        = $this->navfoot;
            $data['lead']           = $lead;

            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/starter/navbar',$data);
            $this->load->view('bootstrap/container_open');
            $this->load->view('bootstrap/starter',$data);
            $this->load->view('bootstrap/container_close');
            $this->load->view('bootstrap/foot',$data);
        }

    }
