<?php 
if (! defined('BASEPATH')) exit ('No direct script access allowed');
class UtilisateurModele extends CI_Model
{
    
    public function ajoutUtilisateur($mail,$mdp){
       
        $req="INSERT INTO utilisateur values (null,%s,%s)";
        $sql = sprintf($req,$this->db->escape($mail),$this->db->escape($mdp));
        $this->db->query($sql);
    }

    public function logUtilisateur($mail,$mdp){
       
        $sql = "SELECT * FROM utilisateur where login='%s' and motDePasse='%s'";
        $sql=sprintf($sql,$mail,$mdp);
        $query = $this->db->query($sql);
        $utilisateur = array();
        foreach ($query->result_array() as $key) {
            $utilisateur[] = $key;
        }
        return $utilisateur;
    }

    public function loginUtilisateur($mail,$mdp){
       
        $sql = "SELECT * FROM utilisateur where login='%s' and motDePasse='%s'";
        $sql=sprintf($sql,$mail,$mdp);
        $query=$this->db->query($sql);
        $numRows=$query->num_rows($query);
        return $numRows;
    }
    
    public function nbrUser(){
       
        $sql = "SELECT count(*) as user FROM utilisateur where login!='admin'";
        $sql=sprintf($sql);
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    
}