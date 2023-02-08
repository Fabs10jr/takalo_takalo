<?php 
if (! defined('BASEPATH')) exit ('No direct script access allowed');
class PropositionModele extends CI_Model
{
    
    // public function getAllProposition($id,$prix,$idU){
    //     $sql ="select * from objet where idObjet!=%s and prix=%s and idUtilisateur!=%s";
    //     $sql=sprintf($sql,$this->db->escape($id),$this->db->escape($prix),$this->db->escape($idU));
    //     $query = $this->db->query($sql);
    //     return $query->result_array();
    // }
    
    public function getProposition($id,$idU){
        $sql ="select * from objet where idObjet!=%s and idUtilisateur=%s";
        $sql=sprintf($sql,$this->db->escape($id),$this->db->escape($idU));
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function historique($ido){
        $sql ="select e.idEchange,e.datyEchange,u1.login as dmd,u2.login as prop, CASE
	    WHEN objet1=%s THEN o1.titre
	    WHEN objet2=%s THEN o2.titre
		END as titre ,
		CASE
	    WHEN objet1=%s THEN o1.couverture
	    WHEN objet2=%s THEN o2.couverture
		END as couverture
		from echanger e 
		join utilisateur u1 on  e.demandeur=u1.idUtilisateur 
		join utilisateur u2 on  e.proprietaire=u2.idUtilisateur 
		join objet o1 on e.objet1=o1.idObjet 
		join objet o2 on e.objet2=o2.idObjet 
		where e.etat=1 and (objet1=%s or objet2=%s)";
        $sql=sprintf($sql,$this->db->escape($ido),$this->db->escape($ido),$this->db->escape($ido),$this->db->escape($ido),$this->db->escape($ido),$this->db->escape($ido));
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getMyDemande($id){
        $sql ="select *, u.login, c.categorie, o.titre, o.prix from echanger e join objet o on e.objet2=o.idObjet join utilisateur u on  e.proprietaire=u.idUtilisateur join categorie c on o.idCategorie=c.idCategorie where demandeur=%s and etat=0";
        $sql=sprintf($sql,$this->db->escape($id));
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function getPropositionByUser($id){
        $sql ="select *, u.login, c.categorie, o.titre, o.prix from echanger e join objet o on e.objet1=o.idObjet join utilisateur u on  e.demandeur=u.idUtilisateur join categorie c on o.idCategorie=c.idCategorie where proprietaire=%s and etat=0";
        $sql=sprintf($sql,$this->db->escape($id));
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function verification($id,$obj){
        $sql ="select * from demande where demandeur=%s and idObjet=%s and etat=0";
        $sql=sprintf($sql,$this->db->escape($id),$this->db->escape($obj));
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function faireDemande($obj1,$dmd,$obj2,$prop){
        $req="INSERT INTO echanger values (null,%s,%s,%s,%s,now(),0,null)";
        $sql = sprintf($req,$this->db->escape($obj1),$this->db->escape($dmd),$this->db->escape($obj2),$this->db->escape($prop));
        $this->db->query($sql);
    }
    
    public function accept($id){
        $req="UPDATE echanger set etat=1, datyEchange=now() where idEchange=%s ";
        $sql = sprintf($req,$this->db->escape($id));
        $this->db->query($sql);
    }
    public function refuser($id){
        $req="UPDATE echanger set etat=2 where idEchange=%s ";
        $sql = sprintf($req,$this->db->escape($id));
        $this->db->query($sql);
    }

    public function nbrEchange(){
       
        $sql = "SELECT count(*) as nbr FROM echanger where etat!=0 and etat!=2";
        $sql=sprintf($sql);
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	

}