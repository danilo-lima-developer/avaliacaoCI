<?php

class Contacts_model extends CI_model
{
        public function mycontacts_index()
        {
                $this->db->where("id_usuario", $_SESSION["logged_user"]["id_usuario"]);
                $this->db->select('tb_usuarioscontatos.id_contato as id_contato,
        tb_usuarioscontatos.nomeContato as nomeContato,
        tb_usuarioscontatos.empresaContato as empresaContato,
        tb_usuarioscontatos.cargoContato as cargoContato,
        tb_usuarioscontatos.celularContato as celularContato,
        tb_usuarioscontatos.emailContato as emailContato,
        tb_usuarioscontatos.dataRegistro as dataRegistro');
                $this->db->order_by("id_contato", "DESC");
                return $this->db->get("tb_usuarioscontatos")->result_array();
        }

        public function submit($dados)
        {
                $this->db->set('nomeContato', $dados['nomeContato']);
                $this->db->set('empresaContato', $dados['empresaContato']);
                $this->db->set('cargoContato', $dados['cargoContato']);
                $this->db->set('celularContato', $dados['celularContato']);
                $this->db->set('emailContato', $dados['emailContato']);
                $this->db->set('id_usuario', $dados['user_id']);
                $this->db->insert("tb_usuarioscontatos");
        }

        public function show($id_contato)
        {
                $this->db->select("tb_usuarioscontatos.id_contato, tb_usuarioscontatos.nomeContato, tb_usuarioscontatos.empresaContato, tb_usuarioscontatos.cargoContato,
                tb_usuarioscontatos.celularContato, tb_usuarioscontatos.emailContato");
                $this->db->where('id_usuario', $this->session->userdata('usuario_id'));
                return $this->db->get_where("tb_usuarioscontatos", array(
                        "id_contato" => $id_contato
                ))->row_array();
        }

        public function update($id_contato, $dados)
        {
                $this->db->set("nomeContato", $dados["nomeContato"]);
                $this->db->set("emailContato", $dados["emailContato"]);
                $this->db->set("celularContato", $dados["celularContato"]);
                $this->db->set("empresaContato", $dados["empresaContato"]);
                $this->db->set("cargoContato", $dados["cargoContato"]);
                $this->db->where("id_contato", $id_contato);
                return $this->db->update("tb_usuarioscontatos", $dados);
        }

        public function destroy($id_contato)
        {
                $this->db->where('id_contato', $id_contato);
                $this->db->where("id_usuario", $this->session->userdata('usuario_id'));
                $this->db->delete('tb_usuarioscontatos');
        }

}
