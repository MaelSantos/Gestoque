<div class="container mt-3">
    <div class="row">
        <div class="col col-md-12  mb-3">
            <h3>Listar Produtos</h3>
        </div>
        <div class="col col-md-12">
        <table class="table table-striped" id="tabelaProdutos">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($produtos as $produto):?>
                <tr>
                    <th scope="row"><?=$produto->idProduto;?></th>
                    <td class="col_nome"><?=$produto->nome;?></td>
                    <td class="col_preco">R$<?=number_format($produto->preco, 2, ",", ".");?></td>
                    <td class="col_quanti"><?=$produto->quantidade;?></td>
                    <td>
                        <a class='btn btn-secondary' id="btnEditar" onclick="editar(this, '<?=site_url('painel/editar/'.$produto->idProduto);?>');" href="javascript:void(0)">Editar</a>
                        <a class='btn btn-secondary' id="btnExcluir" href="<?=site_url('painel/excluir/'.$produto->idProduto);?>">Excluir</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        </div>
    </div>
</div>

<script src="<?=base_url();?>js/produtos.js"></script>