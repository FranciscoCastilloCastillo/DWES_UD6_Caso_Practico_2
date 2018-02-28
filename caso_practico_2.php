<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DWES</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <header>
      <h2>DESARROLLO WEB ENTORNO SERVIDOR - Caso Práctico 2 - Unidad 6</h2>
    </header>
    <article>
      <fieldset>
        <form action="conversion.php" method="POST">
          <legend><h2>Escribe un color descompuesto en Rojo, Verde y Azul en las siguientes cajas de texto.
            Cada color debe estar comprendido entre 0 y 255</h2></legend></br>
            <legend>Rojo</legend>
            <input type="number" id="rojo" name="rojo" required></br></br>
            <legend>Verde</legend>
            <input type="number" id="verde" name="verde" required></br></br>
            <legend>Azul</legend>
            <input type="number" id="azul" name="azul" required></br></br>
          <input type="submit" value="Obtener color Hexadecimal">
        </form>
      </fieldset>
    </article>
    <footer>
      <h5>Alumno: Francisco Manuel Castillo Castillo</h5>
      <h5>Asignatura: Desarrollo Web Entorno Servidor</h5>
    </footer>
  </body>
</html>
