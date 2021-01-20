<?php
class Search_model extends CI_Model
{
	public function buscar($busca)
	{
		if(empty($busca))
		{
			return array();
		}
		/* Retornando apenas as ocorrências registradas pelo usuário */
		$this->db->where("id_usuario", $_SESSION["logged_user"]["id_usuario"]);

		$busca = $this->input->post('busca');
		$this->db->like('nomeContato', $busca);
		
        $this->db->select('tb_usuarioscontatos.id_contato as id_contato,
        tb_usuarioscontatos.nomeContato as nomeContato');
                $this->db->order_by("id_contato", "DESC");
                return $this->db->get("tb_usuarioscontatos")->result_array();
	}
}
