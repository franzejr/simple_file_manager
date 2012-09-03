//Funcoes javascript que chamam um script PHP para poder deletar um determinado objeto do Banco.


function deletarCategoria(id_cat, nome) {
	if (confirm("Tem certeza que deseja apagar " + nome + " ?")) {
		location.href="confirma/deleta_cat.php?id_cat=" + id_cat;
	}
}

function deletarArquivo(id_arq, nome) {
	if (confirm("Tem certeza que deseja apagar " + nome + " ?")) {
		location.href="confirma/deleta_arq.php?id_arq=" + id_arq;
	}
}