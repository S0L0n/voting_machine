<head><meta charset="utf-8"></head>
<?php
    require_once 'urna_eletronica.class.php';
 if(isset($_POST['ncandidato'])){  
         $voto = $_POST['ncandidato'];   
        if($voto == 13 or $voto == 45 or $voto == 24){
                    $votando = new Voto($voto);
                    $votando->votar($voto);           
        }elseif($voto == ""){
                  $votando = new Voto($voto);
                  $votando->votarBranco();            
                    
       }elseif($voto <> 13 or $voto <> 45 or $voto <> 24 && $voto <> ""){
            $votando = new Voto($voto);
            $votando->votarNulo();
       }else{}
    } else{
          $voto = "";
         $votando = new Voto($voto);
         $votando->votarBranco();
 }