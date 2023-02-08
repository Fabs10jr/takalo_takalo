<?php 
if (! defined('BASEPATH')) exit ('No direct script access allowed');
class ObjetModele extends CI_Model
{
    
    public function getAllObjet(){
        $sql ="select * from objet ";
        $sql=sprintf($sql);
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getOtherObjet($idU){
        $sql ="select *,c.categorie from objet  o join categorie c on o.idCategorie=c.idCategorie where idUtilisateur!=%s";
        $sql=sprintf($sql,$this->db->escape($idU));
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getObjetUser($id){
        $sql ="select *,c.categorie from objet o join categorie c on o.idCategorie=c.idCategorie where idUtilisateur=%s order by idObjet desc";
        $sql=sprintf($sql,$this->db->escape($id));
        $query = $this->db->query($sql);
        return $query->result_array();
    }    

    public function getDetails($id){
        $sql ="select *,c.categorie from objet o join categorie c on o.idCategorie=c.idCategorie where idObjet=%s";
        $sql=sprintf($sql,$this->db->escape($id));
        $query = $this->db->query($sql);
        return $query->result_array();
    }    

    public function ajoutObjet($titre,$couv,$descri,$catego,$prix,$idu){
        $req="INSERT INTO objet values (null,%s,%s,%s,%s,%s,%s)";
        $sql = sprintf($req,$this->db->escape($titre),$this->db->escape($couv),$this->db->escape($descri),$this->db->escape($catego),$this->db->escape($prix),$this->db->escape($idu));
        $this->db->query($sql);
    }

    public function changerProprietaire($idu,$ido){
        $req="UPDATE objet set idUtilisateur=%s where idObjet=%s ";
        $sql = sprintf($req,$this->db->escape($idu),$this->db->escape($ido));
        $this->db->query($sql);
    }

    public function updateObjet($titre,$couverture,$descri,$catego,$prix,$ido){
        $req="UPDATE objet set titre=%s, couverture=%s, description=%s, idCategorie=%s, prix=%s where idObjet=%s ";
        $sql = sprintf($req,$this->db->escape($titre),$this->db->escape($couverture),$this->db->escape($descri),$this->db->escape($catego),$this->db->escape($prix),$this->db->escape($ido));
        $this->db->query($sql);
    }

    public function rechercher($titre, $idc){
        $sql ="select *,c.categorie from objet o join categorie c on o.idCategorie=c.idCategorie where titre=%s and c.idCategorie=%s";
        $sql=sprintf($sql,$this->db->escape($titre),$this->db->escape($idc));
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    
}