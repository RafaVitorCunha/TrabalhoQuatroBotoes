<?php
    require_once("modelo/Link.php");

    function desenhaBotao($titulo, $arrayLinks) {
        echo '<div class="dropdown">';
        echo "<button class='dropbtn'>$titulo</button>";
        echo '<div class="dropText">';
        foreach ($arrayLinks as $link) {
            echo "<span><img src='" . $link->getLinkImg() . "' width='20' height='28'>" . $link->getInfo() . "</span>";
        }
        echo '</div>';
        echo '</div>';
    }

    $o1 = new Link();
    $o1->setLinkImg('https://images.seeklogo.com/logo-png/23/1/psicologia-logo-png_seeklogo-238746.png')->setInfo('Psicologia');
    $o2 = new Link();
    $o2->setLinkImg('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxcJDfjc_aLlIUTE9E3P7xE0-h2kg97kqc5g&s')->setInfo('História');
    $o3 = new Link();
    $o3->setLinkImg('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPCVd__AHsmCgP4Z4rQu2pbtkZeocqO5q3Lg&s')->setInfo('Pedagogia');
    $humanas = array($o1, $o2, $o3);

    $o4 = new Link();
    $o4->setLinkImg('https://www.ifmg.edu.br/governadorvaladares/cursos/superior/informacoes-do-curso-bacharelado-em-engenharia-civil/logo-engenharia-civil/@@images/d4bc88da-6237-4432-a85c-fd00e8931097.jpeg')->setInfo('Engenharia');
    $o5 = new Link();
    $o5->setLinkImg('https://static.vecteezy.com/ti/vetor-gratis/p1/660676-logo-de-cursos-de-informatica-vetor.jpg')->setInfo('Informática');
    $o6 = new Link();
    $o6->setLinkImg('https://images.educamaisbrasil.com.br/content/banco_de_imagens/eb/D/logo-de-ciencias-contabeis.jpg')->setInfo('Ciências Contábeis');
    $exatas = array($o4, $o5, $o6);

    $o7 = new Link();
    $o7->setLinkImg('https://ifpr.edu.br/jacarezinho/wp-content/uploads/sites/16/2022/06/teatro.png')->setInfo('Artes Cênicas');
    $o8 = new Link();
    $o8->setLinkImg('https://wordpress-cms-revista-prod-assets.quero.space/legacy_posts/post_images/17831/68b7bb3a72826856b4c293159f8dc1e380c9d4ed.jpg?1554751568')->setInfo('Letras');
    $o9 = new Link();
    $o9->setLinkImg('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcST9Cc6IVaZCxwuRhgLRLhoePVhJd3zAlbnWw&s')->setInfo('Cinema');
    $linguist = array($o7, $o8, $o9);

    $o10 = new Link();
    $o10->setLinkImg('https://inisa.ufms.br/files/2017/08/enfe-300x224.png')->setInfo('Enfermagem');
    $o11 = new Link();
    $o11->setLinkImg('https://www.cfn.org.br/wp-content/uploads/2015/05/Nutricao.jpg')->setInfo('Nutrição');
    $o12 = new Link();
    $o12->setLinkImg('https://w7.pngwing.com/pngs/157/767/png-transparent-physician-medicine-logo-symbol-miscellaneous-fictional-character-desktop-wallpaper-thumbnail.png')->setInfo('Medicina');
    $saude = array($o10, $o11, $o12);

    echo '<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Botões com imagens</title>
        <link rel="stylesheet" href="css_atividade/botao_imagem.css">
    </head>
    <body>';

    desenhaBotao("Ciências Humanas", $humanas);
    desenhaBotao("Ciências Exatas", $exatas);
    desenhaBotao("Linguagens", $linguist);
    desenhaBotao("Área da Saúde", $saude);

    echo '</body></html>';
