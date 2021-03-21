<?php
    
    $nom = $_POST['nom'];
    $corr = $_POST['corr'];
    $cla = $_POST['cla'];
    $accion = $_POST['accion'];

   
    
    
    if ($accion == 'crear') {
       
        try {
            
            // realizar consulta a la base de datos
            $conn= mysqli_connect("localhost","root","","conoceme");
    
            $st=$conn->prepare("INSERT INTO conocer (nom,corr,cla) values(?,?,?)");
            $st->bind_param('sss',$nom,$corr,$cla);
            $st->execute(); 
            
            if($st->affected_rows > 0){
                /* esta es una consulta */
                $st=$conn->prepare("SELECT COUNT(id) FROM  conocer");
                $st->execute();
                $st->bind_result($id);/*el resultado alogelo a esta variable $id*/
                $st->fetch();/*recorre el resultado de la consulta*/
                // respuesta personalizada
                $respuesta= array(
                    'respuesta' => 'correcto',
                    'id_insert' => $id,
                    'tipo' => $accion
                );
                
            }else{
              
                $respuesta= array(
                    'respuesta' => 'Error',
                    'id_insert' => $id
                );
            }
        
            $st->close();
            $conn->close();

        } catch (Exception $e) {
            // en caso de error
            $respuesta= array(
                'pass' => $e->getMessage()
            );
        }

        // returna resultados a AJAX
        echo json_encode($respuesta);
        
    }
    
    
?>