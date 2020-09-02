# Livraria
  
Site criado para uma livraria.

<p>
  Este site é divido em duas partes:
  
  <ol>
    <li>
      Visualização de todos os livros com as informações. 
    </li>
    <li>
      Painel onde é possível cadastrar, editar, excluir e visualizar os livros cadastrados, assim como seus autores e editoras.
    </li>
  </ol>
  
</p>

<hr/>

<p>

<b>Preview 1</b></br>
<img src = "https://github.com/jean113/livraria/blob/master/preview/preview.gif" />

<b>Preview 2</b></br>
<img src = "https://github.com/jean113/livraria/blob/master/preview/preview2.gif" />

</p>



<hr/>
<p>
<b>Ferramentas utilizadas:</b>
<br/>
<ul>
  <li>Visual Studio Code.</li>
  <li>Linguagem PHP. </li>
  <li>Banco de Dados MySQL.</li>
  <li>Xampp.</li>	
  <li>Slim Framework para as rotas.</li>
  <li>Rain Templates para os templates.</li>
  <li>Composer para gerenciar as dependências.</li>
  <li>DBDesigner4 para modelar o banco de dados.</li>
</ul>

</p>

<hr/>

<p>
<b>Requisitos:</b>
<br/>  
<ul>
  
  <li>Git versão 2.28.0 - para baixar os arquivos para o computador.</li>
  <li>Xampp versão 3.2.4- para instalar Apache, PHP e MySQL.</li>
  <li>MySQL Community 8.0.2</li>
  <li>Visual Studio Code.</li>
  
</ul>
</p>

<hr/>

<p>
<b>Dependências:</b>
<br/>  
<ul>
  
  <li>Rain TPL - versão 3.0.0 ou superior.</li>
  <li>Slim Framework - versão 2.0</li>
  
</ul>
</p>

<hr/>

<p>
<b>Como rodar:</b><br/>
<ol>
  <li>Instalar o Xampp no computador.</li>
      - Durante a instalação, será necessário instalar apenas PHP, Apache e o MySQL.
  <li>Instalar o MySQL Community no computador.</li>
      - Necessário para adicionar componentes como o WorkBench para criar o database e definir root e senha.
  <li>Com o Git instalado, baixar o código-fonte para o computador.</li>
      - comando: git clone "link do repositório" (use o botão verde code neste repositório para ter o link)
  <li>Levantar o serviço do MySQL pelo Xampp ou pelo MySQL Notifier</li>
  <li>Entrar no MySQL através do MySQL WorkBench.</li>
  <li>Executar o script "script_database" em anexo para gerar as tabelas.</li>
      - Lembrando que para funcionar o login do site, é necessário ter um usuário cadastrado com senha em formato MD5 (criado junto com as tabelas).
  <li>Usar o Visual Studio Code para ajustar os dados da conexão com o banco no código-fonte.</li>
      - Isso é feito no arquivo BD.php que fica na pasta src/Model.
  <li>Entrar no Xampp e clicar no botão start na linha Apache para levantar o serviço.</li>
  <li>Entrar em C:\xampp\htdocs e colocar todo o código-fonte.</li>
      - Pode limpar todo o conteúdo da pasta htdocs antes.
  <li>Entrar no seu browser e digitar localhost.</li> 
     
</ol>

</p>


