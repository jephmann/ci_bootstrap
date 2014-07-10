<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of terms
 *
 * @author Jeffrey
 */

    class Terms extends MY_Controller
    {
        public function index()
        {
            /*
             * Special for this demo, based on the starter template
             */

            $lead = 'Bootstrap did not supply a Terms page.';
            $lead .= ' However, its navagation often points to one.';
            $lead .= ' So I created one based on the starter template.';

            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'starter-template';
            $data['brand']          = $this->brand;
            $data['title']          = "Terms";
            $data['navbar']         = $this->navbar;
            $data['navfoot']        = $this->navfoot;
            $data['lead']           = $lead;
            $data['copyright']      = $this->copyright;

            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/starter/navbar',$data);
            $this->load->view('bootstrap/container_open');
            $this->load->view('bootstrap/starter',$data);
            $this->load->view('bootstrap/container_close');
            $this->load->view('bootstrap/foot',$data);
        }

    }