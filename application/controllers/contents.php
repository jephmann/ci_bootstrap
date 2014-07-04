<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of contents
 *
 * @author Jeffrey
 */
class Contents extends CI_Controller
{
    
    public function index()
    {
        /*
         * Special for this demo
         * Based on the starter template
         */

        $navbar = array(
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

        $data['bootstrap']      = base_url() . 'bootstrap/';
        $data['bootstrap_css']  = $data['bootstrap'] . 'css/';
        $data['bootstrap_js']   = $data['bootstrap'] . 'js/';
        $data['custom_css']     = 'starter-template';
        $data['brand']          = 'CodeIgniter BootStrap';
        $data['title']          = "Contents";            
        $data['h1']             = $data['title'];
        $data['navbar']         = $navbar;

        $this->load->view('bootstrap/head',$data);
        $this->load->view('bootstrap/starter/navbar',$data);
        $this->load->view('bootstrap/starter/contents',$data);
        $this->load->view('bootstrap/foot',$data);
    }
    
}
