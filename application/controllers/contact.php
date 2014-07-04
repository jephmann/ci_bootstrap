<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of contact
 *
 * @author Jeffrey
 */

    class Contact extends CI_Controller
    {
        /*
         * Globals
         */
        private $bootstrap;
        private $bootstrap_css;
        private $bootstrap_js;
        private $navbar;

        public function __construct() {
            parent::__construct();

            $this->bootstrap        = base_url().'bootstrap/';  // path to Bootstrap assets
            $this->bootstrap_css    = $this->bootstrap.'css/';  // path to Bootstrap *.css
            $this->bootstrap_js     = $this->bootstrap.'js/';   // path to Bootstrap *.js

            // common navigation
            $this->navbar = array(
                array(
                    'href' => 'contents',
                    'text' => 'Contents',
                ),
                array(
                    'href' => 'about',
                    'text' => 'About',
                ),
                array(
                    'href' => 'contact',
                    'text' => 'Contact',
                ),
            );
        }

        public function index()
        {
            /*
             * Special for this demo, based on the starter template
             */

            $lead_p = 'Bootstrap did not supply a Contact page.';
            $lead_p .= ' However, its navagation often points to one.';
            $lead_p .= ' So I created one based on the starter template.';

            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'starter-template';
            $data['brand']          = CB_BRAND;
            $data['title']          = "Contact";            
            $data['h1']             = $data['title'];
            $data['navbar']         = $this->navbar;
            $data['lead_p']         = $lead_p;

            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/starter/navbar',$data);
            $this->load->view('bootstrap/starter/contact',$data);
            $this->load->view('bootstrap/foot',$data);
        }

    }
