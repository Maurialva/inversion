<?php
class Montos_model extends CI_Model{
    function listar(){
        $this->db->order_by("monto_id","desc");
        return $this->db->get("montos")->result_array();
    }
    function listar_deinv($id_inversion){
        $this->db->where("id_inversion",$id_inversion);
        $this->db->order_by("monto_id","desc");
        return $this->db->get("montos")->result_array();
    }
    function obtener_primero($id_inversion=0){
        $this->db->where("id_inversion",$id_inversion);
        $this->db->order_by("monto_id","asc");
        $this->db->limit(1);
        $res= $this->db->get("montos");
        return $res->row_array();
    }

    function obtener_ultimo($id_inversion=0){
        $this->db->where("id_inversion",$id_inversion);
        $this->db->order_by("monto_id","desc");
        $this->db->limit(1);
        $res=$this->db->get("montos");
        return $res->row_array();
    }

    function calcular_acumulado($id_inversion=0){
        $primero=$this->obtener_primero($id_inversion);
        $ultimo=$this->obtener_ultimo($id_inversion);
        if($primero and $ultimo){
            if($primero["monto_id"]==$ultimo["monto_id"]){
                return 0;
            }else{
                return $ultimo["monto"]-$primero["monto"];
            }
        }else{
            return 0;
        }
    }

    function agregar($monto=0,$id_inversion=0){
        $ultimo=$this->obtener_ultimo($id_inversion);
        if($ultimo){
            $this->db->set("diferencia",$monto-$ultimo["monto"]);
        }else{
            //Es inicio de fondo
            $this->db->set("diferencia",'NULL', false);
        }
        $this->db->set("monto",$monto);
        $this->db->set("id_inversion",$id_inversion);
        $this->db->insert("montos");
    }

    function borrar($monto_id=0){
       
        $this->db->where("monto_id",$monto_id);
        $this->db->limit(1);
        $this->db->delete("montos");
        return $this->db->affected_rows();
    }

    function borrar_inversion($id_inversion=0){
       
        $this->db->where("id_inversion",$id_inversion);
        $this->db->delete("montos");
        return $this->db->affected_rows();
    }
    function obtener_inversion($id_monto=0){
        $this->db->where("monto_id",$id_monto);
        $this->db->limit(1);
        $res= $this->db->get("montos");
        return $res->row_array();
    }

}
?>