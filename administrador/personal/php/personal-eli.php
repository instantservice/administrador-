<?php
//conexion a mysql 
//dvbfbzgn

$link= mysqli_connect ("127.0.0.1:33065","root","","aroma");

//recoger el valor del html
$clave = $_POST["clave"];

//consulta eliminar
$elimina="delete from personal where ID_personal='$clave'";
if (mysqli_query($link,$elimina)){
    if(mysqli_affected_rows($link)>0 ){
    echo '<script type="text/javascript">
  alert("datos eliminados :D");
window.location.href="eliminar.html"
</script>';

    }else{
    echo '<script type="text/javascript">
    alert("no existe este registro :S");
  window.location.href="eliminar.html"
  </script>
  '; 

 }
}else{
    echo '<script type="text/javascript">
    alert("datos no actualizados :S");
  window.location.href="eliminar.html"
  </script>
  '; 
    
}


mysqli_close($link);
?>