<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objet extends CI_Controller {

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

    public function templateBack($page,$data){
        $this->load->helper('url');
        $this->load->helper('assets_helper');
        $data['template'] = $page.'.php';
        $this->load->view('templateBack',$data);
    }   

	public function listeOtherObjet()
    {
    	$this->load->helper('assets_helper');
    	$this->load->model('ObjetModele');
    	$idu=$this->session->userdata('id');
        $data['liste'] = $this->ObjetModele->getOtherObjet($idu);
        $this->templateFront('accueil', $data);
    }

    public function listeObjetUser()
    {
    	$this->load->helper('assets_helper');
    	$this->load->model('ObjetModele');
    	$this->load->model('CategorieModele');
    	$idu=$this->session->userdata('id');
        $data['liste'] = $this->ObjetModele->getObjetUser($idu);
        $data['categorie'] = $this->CategorieModele->getAllCategorie();
        $this->templateFront('myObjet', $data);
    }

    public function pageRecherche()
    {
    	$this->load->helper('assets_helper');
    	$this->load->model('ObjetModele');
    	$this->load->model('CategorieModele');
    	$titre=$this->input->post('titre');
        $catego=$this->input->post("catego");
        $data['categorie'] = $this->CategorieModele->getAllCategorie();
    	$data['liste'] = $this->ObjetModele->rechercher($titre,$catego);
        $this->templateFront('recherche', $data);
    }

    public function pageModifierObjet($ido)
    {
    	$this->load->helper('assets_helper');
    	$this->load->model('ObjetModele');
    	$this->load->model('CategorieModele');
        $data['idobj']=$ido;
        $data['categorie'] = $this->CategorieModele->getAllCategorie();
        $this->templateFront('modifObjet', $data);
    }

    public function rechercher()
    {
    	$this->load->helper('assets_helper');
    	$this->load->model('ObjetModele');
    	$this->load->model('CategorieModele');
    	$titre=$this->input->post('titre');
        $catego=$this->input->post("catego");
        $data['categorie'] = $this->CategorieModele->getAllCategorie();
    	$data['liste'] = $this->ObjetModele->rechercher($titre,$catego);
        $this->templateFront('recherche', $data);
        
    }

    public function listeAllObjet()
    {
    	$this->load->helper('assets_helper');
    	$this->load->model('ObjetModele');
        $data['liste'] = $this->ObjetModele->getAllObjet();
        $this->templateFront('toutObjet', $data);
    }

    public function details($ido)
    {
    	$this->load->helper('assets_helper');
    	$this->load->model('ObjetModele');
    	$this->load->model('PropositionModele');
    	$idU=$this->session->userdata('id');
        $data['liste'] = $this->ObjetModele->getDetails($ido);
        $data['props'] = $this->PropositionModele->getProposition($ido,$idU);
        $this->templateFront('details', $data);
    }

    public function detailsHistorique($ido)
    {
    	$this->load->helper('assets_helper');
    	$this->load->model('ObjetModele');
    	$this->load->model('PropositionModele');
    	$idU=$this->session->userdata('id');
        $data['liste'] = $this->ObjetModele->getDetails($ido);
        $data['historique'] = $this->PropositionModele->historique($ido);
        $this->templateFront('detailsHistorique', $data);
    }

    public function insertObjet()
    {
    	$this->load->helper('assets_helper');
        $this->load->model('ObjetModele');
    	$this->load->model('CategorieModele');
    	$idu=$this->session->userdata('id');
        $titre=$this->input->post("titre");
        $categorie=$this->input->post("catego");
        $prix=$this->input->post("prix");
        $descri=$this->input->post("descri");
        $filename = $_FILES["choosefile"]["name"];
        $tempname = $_FILES["choosefile"]["tmp_name"];  
        move_uploaded_file($tempname,'./assets/img/'.$filename);
        $this ->ObjetModele-> ajoutObjet($titre,$filename,$descri,$categorie,$prix,$idu); 
        $data['liste'] = $this->ObjetModele->getObjetUser($idu);
        $data['categorie'] = $this->CategorieModele->getAllCategorie();
        $this->templateFront('myObjet',$data);
    }

    public function modifierObjet()
    {
    	$this->load->helper('assets_helper');
        $this->load->model('ObjetModele');
    	$this->load->model('CategorieModele');
    	$idu=$this->session->userdata('id');
        $titre=$this->input->post("titre");
        $categorie=$this->input->post("catego");
        $prix=$this->input->post("prix");
        $idobj=$this->input->post("idobj");
        $descri=$this->input->post("descri");
        $filename = $_FILES["choosefile"]["name"];
        $tempname = $_FILES["choosefile"]["tmp_name"];  
        move_uploaded_file($tempname,'./assets/img/'.$filename);
        $this ->ObjetModele-> updateObjet($titre,$filename,$descri,$categorie,$prix,$idobj); 
        $data['liste'] = $this->ObjetModele->getObjetUser($idu);
        $data['categorie'] = $this->CategorieModele->getAllCategorie();
        $this->templateFront('myObjet',$data);
    }


	
}
