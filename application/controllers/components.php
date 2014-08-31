<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of components
 *
 * @author Jeffrey
 */
    class Components extends CIBS_Controller
    {
        /*
         * Globals
         */
        
        public function __construct() {
            parent::__construct();
            
        }
        
        public function index()
        {
            
            $data['viewport']           = TRUE;            
            $data['body_role']          = 'document';
            $data['custom_css']         = 'starter-template';
            $data['title']              = "Components";
            $data['navbar']             = $this->navbar;
            $data['navbardiv']          = $this->starter_navbardiv;
            $data['navbar_dropdown']    = $this->navbar_dropdown;
            $data['contents_components']    = $this->contents_components;
            $data['navfoot']            = $this->navfoot;

            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/navbar/open_nav');
            $this->load->view('bootstrap/navbar/open_container');
            $this->load->view('bootstrap/navbar/header');
            $this->load->view('bootstrap/navbar/open_collapse');            
            $this->load->view('bootstrap/navbar/open_bar');
            $this->load->view('bootstrap/navbar/li_core',$data);
            $this->load->view('bootstrap/navbar/li_dropdown',$data);
            $this->load->view('bootstrap/navbar/li_components',$data);
            $this->load->view('bootstrap/navbar/close_bar'); 
            $this->load->view('bootstrap/navbar/close');
            $this->load->view('bootstrap/container/open');
            $this->load->view('bootstrap/starter/components',$data);
            $this->load->view('bootstrap/container/close');
            $this->load->view('bootstrap/foot',$data);
            
            /*
             * Special for this demo, based on the starter template
             */
        }
        
        public function glyphs()
        {
            
            $data['viewport']           = TRUE;            
            $data['body_role']          = NULL;
            $data['custom_css']         = 'starter-template';
            $data['title']              = "Available Glyphs";
            $data['navbar']             = $this->navbar;
            $data['navbardiv']          = $this->starter_navbardiv;
            $data['navbar_dropdown']    = $this->navbar_dropdown;
            $data['contents_components']    = $this->contents_components;
            $data['navfoot']            = $this->navfoot;
            $data['glyphicons']         = $this->glyphicons;

            $this->load->view('bootstrap/head_components',$data);
            $this->load->view('bootstrap/navbar/open_nav');
            $this->load->view('bootstrap/navbar/open_container');
            $this->load->view('bootstrap/navbar/header');
            $this->load->view('bootstrap/navbar/open_collapse');            
            $this->load->view('bootstrap/navbar/open_bar');
            $this->load->view('bootstrap/navbar/li_core',$data);
            $this->load->view('bootstrap/navbar/li_dropdown',$data);
            $this->load->view('bootstrap/navbar/li_components',$data);
            $this->load->view('bootstrap/navbar/close_bar'); 
            $this->load->view('bootstrap/navbar/close');
            $this->load->view('bootstrap/container/open');
            $this->load->view('bootstrap/glyphicons/glyphs',$data);
            $this->load->view('bootstrap/container/close');
            $this->load->view('bootstrap/foot',$data);
            
        }
    }
