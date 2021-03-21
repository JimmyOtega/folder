
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Este es</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/et_fondo.css">
        <link rel="stylesheet" href="icomoon/style.css">
    </head>
    <body >
       <div class="modal" id="modal">
           <h2>Ventana de Suscripcion</h2><br>
           <form id="form" method="POST">
                <img src="./img/Data Arran.svg" alt="" class="img1">
                <input type="text" class="v_v" id="nom" name="nom" placeholder="Escriva su Nombre"><br>

                <img src="./img/Full Inbox.svg" alt="" class="img1">
                <input type="text" class="v_v" id="corr" name="corr" placeholder="Escriva su Correo Electonico"><br>

                <img src="./img/Happy.svg" alt="" class="img1">
                <input type="password" class="v_v" id="cla" name="cla" placeholder="Escriva su Contraceña"><br>

                <input type="hidden" name="tipo" id="tipo" value="crear">
                <button type="submit" value="Aceptar" id="acep" class="acep"><span class="icon-database">  Aceptar</span> </button>
                <button type="button" value="Salir" id="sal" class="acep"><span class="icon-exit">  Salir</span> </button>
            
            </form>
           
       </div>
        <div class="modal2" id="modal2" >
            <h2>Te invito a echar un vistaso a mis proyectos cuando estaba en la univensidad</h2><br>
            <h4 class="p_a">Proyectos  <a href="#" class="p_p" > Java</a></h4>
            <h4 class="p_a">Proyectos  <a href="#" class="p_p" > C++</a></h4>
           
            <h4 class="p_a1">Proyectos <a href="#" class="p_p1"> Web</a></h4>
            <h4 class="p_a1">Proyectos <a href="#" class="p_p1" > Visual studio</a></h4>
           
            
        </div>
        <header class="header">
            <div class="header1">
                
                <nav id="menu_nav">
                    <ul>
                        <img src="./img/logo.jpg" alt="logo" class="imglo">
                        <li class="li" id="li1"><a><input type="submit" value="Inicio" onmouseout="sale()"></input></a></li>
                        <li class="li" id="li2"><a><input type="submit" value="Proyectos" id="proy" onmouseover="paso()"></input></a>
                        <li class="li" id="li3"><a><input type="submit" value="Trayectoria" onmouseout="sale()"></input> </a></li>
                        <li class="li" id="li4"><a><input type="submit" value="Configuracion" onmouseout="sale()"></input></a></li>
    
                    </ul>
                </nav>
            </div>
           
            <div class="vector" onmouseout="sale()">
                <div class="header2">
                    <h1>Mi Block</h1><br>
                    <img class="img" src="./img/2.jpg" alt="img-personal"><br><br>
                    <h2>Jimmy Leoncio Ortega Rodriguez</h2><br><br>
                    <h2>Ingeniero de sistemas</h2><br><br><br><br>
                   
                    <button type="submit" id="sus" name="suscripcion" class="suscripcion"><span class="icon-user-plus">  Suscribete</span></button>
                </div>
            </div>
        </header>
        <br>
        <section class="seccion">
            <div class="seccion1">
                <h2 class="se_h2">ACERCA DE</h2>
            </div>

        </section>





















       <script src="./js/sweetalert2.all.min.js"></script>
       <script src="js/ventana.js"></script>
    
    </body>
</html>