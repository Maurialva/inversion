<?php
class Balances_model extends CI_Model{
    
    public function crear($id="",$id_usuario="",$concepto="",$monto="")
    {
        $this->db->set("monto",$monto);
        $this->db->set("id_usuario",$id_usuario);
        $this->db->set("concepto",$concepto);
        $this->db->set("id_inversion",$id);
        $this->db->insert("balances");

    }
    public function actualizar($id="",$monto="")
    {
        $this->db->where("id_inversion",$id);
        $this->db->limit(1);
        $this->db->set("monto",$monto,false);
        $this->db->update("balances");
    }
    public function listar($id="")
    {
        $this->db->where("id_usuario",$id);
        $this->db->order_by("id_balance","desc");
        $res=$this->db->get("balances");
        return $res->result_array();

    }

}
?>