<?php
class Usuarios_model extends CI_Model{
    public function verificar($nombre="",$password=""){
        $this->db->select("id_usuario");
        $this->db->where("nombre",$nombre); 
        $this->db->where("password",$password);
        $this->db->limit(1);
        
        $res=$this->db->get("usuarios");
        if($res->num_rows()){
             $temp=$res->row_array();
             $this->actualiza_ult_login($temp["id_usuario"]);
 
             return $temp["id_usuario"];
        }else{
             return false;
        }
     }
     
     public function verif_nombre($nombre=""){
        $this->db->select("id_usuario");
        $this->db->where("nombre",$nombre); 
        $this->db->limit(1);
        $res=$this->db->get("usuarios");
        if($res->num_rows()){
             $temp=$res->row_array();
             $this->actualiza_ult_login($temp["id_usuario"]);
 
             return $temp["id_usuario"];
        }else{
             return false;
        }
     }
     public function verif_email($email=""){
        $this->db->select("id_usuario");
        $this->db->where("email",$email); 
        $this->db->limit(1);
        $res=$this->db->get("usuarios");
        if($res->num_rows()){
             $temp=$res->row_array();
             $this->actualiza_ult_login($temp["id_usuario"]);
 
             return $temp["id_usuario"];
        }else{
             return false;
        }
     }

     public function obtener($id_usuario=""){
         $this->db->where("id_usuario",$id_usuario);
         $this->db->limit(1);
         $res=$this->db->get("usuarios");
         return $res->row_array();
     }
 
     public function actualiza_ult_login($id_usuario=""){
         $this->db->where("id_usuario",$id_usuario);
         $this->db->limit(1);
         $this->db->set("ultlogin","NOW()",false);
         $this->db->update("usuarios");
     }
     public function cambiarpass($id_usuario="",$pass=""){
         $this->db->where("id_usuario",$id_usuario);
         $this->db->set("password",$pass,false);
         $this->db->update("usuarios");
     }

     function agregar($nombre="",$password="",$email=""){
        $this->db->set("nombre",$nombre);
        $this->db->set("password",$password);
        $this->db->set("email",$email);
        $this->db->insert("usuarios");
    }

    function listar ()
    {
    $res=$this->db->get("usuarios");
    return $res->result_array();
    }

    function eliminar($id)
    {
     $this->db->where("id_usuario",$id);
     $this->db->limit(1);
     $this->db->delete("usuarios");
     return $this->db->affected_rows();
    }

    function cambiodetema($id="",$tema="")
    {
     $this->db->where("id_usuario",$id);
     $this->db->limit(1);
     $this->db->set("tema",$tema);
     $this->db->update("usuarios");
    }
 }
?>