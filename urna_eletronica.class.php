<?php
class Voto{
    
    public $_Nvoto;
    public $_arquivo;
    
    function __construct($voto) {
        $this->_Nvoto = $voto;
        $this->_arquivo = "votos.txt";
    }
    public function votar($voto){
        $arquivo = $this->_arquivo;
        $conteudo = $voto."\r\n";
        
        $abertura = fopen("$arquivo","a+");
        $gravacao = fwrite($abertura,$conteudo);
        fclose($abertura);
        $_SESSION['codigo'] = 0;
        header("location:index.php?return=1");  
    }
    public function contaVoto($cod,$codigos){
        session_start();
        $_SESSION['codigo'] = $codigos.$cod;
        header("location:index.php");
    }
    public function corrigirVoto(){
        session_start();
        $_SESSION['codigo'] = '';
        header("location:index.php"); 
    }
}
