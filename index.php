<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require 'Entidades/Usuario.class.php';
            require 'Entidades/Alimento.class.php';
            require 'Entidades/Refeicao.class.php';
            
            $usr = new Usuario("Rafael", "mail@mail.com", "senha");
            $usr->dadosMedicos->HGT = 200;
            $usr->dadosMedicos->fatorCorrecao = 39;
            $usr->dadosMedicos->meta = 120;
            $usr->medico->nome = "João";
            $usr->medico->email= "medico@mail.com";
            
            $alim = new Alimento("Arroz", "30", "Colher");
            
            $refeicao = new Refeicao($usr, $alim, "02/10/2014", "21:09");
            
            echo $usr.'<br><br>';
            echo $refeicao;
            
        ?>
    </body>
</html>
