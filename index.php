<head>	<link rel="stylesheet" type="text/css" href="css.css"><meta charset="utf-8"/></head>
<body>
    <?php
        $voto = " ";
        session_start();
        if(isset($_GET['return'])){
            if($_GET['return'] == 1){
                echo "Finalizado, Obrigado por Fazer sua escolha.  <b><a href='index.php'>OK</a></b>";
                $_SESSION['codigo'] = '';
            }else{}
        }else{}
        if(isset($_SESSION['codigo'])){     
            $voto = $_SESSION['codigo']; 
        }else{}
    ?>
    <div id="formulario">
      <form method="POST" action="Urna_eletronica.php" >
          <input name="ncandidato" type="text" value="<?php echo $voto; ?>" placeholder="Numero do Candidato" id="numvoto"/><br>
    </div>
          <center>
          <div id="botoes">
		  <a href="contavoto.php?cod=1"><input type="button" value="1"></a>
		  <a href="contavoto.php?cod=2"><input type="button" value="2"></a>
		  <a href="contavoto.php?cod=3"><input type="button" value="3"></a><br>
		  <a href="contavoto.php?cod=4"><input type="button" value="4"></a>
		  <a href="contavoto.php?cod=5"><input type="button" value="5"></a>
		  <a href="contavoto.php?cod=6"><input type="button" value="6"></a><br>
		  <a href="contavoto.php?cod=7"><input type="button" value="7"></a>
		  <a href="contavoto.php?cod=8"><input type="button" value="8"></a>
		  <a href="contavoto.php?cod=9"><input type="button" value="9"></a><br>
                  <a href="contavoto.php?cod=0"><input type="button" value="0"></a><br>   
          </div>
          <div id="botoes_alinhados">
                  <input name="votar" value="Confirma" type="submit" id="confirmar"/>
                  <a href="corrigir.php"><input name="Corrigir" value="Corrigir" type="button" id="corrigir"></a>
                  <a href="urna_eletronica.php"><input name="Branco" value="Branco" type="button" id="branco"/></a>
          </div>
      </form>
<div id="rodape">
     <p align="center"><h6> &copy;Emanuel Codes</h6></p>
</div>
</body>