<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <style>
        body{
            background:#F8F8F8
        }
        .data{
            background:#000000;
            color:#FFFFFF;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="jumbotron">
        <h1 class="display-4">Suma, Resta, Multiplicacion, Divicion de Matriz por Escalar</h1>
        <p class="lead">Proyecto Realizado para la materia de matematica 3</p>
        <hr class="my-4">
    </div>

    <h1>Ingrese la Dimencion de la Matriz</h1>
    <form method='post'>
        <table>
            <tr>
                <tr>
                    <td>Numero de Filas</td>
                    <td>
                        <input type="text" class="form-control" name="filas" required>
                    </td>
                    <td style='padding:40px'>X</td>
                    <td>Numero de Columnas</td>
                    <td>
                        <input type="text" class="form-control" name="columnas" required>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-success">Generar</button>
                    </td>
                </tr>
            </tr>
        </table>
    </form>

    <div class="row">
        <div class="col-12 col-md-4">
            <h2>Escalar</h2>
            <hr>
            <input type="text" id="escalar" class="data form-control">
        </div>
        <div class="col-12 col-md-4">
            <h2>Operacion</h2>
            <hr>
            <select name="" class="form-control" id="operacion">
                <option value="1">Suma</option>
                <option value="1">Resta</option>
                <option value="1">Multiplicacion</option>
                <option value="1">Divicion</option>
            </select>
           
        </div>
        <div class="col-12 col-md-4" >
            <h2>Matriz</h2>
            <hr>
            <?php
                if(isset($_POST["filas"])){
                    $filas=$_POST["filas"];
                    $columnas=$_POST["columnas"];

                    $table="<div style='border-left:5px solid #000;border-right:5px solid #000;padding:10px'>
                    <table style='display:flex;justify-content:center' >";
                    for($i=0;$i<$filas;$i++){
                        $table.="<tr>";
                        for($j=0;$j<$columnas;$j++)
                        {
                            $table.="<td><input style='width:50px' type='text' class='data form-control' id='a".$i."".$j."' ></td>";
                        }
                        $table.="</tr>";
                    }
                    $table.="</table></div>";

                    echo $table;
                }
            ?>
        </div>
    </div>
    <div class="row" style="padding-top:10px">
        <button class="btn btn-primary" style="width:100%">Operar</button>
    </div>

</div>
    
</body>
</html>