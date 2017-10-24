<html>
<head>
    <title> Ejercicio 3 </title>
    <meta charset="utf-8">
    </head>
    <body style="background:url('miku.jpg') no-repeat bottom left" width=80% bgcolor="white" border="2">
    <h1> PROGRAMACION DE APLICACIONES WEB</h1>
    <h4> Mostrar en pantalla una tabla de 1 por 10</h4>
    <?php 
    echo "<h2>BUCLE WHILE</h2><br>";
    echo "<table border=1>";
    for($i=0; $i<10; $i++)
    {
        echo "<tr>";
        echo "<td>";
        echo "Linea ".$i."<br>";
        echo "</td>";
        echo "<tr>";
        
    }
        echo "</table>";
        ?>
		<font face="times new roman, arial"/>
        <p> Tovar Jiménez José Mario </p>
        <a href="index.php">Retroceder al menu</a>
    </body>
    </html>