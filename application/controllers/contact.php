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
        private $navfoot;

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
            // footer navigation
            $this->navfoot = array(
                array(
                    'href' => 'terms',
                    'text' => 'Terms',
                ),
                array(
                    'href' => 'privacy',
                    'text' => 'Privacy',
                ),
            );
        }

        public function index()
        {
            /*
             * Special for this demo, based on the starter template
             */

            $lead = 'Bootstrap did not supply a Contact page.';
            $lead .= ' However, its navagation often points to one.';
            $lead .= ' So I created one based on the starter template.';

            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'starter-template';
            $data['brand']          = CB_BRAND;
            $data['title']          = "Contact";
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
