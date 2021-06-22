<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LokalnaManufaktura - WIP</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Lato&display=swap" rel="stylesheet">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Lato', sans-serif;
        }
        h1,h2,h3{
            /*font-family: 'Anton', sans-serif;*/
        }
        body{
            background: url(https://lokalnamanufaktura.pl/wp-content/uploads/2021/02/Make-homemade-jam-and-jelly-1.jpg) center center no-repeat;
            background-size: cover;
            background-attachment:fixed;
        }
        .calisia-wip-container{
            width: 100%;
            min-height: 100vh;
            
            display: flex;
            align-items:center;
            text-align: center;

            background: #00000091;
            color: white;
            padding:10px;
        }
        .calisia-wip-panel{
            width:100%;
        }
        .logo{
            width:150px;
            height: auto;
            margin-bottom: 20px;
            -webkit-box-shadow: 4px 4px 17px 0px rgba(50, 50, 50, 0.45);
            -moz-box-shadow:    4px 4px 17px 0px rgba(50, 50, 50, 0.45);
            box-shadow:         4px 4px 17px 0px rgba(50, 50, 50, 0.45);
        }
        .calisia-wip-panel-secondary{
            background:white;
            text-align: center;
            padding:75px 10px 75px 10px;
        }
        .h-prim{
            font-size: 50px;
        }
        .h-sec{
            text-transform: uppercase;
            font-size: 23px;
        }
        .pb-20{
            padding-bottom:20px;
        }
    </style>
</head>
<body>
    <div class="calisia-wip-container">
        <div class="calisia-wip-panel">
            <img class="logo" src="https://lokalnamanufaktura.pl/wp-content/uploads/2021/04/logo_spizarnia_rumianek_apla.png" alt="spizarnia rumianek">
            <h1 class="h-prim">Lokalna Manufaktura</h1>
            <h2 class="h-sec">Wkrótce otwieramy dla Was naszą spiżarnię!</h2>
        </div>
    </div>
    <div class="calisia-wip-panel-secondary">
        <h2 class="pb-20">Bogaty wybór zdrowych produktów</h2>
        <p>
        W Spiżarni Rumianek czekają na Ciebie produkty spożywcze najlepszej jakości, od zaufanych polskich producentów. 
        </p>
    </div>
</body>
</html>
