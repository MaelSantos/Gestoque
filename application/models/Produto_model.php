<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto_model extends CI_Model {

    public $id;
    public $nome;
    public $preco;
    public $quantidade;

    public function listar() {
        $query = $this->db->get("produtos");

        return $query->result();
    }
    public function editar($nome=NULL, $preco=NULL, $quantidade=NULL, $id=NULL)
    {
        if ($nome != NULL && $preco != NULL && $quantidade != NULL && $id != NULL){
            
            $dados['nome'] = $nome;
            $dados['preco'] = $preco;
            $dados['quantidade'] = $quantidade;

            $this->db->update('produtos',$dados, array('idProduto'=>$id));
        }
    }

    public function remover($id=NULL)
    {
        $this->db->delete('produtos', array('idProduto'=>$id));
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