<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of about
 *
 * @author Jeffrey
 */

    class About extends CIBS_Controller
    {
        public function index()
        {
            $lead = 'Bootstrap did not supply an About page.';
            $lead .= ' However, its navagation often points to one.';
            $lead .= ' So I created one based on the starter template.';
            
            $data['viewport']           = TRUE;
            $data['body_role']          = 'document';
            $data['custom_css']         = 'starter-template';
            $data['title']              = "About";
            $data['navbar']             = $this->navbar;
            $data['navbardiv']          = $this->starter_navbardiv;
            $data['navbar_dropdown']    = $this->navbar_dropdown;
            $data['navfoot']            = $this->navfoot;
            $data['lead']               = $lead;

            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/navbar/open_nav');
            $this->load->view('bootstrap/navbar/open_container');
            $this->load->view('bootstrap/navbar/header');
            $this->load->view('bootstrap/navbar/open_collapse');            
            $this->load->view('bootstrap/navbar/open_bar');
            $this->load->view('bootstrap/navbar/li_core',$data);
            $this->load->view('bootstrap/navbar/li_dropdown',$data);
            $this->load->view('bootstrap/navbar/close_bar'); 
            $this->load->view('bootstrap/navbar/close');
            $this->load->view('bootstrap/container/open');
            $this->load->view('bootstrap/starter',$data);
            $this->load->view('bootstrap/container/close');
            $this->load->view('bootstrap/foot',$data);
            
            /*
             * Special for this demo, based on the starter template
             */
        }

    }
