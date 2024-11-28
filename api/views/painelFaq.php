<h1>perguntas e respostas - F.A.Q</h1>
<!-- 
    Verbos do http - formas de envio de dados 
       - GET - envia através da URL
       - POST - envia através do cabeçalho
       - PUT - 
       - DELETE -
    
       
    caminho relativo

       /pasta/arquivo.ext
       ./pasta/arquivo.ext
       ../pasta/arquivo.ext

-->
<form action="./controllers/painelController.php" method="POST">

    <h2>Cadastro de Perguntas e respostas</h2>

    <div>
        <label>Pergunta:</label>
        <input type="text" placeholder="Digite a pergunta" id="pergunta" name="pergunta">
    </div>

    <div>
        <label>Resposta:</label>
        <textarea name="resposta" id="resposta" placeholder="Digite a resposta"></textarea>
    </div>

    <input type="submit" value="Cadastrar Pergunta" id="cadastrar" name="cadastrar">

</form>

