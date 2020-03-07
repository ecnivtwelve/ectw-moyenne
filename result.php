<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ectw/moyenne</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600&display=swap" rel="stylesheet">  
    <style>
        body {
            font-family: Nunito;
            background: linear-gradient(270deg, #7f632a, #7f2a7c, #2a607f);
            background-size: 600% 600%;

            -webkit-animation: GradientBackground 6s ease infinite;
            -moz-animation: GradientBackground 6s ease infinite;
            animation: GradientBackground 6s ease infinite;
        }
        @-webkit-keyframes GradientBackground {
            0%{background-position:0% 50%}
            50%{background-position:100% 50%}
            100%{background-position:0% 50%}
        }
        @-moz-keyframes GradientBackground {
            0%{background-position:0% 50%}
            50%{background-position:100% 50%}
            100%{background-position:0% 50%}
        }
        @keyframes GradientBackground {
            0%{background-position:0% 50%}
            50%{background-position:100% 50%}
            100%{background-position:0% 50%}
        }
        #head {
            height:100vh;
            width:100vw;
            position:absolute;
            top:30%;
            left:0;
            margin-left:60px;
        }
        #head h1 {
            color:#ffffff;
            font-size:2.5em;
            font-weight:600;
        }
        #head h3 {
            color:#ffffff;
            opacity:65%;
            font-size:1.5em;
            font-weight:300;
            margin-top:-15px;
        }
        #btnr {
            border-style:none;
            padding:8px;
            padding-left:20px;
            padding-right:20px;
            border-radius:5px;
            font-family:Nunito;
            font-size:1em;
            font-weight:bold;
            transition:0.25s;
            background-color:#0070ff;
            color:white;
        }
        #btnr:hover {
            background-color:#222222;
            color:white;
            opacity:100%;
        }
    </style>
</head>
<body>
    <div id="head">
        <h1>Votre moyenne est de <?php echo $_GET['moy']; ?>/20 !</h1>
        <h3>
        
        <?php
        
            if($_GET['moy'] < 0) {
                echo "Ok, donc toi, ta moyenne est négative xD";
            }
            elseif($_GET['moy'] < 1) {
                echo "Tu travailles, parfois ? Ou t'en fais exprès ?";
            }
            elseif($_GET['moy'] < 2) {
                echo "C'est déja mieux que rien ¯\_(ツ)_/¯";
            }
            elseif($_GET['moy'] < 3) {
                echo "Y'a du potentiel.";
            }
            elseif($_GET['moy'] < 4) {
                echo "Bon, arrête, c'est plus drôle en fait.";
            }
            elseif($_GET['moy'] < 5) {
                echo "ok boomer";
            }
            elseif($_GET['moy'] < 6) {
                echo "Tu as la demi-moyenne au moins ¯\_(ツ)_/¯";
            }
            elseif($_GET['moy'] < 7) {
                echo "666 ahah t'as peur";
            }
            elseif($_GET['moy'] < 8) {
                echo "7, c'est acceptable, n'est ce pas ?";
            }
            elseif($_GET['moy'] < 9) {
                echo "Je vais faire un émoji avec ta moyenne : 8-)";
            }
            elseif($_GET['moy'] < 10) {
                echo "Tu as preque la moyenne.";
            }
            elseif($_GET['moy'] < 11) {
                echo "10, c'est mieux que 9.";
            }
            elseif($_GET['moy'] < 12) {
                echo "Après tout, 11, c'est pas nul.";
            }
            elseif($_GET['moy'] < 13) {
                echo "Accroche toi, tu peux tenter mieux ;)";
            }
            elseif($_GET['moy'] < 14) {
                echo "Presque 14, pour moi 14 c'est une bonne note.";
            }
            elseif($_GET['moy'] < 15) {
                echo "14, c'est une bonne note.";
            }
            elseif($_GET['moy'] < 16) {
                echo "15, c'est bien. Mais 16, c'est mieux.";
            }
            elseif($_GET['moy'] < 17) {
                echo "16, c'est pas mal du tout";
            }
            elseif($_GET['moy'] < 18) {
                echo "17 c'est très bien.";
            }
            elseif($_GET['moy'] < 19) {
                echo "18, c'est excellent !";
            }
            elseif($_GET['moy'] < 20) {
                echo "Félicitations.";
            }
            elseif($_GET['moy'] < 21) {
                echo "20/20 de moyenne ? T'as triché.";
            }
            elseif($_GET['moy'] >= 21) {
                echo "Au dessus de 20 ? Et puis quoi encore ?";
            }
            else {
                echo "Oui, mais " . $_GET['moy'] . ", ce n'est pas une note, ça.";
            }

        ?>
        
        </h3>
        <br>
        <a style="text-decoration:none;" href="index.php" id="btnr">Recommencer</a>
    </div>
</body>
</html>