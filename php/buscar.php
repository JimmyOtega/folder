<?php
    $conta=0;
    $us =$_POST["us"];
    $pas =$_POST["pas"];

    $conn= mysqli_connect("localhost","root","","conoceme");
    
    $st=$conn->query("SELECT nom, cla FROM conocer WHERE nom='".$us."' AND cla ='".$pas."' ");
            
    while($row=$st->fetch_array()){
        $conta++;
    }
    if( $conta>0){
        $res= array(
            'res' => 'correcto',
            'us' => $us,
            'pas' => $pas,
           
        );

    }else{
        $res= array(
            'res' => 'Error',
            'us' => $us,
            'tipo' => $accion
        );
    }
    $st->close();
    $conn->close();  
    echo json_encode($res);
?>