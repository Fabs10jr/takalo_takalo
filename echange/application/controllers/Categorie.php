<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Controller {

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

	public function listeCategorie()
    {
    	$this->load->helper('assets_helper');
    	$this->load->model('CategorieModele');
        $data['liste'] = $this->CategorieModele->getAllCategorie();
        $this->templateBack('accueilBack', $data);
    }

    public function insertCategorie()
    {
    	$this->load->helper('assets_helper');
    	$this->load->model('CategorieModele');
        $categorie=$this->input->post("catego");
        $this ->CategorieModele-> ajoutCategorie($categorie); 
        redirect(site_url('Categorie/listeCategorie'));
    }

    public function updateCategorie()
    {
    	$this->load->helper('assets_helper');
    	$this->load->model('CategorieModele');
        $categorie=$this->input->post("catego");
        $id=$this->input->post("id");
        $this ->CategorieModele-> modifCategorie($categorie,$id); 
        redirect(site_url('Categorie/listeCategorie'));
    }

	
}
