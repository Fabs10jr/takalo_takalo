<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connexion extends CI_Controller {

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

	public function index()
	{
		$this->load->helper('url');
        $this->load->helper('assets_helper');
        $this->load->view('loginUser',array());
	}	

    public function loginUser() {
        $this->load->helper('assets_helper');
        $this->load->model('UtilisateurModele');
    	$this->load->model('ObjetModele');
    	$this->load->model('CategorieModele');
        $mail= $this->input->post('mail');
        $mdp= $this->input->post('mdp');
        $donnee['admin']= $this->UtilisateurModele->logUtilisateur($mail,$mdp);
        $numRows= $this->UtilisateurModele->loginUtilisateur($mail,$mdp);
        
        if($numRows>0){
            $this->session->set_userdata('id',$donnee['admin'][0]['idUtilisateur']);  
            $idu=$this->session->userdata('id');
            if ($donnee['admin'][0]['login']=='admin') {
            	$data['liste'] = $this->CategorieModele->getAllCategorie();
            	$this->templateBack('accueilBack',$data);
            }else{
	            $data['liste'] = $this->ObjetModele->getOtherObjet($idu);
	            $this->templateFront('accueil',$data);
        	}
            
        }else{

            $mes['erreur']="Veuillez vérifier votre login ou votre mot de passe !";
            $this->load->view('loginUser',$mes);
        }
       
    }

    public function logout(){
        $this->load->helper('assets_helper');
		$this->session->sess_destroy();
		$this->load->view('loginUser',array());
	}

	public function pageInscription()
	{
		$this->load->helper('url');
        $this->load->helper('assets_helper');
        $this->load->view('inscription',array());
	}	

	public function inscription()
    {
        $this->load->helper('url');
        $this->load->helper('assets_helper');
        $this->load->model('UtilisateurModele');
        $login= $this->input->post('mail');
        $mdp= $this->input->post('mdp');
        $this->UtilisateurModele->ajoutUtilisateur($login,$mdp);
        redirect(site_url('Connexion/loginUser'));
    }  

	
}
