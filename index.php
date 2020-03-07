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
            top:25%;
            left:0;
            margin-left:60px;
        }
        #head h1 {
            color:#222222;
            font-size:2.5em;
            font-weight:600;
        }
        #head h3 {
            color:#333333;
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
        <h1>Calculez une moyenne de notes<br>en un claquement de doigts !</h1>
        <h3>par Vince Linise | Version 2.0.1</h3>
        <br>
        <a style="text-decoration:none;" href="calc.php" id="btnr">Commencer</a>
    </div>
</body>
</html>