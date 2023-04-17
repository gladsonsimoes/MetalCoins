<?php 
include('../controllers/Acess/protected.php');
include('../controllers/Acess/contaAdmin.php');
// include('../controllers/products/getProducts.php'); <- provavemente terá que criar 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../styles/googlefonts/QuickSand.css" rel="stylesheet">
    <link href="../styles/googlefonts/alata.css" rel="stylesheet">
    <link href="../styles/googlefonts/Irish+Grover.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/produtos.css">
    <link rel="stylesheet" href="../styles/menu.css">

    <title>Metalcoins</title>

    <script src="../js/kitFontAwesome/kitAwesome.js" ></script>
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>
    <div class="Pesquisa">
        <form action="">
            <div class="form-group form-row">
                <input type="text" name="name" class="form-control rounded-pill ex" required autocomplete="off" />
    
            </div>

    <div style="background: #6E3AC2;" class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa-solid fa-coins"></i>
            <h4 id="sub-titulo">Metalcoins</h4>
        </div>

        <div class="options__menu hp">	

            <a class="selected">
                <div class="option">
                    <i  class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="conta.php">
                <div class="option">
                    <i class="fas fa-user" title="Conta"></i>
                    <h4>Conta</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-id-badge" title="Contacto"></i>
                    <h4>Contacto</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="fa fa-shopping-cart" aria-hidden="true" title="produtos"></i>
                    <h4>Produtos</h4>
                </div>
            </a>

            <a href="../controllers/Acess/logout.php">
                <div id="sair" class="option">
                    <i class="fa fa-sign-out" aria-hidden="true" title="Exit"></i>
                    <h4>Sair</h4>
                </div>
            </a>

        </div>

    </div>

    <main>
        </form>
        <div class="Produtos">
            <div class="produto1">
                <h1 id="p1">Camera Fotografica Sony A7</h1>
                <div class="quadrado1">
                    <img id="camera" src="../img/camera.png" alt="camera">
                </div>
                <a href=""><span id="vermais">Ver mais</span></a>
        
            </div>
        
            <div class="produto2">
                <h1 id="p2">Iphone 11 Pro</h1>
                <div class="quadrado2">
                    <img id="iphone" src="../img/iphone.png" alt="iphone">
                </div>
                <span id="vermais">Ver mais</span>
            </div>
        
            <div class="produto3">
                <h1 id="p3">HD SSD 960GB Kingston 2,5 sata</h1>
                <div class="quadrado3">
                    <img id="ssd" src="../img/ssd.png" alt="SSD">
                </div>
                <span id="vermais">Ver mais</span>
            </div>
        
            <div class="produto4">
                <h1 id="p4">Notebook Deel Latitude 3420 14 Polegadas</h1>
                <div class="quadrado4">
                    <img id="notebook" src="../img/notebook.png" alt="notebook">
                </div>
                <span id="vermais">Ver mais</span>
            </div>
        
            <div class="produto5">
                <h1 id="p5">Paçoca Dacolônia Rolha 210g</h1>
                <div class="quadrado5">
                    <img id="pacoca" src="../img/pacoca.png" alt="pacoca">
                </div>
                <span id="vermais">Ver mais</span>
            </div>
        
            <div class="produto6">
                <h1 id="p6">NIke Air Force Shoes</h1>
                <div class="quadrado6">
                    <img id="nike" src="../img/nike.png" alt="nike">
                </div>
                <span id="vermais">Ver mais</span>
            </div>
        
        </div>
    </main>

    <script src="../js/script.js"></script>

    <script type="text/javascript" src="../js/vanilla-tilt.js"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".produto1"));
        VanillaTilt.init(document.querySelectorAll(".quadrado1"));

        VanillaTilt.init(document.querySelectorAll(".produto2"));
        VanillaTilt.init(document.querySelectorAll(".quadrado2"));

        VanillaTilt.init(document.querySelectorAll(".produto3"));
        VanillaTilt.init(document.querySelectorAll(".quadrado3"));

        VanillaTilt.init(document.querySelectorAll(".produto4"));
        VanillaTilt.init(document.querySelectorAll(".quadrado4"));

        VanillaTilt.init(document.querySelectorAll(".produto5"));
        VanillaTilt.init(document.querySelectorAll(".quadrado5"));

        VanillaTilt.init(document.querySelectorAll(".produto6"));
        VanillaTilt.init(document.querySelectorAll(".quadrado6"));

        VanillaTilt.init(document.querySelectorAll("#camera"));
        VanillaTilt.init(document.querySelectorAll("#iphone"));
        VanillaTilt.init(document.querySelectorAll("#ssd"));
        VanillaTilt.init(document.querySelectorAll("#notebook"));
        VanillaTilt.init(document.querySelectorAll("#pacoca"));
        VanillaTilt.init(document.querySelectorAll("#nike"));

        VanillaTilt.init(document.querySelectorAll(".iconeUsuario"));






    </script>
</body>
</html>