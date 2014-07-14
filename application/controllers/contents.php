<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of contents
 *
 * @author Jeffrey
 */

    class Contents extends CIBS_Controller
    {
        public function index()
        {
            /*
             * Special for this demo, based on the starter template
             */

            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'starter-template';
            $data['brand']          = $this->brand;
            $data['title']          = "Contents";
            $data['navbar']         = $this->navbar;
            $data['navbardiv']      = $this->starter_navbardiv;
            $data['navfoot']        = $this->navfoot;
            $data['copyright']      = $this->copyright;

            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/theme/navbar/open_nav');
            $this->load->view('bootstrap/theme/navbar/open_container');
            $this->load->view('bootstrap/theme/navbar/header');
            $this->load->view('bootstrap/theme/navbar/open_collapse');
            $this->load->view('bootstrap/starter/navbar',$data);
            $this->load->view('bootstrap/theme/navbar/close');
            $this->load->view('bootstrap/container_open');
            $this->load->view('bootstrap/starter/contents',$data);
            $this->load->view('bootstrap/container_close');
            $this->load->view('bootstrap/foot',$data);
        }

    }
