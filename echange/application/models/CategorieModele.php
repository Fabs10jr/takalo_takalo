<?php 
if (! defined('BASEPATH')) exit ('No direct script access allowed');
class CategorieModele extends CI_Model
{
    
    public function getAllCategorie(){
        $sql ="select * from categorie ";
        $sql=sprintf($sql);
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function ajoutCategorie($catego){
        $req="INSERT INTO categorie values (null,%s)";
        $sql = sprintf($req,$this->db->escape($catego));
        $this->db->query($sql);
    }
    
    public function modifCategorie($catego,$id){
        $req="UPDATE categorie set categorie=%s where idCategorie=%s ";
        $sql = sprintf($req,$this->db->escape($catego),$this->db->escape($id));
        $this->db->query($sql);
    }
    
}