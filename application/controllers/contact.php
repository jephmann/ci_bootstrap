<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of contact
 *
 * @author Jeffrey
 */
class Contact extends CI_Controller
{
    
    public function index()
    {
        /*
         * Special for this demo, based on the starter template
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

        $lead_p = 'Bootstrap did not supply a Contact page.';
        $lead_p .= ' However, its navagation often points to one.';
        $lead_p .= ' So I created one based on the starter template.';

        $data['bootstrap']      = base_url() . 'bootstrap/';
        $data['bootstrap_css']  = $data['bootstrap'] . 'css/';
        $data['bootstrap_js']   = $data['bootstrap'] . 'js/';
        $data['custom_css']     = 'starter-template';
        $data['brand']          = 'CodeIgniter BootStrap';
        $data['title']          = "Contact";            
        $data['h1']             = $data['title'];
        $data['navbar']         = $navbar;
        $data['lead_p']         = $lead_p;

        $this->load->view('bootstrap/head',$data);
        $this->load->view('bootstrap/starter/navbar',$data);
        $this->load->view('bootstrap/starter/contact',$data);
        $this->load->view('bootstrap/foot',$data);
    }
    
}
