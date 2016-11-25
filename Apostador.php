<html>
	<head>
		<title>Apuestas Deportivas</title>
		<link rel="stylesheet" required autofocus type="text/css" href="../Estilo/Estilos.css">
		<link href="Estilo/Estilos.css" rel="stylesheet" type="text/css">
	  <script >
function aleatorio() {
	//var azar = Math.random()*10;
	var azar = 0;
	var imagen="";
	
	if(azar<=0){
	  imagen="../Fondo/mario.jpeg";
	}
	
	document.body.style.backgroundImage="url("+imagen+")";
}
        </script>
</head> 
<body background="Fondo/mario_face.jpg" >

		<form method="POST" class="Form" name="Logica" action="Apostador.php">
        <table width="100%" border="0">
  <tbody>
    <tr>
      <td width="10%"><table width="100%" border="0">
        <tbody>
          <tr>
            <td><span class="Menu">
              <input type="image" value="a" name="a" src="Botones/INFO.jpg" width="30" height="100" />
            </span></td>
            <td><span class="Menu">
              <input type="image" value="A" name="A" src="Botones/a.png" width="100" height="100" />
            </span></td>
          </tr>
        </tbody>
      </table></td>
      <?php  
	  $imagen='';
	  if(isset($_POST['A'])){
        $imagen= '1';  
	  } else if(isset($_POST['a'])){
        $imagen= '2';  
	  }	  
	  if(isset($_POST['B'])){
        $imagen= '3';  
	  } else if(isset($_POST['b'])){
        $imagen= '4';  
	  }
	  if(isset($_POST['C'])){
        $imagen= '5';  
	  } else if(isset($_POST['c'])){
        $imagen= '6';  
	  }
	  if(isset($_POST['D'])){
        $imagen= '7';  
	  } else if(isset($_POST['d'])){
        $imagen= '8';  
	  }
	  if(isset($_POST['E'])){
        $imagen= '9';  
	  } else if(isset($_POST['e'])){
        $imagen= '10';  
	  }
	  if(isset($_POST['F'])){
        $imagen= '11';  
	  } else if(isset($_POST['f'])){
        $imagen= '12';  
	  }
	  if(isset($_POST['G'])){
        $imagen= '13';  
	  } else if(isset($_POST['g'])){
        $imagen= '14';  
	  }
	  if(isset($_POST['H'])){
        $imagen= '15';  
	  } else if(isset($_POST['h'])){
        $imagen= '16';  
	  }
	  if(isset($_POST['I'])){
        $imagen= '17';  
	  } else if(isset($_POST['i'])){
        $imagen= '18';  
	  }
	  if(isset($_POST['J'])){
        $imagen= '19';  
	  } else if(isset($_POST['j'])){
        $imagen= '20';  
	  }
	  
	  
	  
	  
	  ?>
      <td rowspan="5" align="center"><?php echo "<img src='Imagen/".$imagen.".jpg' width='600' height='600' alt=''"?></td>
      <td width="10%"><table width="100%" border="0">
        <tbody>
          <tr>
            <td><span class="Menu">
              <input type="image" value="F" name="F" src="Botones/f.png" width="100" height="100" />
            </span></td>
            <td><input type="image" value="f" name="f" src="Botones/INFO.jpg" width="30" height="100" /></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td width="10%"><table width="100%" border="0">
        <tbody>
          <tr>
            <td><span class="Menu">
              <input type="image" value="b" name="b" src="Botones/INFO.jpg" width="30" height="100" />
            </span></td>
            <td><span class="Menu">
              <input type="image" value="B" name="B" src="Botones/b.png" width="100" height="100" />
            </span></td>
          </tr>
        </tbody>
      </table></td>
      <td width="10%"><table width="100%" border="0">
        <tbody>
          <tr>
            <td><span class="Menu">
              <input type="image" value="G" name="G" src="Botones/g.png" width="100" height="100" />
            </span></td>
            <td><input type="image" value="g" name="g" src="Botones/INFO.jpg" width="30" height="100" /></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td width="10%"><table width="100%" border="0">
        <tbody>
          <tr>
            <td><span class="Menu">
              <input type="image" value="c" name="c" src="Botones/INFO.jpg" width="30" height="100" />
            </span></td>
            <td>            <span class="Menu">
              <input type="image" value="C" name="C" src="Botones/c.png" width="100" height="100" />
            </span></td>
          </tr>
        </tbody>
      </table></td>
      <td width="10%"><table width="100%" border="0">
        <tbody>
          <tr>
            <td><span class="Menu">
              <input type="image" value="H" name="H" src="Botones/h.png" width="100" height="100" />
            </span></td>
            <td><input type="image" value="h" name="h" src="Botones/INFO.jpg" width="30" height="100" /></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td width="10%"><table width="100%" border="0">
        <tbody>
          <tr>
            <td><span class="Menu">
              <input type="image" value="d" name="d" src="Botones/INFO.jpg" width="30" height="100" />
            </span></td>
            <td><span class="Menu">
              <input type="image" value="D" name="D" src="Botones/d.png" width="100" height="100" />
            </span></td>
          </tr>
        </tbody>
      </table></td>
      <td width="10%"><table width="100%" border="0">
        <tbody>
          <tr>
            <td><span class="Menu">
              <input type="image" value="I" name="I" src="Botones/i.png" width="100" height="100" />
            </span></td>
            <td><input type="image" value="i" name="i" src="Botones/INFO.jpg" width="30" height="100" /></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td width="10%"><table width="100%" border="0">
        <tbody>
          <tr>
            <td><span class="Menu">
              <input type="image" value="e" name="e" src="Botones/INFO.jpg" width="30" height="100" />
              </span></td>
            <td><span class="Menu">
              <input type="image" value="E" name="E" src="Botones/e.png" width="100" height="100" />
            </span></td>
            </tr>
          </tbody>
        </table></td>
      <td width="10%"><table width="100%" border="0">
        <tbody>
          <tr>
            <td><span class="Menu">
              <input type="image" value="J" name="J" src="Botones/j.png" width="100" height="100" />
              </span></td>
            <td><input type="image" value="j" name="j" src="Botones/INFO.jpg" width="30" height="100" /></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
    </tbody>
</table>         
        
		</form>
	</body>
</html>