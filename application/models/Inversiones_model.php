<?php
class Inversiones_model extends CI_Model{
    function listar(){
        $this->db->order_by("id_inversion","desc");
        return $this->db->get("inversiones")->result_array();
    }
    function listarxuser($id_usuario=""){
        $this->db->where("id_usuario",$id_usuario);
        $this->db->order_by("id_inversion","desc");
        return $this->db->get("inversiones")->result_array();
    }
    function agregar($concepto="",$id_usuario=""){
        $this->db->set("concepto",$concepto);
        $this->db->set("id_usuario",$id_usuario);
        $this->db->insert("inversiones");
    }

    function borrar($id_inversion=0){
       
        $this->db->where("id_inversion",$id_inversion);
        $this->db->limit(1);
        $this->db->delete("inversiones");
        return $this->db->affected_rows();
    }
    function seleccionar($id_inversion=0){
       
        $this->db->where("id_inversion",$id_inversion);
        $this->db->limit(1);
        return $this->db->get("inversiones")->result_array();
    }

    public function obtener($id_inversion=""){
        $this->db->where("id_inversion",$id_inversion);
        $this->db->limit(1);
        $res=$this->db->get("inversiones");
        return $res->row_array();
    }
    function ultima($id_usuario=0){
       
        $this->db->where("id_usuario",$id_usuario);
        $this->db->order_by("id_inversion","desc");
        $this->db->limit(1);
        $res=$this->db->get("inversiones");
        return $res->row_array();
    }
    function borrarporusuario($id_usuario=0){
       
        $this->db->where("id_usuario",$id_usuario);
        $this->db->delete("inversiones");
        return $this->db->affected_rows();
    }
}
?>