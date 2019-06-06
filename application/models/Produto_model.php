<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produto_model extends CI_Model
{

    public $idProduto;
    public $nome;
    public $preco;
    public $quantidade;

    public function salvar()
    {
        $this->nome       = $_POST['nome']; // please read the below note
        $this->preco      = $_POST['preco'];
        $this->quantidade = $_POST['quantidade'];

        $this->db->insert('produtos', $this);
    }

    public function listar()
    {
        $query = $this->db->get("produtos");

        return $query->result();
    }
    public function editar($nome = null, $preco = null, $quantidade = null, $id = null)
    {
        if ($nome != null && $preco != null && $quantidade != null && $id != null) {

            $dados['nome']       = $nome;
            $dados['preco']      = $preco;
            $dados['quantidade'] = $quantidade;

            $this->db->update('produtos', $dados, array('idProduto' => $id));
        }
    }

    public function remover($id = null)
    {
        $this->db->delete('produtos', array('idProduto' => $id));
    }

    // public function get_last_ten_entries()
    // {
    //         $query = $this->db->get('entries', 10);
    //         return $query->result();
    // }

    // public function insert_entry()
    // {
    //         $this->title    = $_POST['title']; // please read the below note
    //         $this->content  = $_POST['content'];
    //         $this->date     = time();

    //         $this->db->insert('entries', $this);
    // }

    // public function update_entry()
    // {
    //         $this->title    = $_POST['title'];
    //         $this->content  = $_POST['content'];
    //         $this->date     = time();

    //         $this->db->update('entries', $this, array('id' => $_POST['id']));
    // }

}
