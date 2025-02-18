<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>formulario</title>
    </head>
    <body>
        <form action="recibe.php" name="formulario_contacto" method="post">
        <input type="text" placeholder="nombre:" name="nombre" id="nombre">
        <input type="text" placeholder="edad:" name="edad" id="edad">
        <br>

<!--radio button-->
        <label for="hombre">hombre</label>
        <input type="radio" name="sexo" id="hombre" value="hombre">
        <br>

        <label for="mujer">mujer</label>
        <input type="radio" name="sexo" id="mujer" value="mujer">
        <br>

<!-- Combobox-->

        <select name="year" id="year">
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
        </select>

    <br>

    <!--checkbox-->

    <label for="terminos">terminos y condiciones </label>
    <input type="checkbox" name="terminos" value="ok" id="terminos">
    <br>

    <input type="submit" name="btn-enviar" vale="enviar">        
        </form> 
    
</body>
</html>