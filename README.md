##Simple File Manager
Sistema feito em PHP para gerenciar arquivos.

###Estrutura do Sistema
-->Actions
Nesse diretório é possível encontrar todas as ações de formulários(actions) além de qualquer outra ação como inserir, deletar, alterar. Essas actions estão intimamente ligadas com o banco de dados, podemos dizer que todas as alterações no banco passam por essas actions.

-->Confirma
Podem ser encontradas ações que necessitam de uma aprovação do usuário, como deletar um arquivo ou uma categoria. Nesse caso, para o usuário poder deletar algo, ele terá que confirmar através de um alert, confirmando irá passar para os scritps desse diretório.

-->Dados
Alguns arquivos JSON que servem como exemplo.

-->Dao
Implementacao do Modelo DAO. Mas ainda não está totalmente sendo utilizado. Somente para o usuario.

-->Formularios
Alguns formulários. Formulário de Login por exemplo.

-->Images
Imagens que são utilizadas na aplicação.

-->Includes
Includes como footer, header, content, saudação. A ideia é colocar includes pequenos. Se você quiser colocar formulário ou páginas não deve ser aqui, deve ser em outro diretório.

-->Models
Modelos que podem ser persistidos. Só estamos usando o usuário.

-->Paginas
Includes de páginas. Na pagina central da aplicação é chamada as páginas que se encontram nesse diretório. Portanto, qualquer página que você queira colocar, deve ser colocado nesse diretório, por exemplo, buscar, perfil, editar...etc.

-->Seg
Scripts referentes a autenticação. Podemos visualizar aqui dois nívels de autenticação: usuario e admin. Nessa aplicação estamos utilizando apenas usuario. Pode ser encontrado aqui também o script de fazer logoff.

-->Testes
Scripts de testes da aplicação. Apenas para testar o acesso ao banco. Etc.

-->Uploads
Ficam todos os arquivos que são feito o upload.

-->Webservice
Arquivos relacionados ao webservice. Há também alguns exemplos.


####Configurando o Banco de Dados
Há um diretório chamado banco, dentro desse diretório você poderá encontrar um arquivo chamado conecta.php onde é possível colocar as credenciais do banco de dados.
Há um diretório chamado sql, dentro desse diretório você pode encontrar um arquivo chamado database.sql onde há os comandos para criação das tabelas.

