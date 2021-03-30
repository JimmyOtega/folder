
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Este es</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap" rel="stylesheet">
        <script src="jQuery/jquery-3.6.0.min.js" type="text/javascript"></script>
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

       <div class="lo" id="lo">
           <h2>Ventana de Login</h2>
           <form id="formulario" method="POST">
                <img src="./img/Team success _Outline.svg" class="log">
                <input type="text" class="us" id="us" name="us" placeholder="Escriva su Nombre"><br>

                <input type="password" class="us" id="pas" name="pas" placeholder="Escriva su Contraceña"><br>

                <input type="hidden" name="tipo" id="tipo" value="buscar">
                <button type="submit" id="ac" class="bus"><span class="icon-database">  Aceptar</span> </button>
                <button type="button" id="sa" class="bus"><span class="icon-exit">  Salir</span> </button>
            
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
                   
                    <button type="submit" id="sus" class="suscripcion"><span class="icon-user-plus">  Suscribete</span></button>
                    <button type="submit" id="logeo" class="logi"><span class="icon-user">  Login</span></button>
                </div>
            </div>
        </header>
        <br>
        <section class="seccion">
            <article class="seccion1">
                <h2 class="se_h2">ACERCA DE</h2>
                <div class="mo_seccion1">
                    <img class="img_mo_se" src="./img/34.jpg" alt="esta es una imagen">
                    <p class="p">Mis compañeros y yo cuando estabamos en la univercidad nos apacionamos en la programacion
                    , nos colocamos deacuerdo que : Si quiere viajar por la vialactia, abrazar las estrellas, 
                    darle un veso al sol lo puedes hacer solo con la programacion 
                    </p>
                
                </div>
                <div class="mo_seccion2">
                    <img class="img_mo_se" src="./img/33.jpg" alt="esta es una imagen">
                    <p class="p">Hemos programado hastahora con con 4 lenguajes que son los mismos que lesdare a conoser
                    </p>
                
                </div>
            </article>
           
        </section>
        <br>
        <article class="seccion2">
            <div class="seccion3">
                <div class="mo_seccion3">
                    
                    <img class="img_mo_se1" src="./img/1.jpg" alt="esta es una imagen">
                    <p class="p">Al hablar de persistencia estas hablando de estos dos chicos,
                        que sin importar las caidas siempre sigen adelante
                    </p>
                    
                </div>
                <div class="mo_seccion4">
                   
                    <img class="img_mo_se1" src="./img/6.jpg" alt="esta es una imagen">
                    <p class="p">Recuerdos especiales del comienzo
                    </p>
                </div>
            </div>
        </article>
        <br>
        <article class="seccion4">
            <div class="seccion5">
               <h2 class="esh">PORTAFOLIO</h2>
               <div class="porta1">
                   
                   <div class="porta2">
                        <img class="imgfi" src="./img/2.jpg" alt="img-personal">
                        <p class="pf">Estos son los lenguajes de programacion a los que estoy asociado,
                        y con los que tengo proyectos disponibles</p>
                   </div>

                   <div class="porta_c">
                        <img class="imgfic" src="./img/logoc++1.png" alt="img-personal">
                    </div>

                   <div class="porta_char">
                        <img class="imgfic" src="./img/Cichar.jpg" alt="img-personal">
                    </div>
               </div>
               <div class="porta3">
                    <div class="porta_l">
                        <img class="imgfi" src="./img/2.jpg" alt="img-personal">
                        <p class="pf">Aunque falta aprender mucho mas</p>
                   </div>
                   <div class="porta_java">
                        <img class="imgfic" src="./img/Logojava.jpg" alt="img-personal">
                    </div>
                    <div class="porta_h">
                        <img class="imgfic" src="./img/pro.jpg" alt="img-personal">
                      
                    </div>
               </div>
            </div>
           
        </article>
        <br>
        <article class="seccion_block">
            <div class="seccion_bl">
                <h2 class="esh">Block</h2>

            </div>
        </article>
        <footer class="footer">
            <div class="foot">
            <h2 class="esh">Footer</h2>
            </div>
        </footer>















       <script src="./js/sweetalert2.all.min.js"></script>
       <script src="./jQuery/animar.js"></script>
       <script src="js/ventana.js"></script>
    
    </body>
</html>