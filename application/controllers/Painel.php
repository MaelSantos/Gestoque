<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Painel extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        if ($this->session->autenticado) {
            $this->load->view("cabecalho_view",
                array("titulo" => "Painel - Sistema de Estoque")
            );
            $this->load->view("painel_barra_navegacao_view");
            $this->load->view("painel_inicial_view");
            $this->load->view("rodape_view");
        } else {
            redirect(base_url());
        }
    }

    public function produto()
    {
        echo uri_string();
        $url = explode("/", uri_string());

        switch (count($url)) {
            case 0:
                $titulo = "Listar Produtos";
                break;
            default:
                $titulo = "Não é listar";
                break;
        }

        $this->load->view("cabecalho_view",
            array("titulo" => "Painel - ${titulo} - Sistema de Estoque")
        );

        $this->load->model("produto_model");
        $produtos = $this->produto_model->listar();

        $this->load->view("painel_barra_navegacao_view");

        $this->load->view("painel_produtos_listar_view",
            array("produtos" => $produtos));

        $this->load->view("rodape_view");
    }

    public function editar()
    {

        $url = explode("/", uri_string());

        $temp = substr($url[4], 2);

        $preco = str_replace(',', '.', $temp);

        $this->load->model("produto_model");
        $this->produto_model->editar($url[3], $preco, $url[5], $url[2]);

        redirect(site_url("painel/produto"));
    }

    public function excluir()
    {
        $url = explode("/", uri_string());

        $this->load->model("produto_model");
        $this->produto_model->remover($url[2]);

        redirect(site_url("painel/produto"));

    }
}
