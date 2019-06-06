        <div class="container">
            <div class="row">
                <div class="col col-md-12">
                    <h3>Autenticação</h3>
                    <form action="<?=site_url('produto/cadastrar');?>" method="POST">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome" aria-describedby="nomeProduto" placeholder="Nome">
                            <!-- <small id="nomeProduto" class="form-text text-muted">O nome de usuário é o que identifica você =).</small> -->
                        </div>
                        <div class="form-group">
                            <label for="preco">Nome</label>
                            <input type="text" name="preco" class="form-control" id="preco" aria-describedby="precoProduto" placeholder="Preço">
                            <!-- <small id="nomeProduto" class="form-text text-muted">O nome de usuário é o que identifica você =).</small> -->
                        </div>
                        <div class="form-group">
                            <label for="quantidade">Nome</label>
                            <input type="text" name="quantidade" class="form-control" id="quantidade" aria-describedby="quantidadeProduto" placeholder="Quantidade">
                            <!-- <small id="nomeProduto" class="form-text text-muted">O nome de usuário é o que identifica você =).</small> -->
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                </div>
            </div>
        </div>