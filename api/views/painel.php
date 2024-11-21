<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

     {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    html, body {
        width: 100%;
        height: 100%;
    }

    #painel .conteudos
    {
        width: 100%;
        height: 100%;
        overflow-x: hidden;
        overflow-y: auto;
    }
    

    #painel
    {
        width: 100%;
        height: 100%;
        background: #e1e1e1;
        display: flex;
    }

    #painel nav
    {
        width: 12rem;
        height: 100%;
        background: #2e2e2e;
        color: #e1e1e1;
    }

    #painel nav h1 {
        padding: 0.8rem 0;;
        text-align: center;
    }

    #painel nav a {
        color: #e1e1e1;
        padding: 1.2rem;
        display: block;
        text-decoration: none;
    }

    #painel nav a:hover {
        color:#f1f1f1;
        text-shadow: 0 0 5px rgba(255,255,255,0.5);
        transition: all 0.5s ease-in-out;
        background: rgba(255,255,255,0.05);
    }

    #painel nav a i {
        margin-right:1rem;
        transform: scale(1.5);
        color: #f1f1f1;
    }

</style>
</head>
<body>
    



<div id="painel">

    <nav>
        <h1>Logo</h1>

        <?php 

        $links = array(

            " <i class=\"fa-solid fa-user-tie\"></i> Usuários" => "?pagina=sistema&tela=usuarios",
            " <i class=\"fa-solid fa-comment\"></i> F.A.Q"=>"?pagina=sistema&tela=faq"
        );

        foreach( $links as $item => $valor ){
            echo '<a href="' . $valor . '"> ' . $item . '</a>';
        }
        
        ?>

        

    </nav>

    <section>

        <h1>Conteúdos</h1>

    </section>

</div>

</body>
</html>