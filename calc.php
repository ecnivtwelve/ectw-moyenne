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
        }
        #head {
            background-color:white;
            height:100vh;
            width:100vw;
            position:absolute;
            top:17%;
            left:0;
            margin-left:60px;
        }
        #head h1 {
            color:#222222;
            font-size:2.5em;
            font-weight:600;
        }
        #head h3 {
            color:#222222;
            font-size:1.5em;
            font-weight:300;
            margin-top:-15px;
        }
        form {
            margin-left:-2px;
        }
        #brr {
            border-style:none;
            height:35px;
            padding-left:15px;
            border-radius:5px;
            font-family:Nunito;
            margin-left:5px;
            border: 1px #888888 solid;
            color:#222222;
        }
        #btnr {
            border-style:none;
            padding:8px;
            padding-left:20px;
            padding-right:20px;
            border-radius:5px;
            font-family:Nunito;
            margin-left:5px;
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
        #vmo {
            font-size:2em;
            color:white;
        }
        #vmot {
            font-size:1.5em;
            color:white;
            margin-top:-25px;
            opacity:50%
        }
    </style>
</head>
<body>
    <div id="head">
        <h1>Entrez vos notes.</h1>
        <h3>Utilisez un point au lieu de la virgule ;)</h3>
        <br>
        <form method="POST" action="">
            <input id="brr" type="text" name="Note1">
            <input id="brr" type="text" name="Note2">
            <input id="brr" type="text" name="Note3">
            <input id="brr" type="text" name="Note4">
            <input id="brr" type="text" name="Note5">
            <br><div style="margin-top:10px"></div>
            <input id="brr" type="text" name="Note6">
            <input id="brr" type="text" name="Note7">
            <input id="brr" type="text" name="Note8">
            <input id="brr" type="text" name="Note9">
            <input id="brr" type="text" name="Note10">
            <br><div style="margin-top:10px"></div>
            <input id="brr" type="text" name="Note11">
            <input id="brr" type="text" name="Note12">
            <input id="brr" type="text" name="Note13">
            <input id="brr" type="text" name="Note14">
            <input id="brr" type="text" name="Note15">
            <br><br>
            <input id="btnr" type="submit" value="Calculer">

            <br><br>


            <?php

error_reporting(0);
ini_set('display_errors', 0);                              

$notes = array($_POST['Note1'],$_POST['Note2'],$_POST['Note3'],$_POST['Note4'],$_POST['Note5'],$_POST['Note6'],$_POST['Note7'],$_POST['Note8'],$_POST['Note9'],$_POST['Note10'],$_POST['Note11'],$_POST['Note12'],$_POST['Note13'],$_POST['Note14'],$_POST['Note15']);
                $valnul = 0;

                if($_POST['Note1'] == NULL) {
                    $valnul++;
                }
                if($_POST['Note2'] == NULL) {
                    $valnul++;
                }
                if($_POST['Note3'] == NULL) {
                    $valnul++;
                }
                if($_POST['Note4'] == NULL) {
                    $valnul++;
                }
                if($_POST['Note5'] == NULL) {
                    $valnul++;
                }
                if($_POST['Note6'] == NULL) {
                    $valnul++;
                }
                if($_POST['Note7'] == NULL) {
                    $valnul++;
                }
                if($_POST['Note8'] == NULL) {
                    $valnul++;
                }
                if($_POST['Note9'] == NULL) {
                    $valnul++;
                }
                if($_POST['Note10'] == NULL) {
                    $valnul++;
                }
                if($_POST['Note11'] == NULL) {
                    $valnul++;
                }
                if($_POST['Note12'] == NULL) {
                    $valnul++;
                }
                if($_POST['Note13'] == NULL) {
                    $valnul++;
                }
                if($_POST['Note14'] == NULL) {
                    $valnul++;
                }
                if($_POST['Note15'] == NULL) {
                    $valnul++;
                }

                $somme_notes = 0;
                $i = 0;
                foreach($notes as $cle=>$valeur)
                {
                $i++; // On incrémente la variable qui nous dit combien de tour on fait
                $somme_notes+=$valeur;
                // équivaut a $somme_notes = $somme_notes + $valeur
                }
                
                $m = $i - $valnul;
                $moyenne = $somme_notes / $m;

                if($_POST['Note1'] !== NULL) {
                    echo '<meta http-equiv="refresh" content="0.1;URL=result.php?moy=' . $moyenne . '">';
                }
                
            ?>


        </form>
    </div>
</body>
</html>