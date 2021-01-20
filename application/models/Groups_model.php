<?php

class Groups_model extends CI_model
{
        public function mygroups_index()
        {
                $this->db->where("id_usuario", $_SESSION["logged_user"]["id_usuario"]);
                $this->db->select('tb_grupos.id_grupo as id_grupo,
        tb_grupos.nomeGrupo as nomeGrupo,
        tb_grupos.categoriaGrupo as categoriaGrupo');
                $this->db->order_by("id_grupo", "DESC");
                return $this->db->get("tb_grupos")->result_array();
        }

        public function submit($dados)
        {
                $this->db->set('nomeGrupo', $dados['nomeGrupo']);
                $this->db->set('categoriaGrupo', $dados['categoriaGrupo']);
                $this->db->set('id_usuario', $dados['user_id']);
                $this->db->insert("tb_grupos");
        }

        public function show($id_grupo)
        {
                $this->db->select("tb_grupos.id_grupo, tb_grupos.nomeContato, tb_grupos.empresaContato, tb_grupos.cargoContato,
                tb_grupos.celularContato, tb_grupos.emailContato");
                $this->db->where('id_usuario', $this->session->userdata('usuario_id'));
                return $this->db->get_where("tb_grupos", array(
                        "id_grupo" => $id_grupo
                ))->row_array();
        }

        public function update($id_grupo, $dados)
        {
                $this->db->set("nomeContato", $dados["nomeContato"]);
                $this->db->set("emailContato", $dados["emailContato"]);
                $this->db->set("celularContato", $dados["celularContato"]);
                $this->db->set("empresaContato", $dados["empresaContato"]);
                $this->db->set("cargoContato", $dados["cargoContato"]);
                $this->db->where("id_grupo", $id_grupo);
                return $this->db->update("tb_grupos", $dados);
        }

        public function destroy($id_grupo)
        {
                $this->db->where('id_grupo', $id_grupo);
                $this->db->where("id_usuario", $this->session->userdata('usuario_id'));
                $this->db->delete('tb_grupos');
        }

        public function submitGrupoContatos($dados, $id_grupo){
                $this->db->set('id_contato', $dados['tipopessoa']);
                $this->db->set('id_grupo', $id_grupo);
                $this->db->set('id_usuario', $dados['user_id']);
                $this->db->insert('tb_grupocontatos');

        }
}
