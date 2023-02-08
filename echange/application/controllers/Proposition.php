<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proposition extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function templateFront($page,$data){
        $this->load->helper('url');
        $this->load->helper('assets_helper');
        $data['template'] = $page.'.php';
        $this->load->view('templateFront',$data);
    }   

	public function listeProposition()
    {
    	$this->load->helper('assets_helper');
    	$this->load->model('PropositionModele');
    	$idu=$this->session->userdata('id');
        $data['liste'] = $this->PropositionModele->getPropositionByUser($idu);
        $this->templateFront('proposition', $data);
    }

    public function echanger($obj1,$obj2,$prop)
    {
    	$this->load->helper('assets_helper');
    	$this->load->model('PropositionModele');
    	$idu=$this->session->userdata('id');
        $this ->PropositionModele-> faireDemande($obj1,$idu,$obj2,$prop);
        $data['liste'] = $this->PropositionModele->getPropositionByUser($idu); 
        redirect(site_url('Proposition/listeMesDemandes'));
    }

    public function validerEchange($ide,$idd,$ido1,$idp,$ido2)
    {
    	$this->load->helper('assets_helper');
    	$this->load->model('ObjetModele');
    	$this->load->model('PropositionModele');
        $this->PropositionModele->accept($ide); 
        $this->ObjetModele->changerProprietaire($idp,$ido1); 
        $this->ObjetModele->changerProprietaire($idd,$ido2); 
        redirect(site_url('Proposition/listeProposition'));
    }

    public function refuserEchange($ide)
    {
    	$this->load->helper('assets_helper');
    	$this->load->model('PropositionModele');
        $this->PropositionModele->refuser($ide); 
        redirect(site_url('Proposition/listeProposition'));
    }

    public function listeMesDemandes()
    {
    	$this->load->helper('assets_helper');
    	$this->load->model('PropositionModele');
    	$idu=$this->session->userdata('id');
        $data['liste'] = $this->PropositionModele->getMyDemande($idu);
        $this->templateFront('mesDemandes', $data);
    }

    
}
