<head><meta charset="utf-8"></head>
<?php
    require_once 'urna_eletronica.class.php';
    
   if(isset($_POST['ncandidato'])){
       $voto = $_POST['ncandidato'];
      
       $votando = new Voto($voto);
       $votando->votar($voto);  
   }else{
         $voto = ' ';
       
         $votando = new Voto($voto);
         $votando->votar($voto);
   }