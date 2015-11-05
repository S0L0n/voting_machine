<head>	<link rel="stylesheet" type="text/css" href="css.css"><meta charset="utf-8"/></head>
<body>
    <?php
        session_start();
        $voto = " ";
        if(isset($_GET['return'])){
            if($_GET['return'] == 1){
                $_SESSION['codigo'] = '';
            }else{}
        }else{}
        if(isset($_SESSION['codigo'])){     
            $voto = $_SESSION['codigo']; 
        }else{}
    ?>
   <div id="formulario">
      <form method="POST" action="Urna_eletronica.php" >
          <input name="ncandidato" type="text" value="<?php echo $voto; ?>" Use readonly="true" placeholder="Número do Candidato" id="numvoto"/><br>
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
             <div id="botoes_alinhados">
                  <input name="votar" value="Confirma" type="submit" id="confirmar"/>
                  <a href="corrigir.php"><input name="Corrigir" value="Corrigir" type="button" id="corrigir"></a>
                  <a href="urna_eletronica.php"><input name="Branco" value="Branco" type="button" id="branco"/></a>
      </form>
             </div>
          </div>
          </center> 
<table id="tabela">
<tr>
    <td><b>Candidado</b></td>
    <td><b>Número</b></td>
</tr>
<tr>
    <td><b>Dilma</b></td>
    <td><b>13</b></td>
</tr>
<tr>
    <td><b>Aécio</b></td>
    <td><b>45</b></td>
</tr>
    <td><b>Marina</b></td>
	<td><b>24</b></td>
</table>
   <div id="rodape">
       <center>
       <p align="center"><h6> &copy;Emanuel Codes</h6></p>
       </center>
   </div>       
</body>
