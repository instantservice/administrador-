<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
    <form action="Personal-act.php" method="post">
        <div>
            <nav class="navegacion">
                <a href="Personal-Insertar.html" class="navegacion__enlace">Insertar datos</a>
                <a href="Personal-elim.html" class="navegacion__enlace">Eliminar Datos</a>
                <a href="Personal-cons.php" class="navegacion__enlace">Consulta de datos</a>
            </nav>
        </div>
        <div class="container">
            <h1>Actualizar Datos</h1>
        <div>
        <label>ID del Empleado:</label>
        <input type="number" name="id" >
        </div>
        <div>
            <label>Tipo:</label>
         <input type="text" name="tipo" >
         </div>
         <div>
             <label>Nombre:</label>
          <input type="text" name="nombre" >
          </div>
 
          <div>
             <label>Telefono:</label>
             <input type="number" name="tel">
          </div>
 
          <div>
             <label >Direccion:</label>
          <input type="text" name="direccion" >
          </div>
 
        <div>
            <input type="submit" value="Actualizar Datos"> 
        </div>
                </form>
            </div>
            </body>
    </form>
</body>
</html>