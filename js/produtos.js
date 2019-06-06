

function editar(btnEditar, url) {

    // let linhaTr = document.querySelector('#tabelaProdutos > tbody > tr');
    let linhaTr = btnEditar.parentNode.parentNode;
    let colunaNome = linhaTr.querySelector('.col_nome');
    let colunaPreco = linhaTr.querySelector('.col_preco');
    let colunaQuantidade = linhaTr.querySelector('.col_quanti');

    if (colunaNome.querySelectorAll('input').length > 0) {
        // terminando de editar
        let nome = colunaNome.querySelector('input').value;
        let preco = colunaPreco.querySelector('input').value;
        let quantidade = colunaQuantidade.querySelector('input').value;

        window.location.replace(url + '/' + nome + '/' + preco + '/' + quantidade);

        colunaNome.innerHTML = nome;
        colunaPreco.innerHTML = preco;
        colunaQuantidade.innerHTML = quantidade;
        btnEditar.innerHTML = "Editar";
    }
    else {
        // iniciando a edição
        btnEditar.innerHTML = "Salvar";
        colunaNome.innerHTML = "<input type='text' value='" + colunaNome.textContent + "'>";
        colunaPreco.innerHTML = "<input type='text' value='" + colunaPreco.textContent + "'>";
        colunaQuantidade.innerHTML = "<input type='text' value='" + colunaQuantidade.textContent + "'>";
    }

}