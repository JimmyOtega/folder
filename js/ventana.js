$(document).ready(function(){
   
    $("#logeo").click(function(){ 
        $( "#lo" ).css( 'display','block' );
    });

    $("#lo #sa").click(function(){ 
        $( "#lo" ).css( 'display','none' );
    });
    
    $("#ac").click(function(){ 
        datos();
    });


    function datos(){
        $('#formulario').on('submit',function(e){
            e.preventDefault();/*evita que la pagina buelva a cargarse */
            $(this).serialize();/*para garantizar la captura de las cajas de texto*/
          
           $.ajax({
                type:"POST",
                url:"php/buscar.php",
                dataType:'json',
                data:{
                    us:$('#us').val(),
                    pas:$('#pas').val()
                }
           })
           .done(function(data){/*si la funcion debulve sierto */ 
                swal({
                    title: "Usuario  > " + data.us,
                    text: 'Bienvenido ',
                    tipe: 'success'
                });
                modal_dos();
               
           })
           .fail(function(data){/*si la funcion de bulve error */
                swal({
                    title: 'Error',
                    text: 'Presiona ok. para continuar',
                    type: 'error'
                })
                $('#us').val('');
                $('#pas').val('');
           })
        });

    }

    


});


eventListaner(); // la funcion que se carga cuando la pagina esta lista 
function eventListaner() {// y esta a la espera de un evento el vento es submit
    document.querySelector('#form').addEventListener('submit', validarRegistro);
}

function validarRegistro(e) {
    e.preventDefault();//para que no se recargue la pagina por defecto
   
    if (document.querySelector('#tipo').value === 'crear') {
       
        var nom = document.querySelector('#nom').value,
        corr = document.querySelector('#corr').value, 
        cla = document.querySelector('#cla').value, 
        tipo = document.querySelector('#tipo').value;  

        //DATA
        //OBTENER TADA LA INFORMACION DEL FORMULARIO EN LA DATA
        var data = new FormData();

        data.append('nom', nom);
        data.append('corr', corr);
        data.append('cla', cla);
        data.append('accion', tipo);
        
        var xhr = new XMLHttpRequest(); // hacemos el llamado a AJAX comunicandose con el servidor de forma hasincronoma

        xhr.open('POST', 'php/insertar.php', true);

        xhr.onload = function() {
            if (this.status === 200) {
                // RECIBE RESPUESTA DE AJAX
                var respuesta = JSON.parse(xhr.responseText);

                if (respuesta.respuesta === 'correcto') {
                    // mendaje de registro exitos
                    swal({
                        title: 'Nombre ' + nom +'  Ahora Somos '+ respuesta.id_insert,
                        text: 'Registrado con exitoso ',
                        tipe: 'success'
                    })
                    modal_dos();
                    ocultar();
                }
                else{
                    swal({
                        title: 'Error al insertar ' + nom,
                        text: 'Presiona ok. para continuar',
                        type: 'error'
                    })
                }
            
            }
        
        }
        // enviamos la peticion
        xhr.send(data);
    }
    
}

var modal= document.getElementById('sus');
var mod1= document.getElementById('sal');

function mostrar(){
    document.getElementById('modal').style.display="block";
}
function ocultar(){
    document.getElementById('modal').style.display="none";
}

modal.addEventListener('click',()=>{
    mostrar();
})
mod1.addEventListener('click',()=>{
    ocultar();
})


function paso(){
    document.getElementById('modal2').style.display="block";
}
function sale(){
    document.getElementById('modal2').style.display="none";
}
function modal_dos(){
    document.getElementById('li1').style.display="block";
    document.getElementById('li2').style.display="block";
    document.getElementById('li3').style.display="block";
    document.getElementById('li4').style.display="block";
}

