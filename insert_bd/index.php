<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Insertar datos del trabajador </title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <br/>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <h1 class="display-2"> Datos Trabajador</h1>
                    <form method="get" action="insert.php">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">DNI</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="DNI" name="DNI">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Número de Seguridad Social</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Número de Seguridad Social" name="SE_SOCIAL">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nombre y apellidos</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre de Apellidos" name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Sexo</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="sexo">
                                <option>H</option>
                                <option>M</option>
                            </select>
                        </div>
                        <div class='col-auto'>
                            <button class='btn btn-lg btn-success' type='submit'>Enviar</button>
                        </div>
                        <!--end of col-->
                </div>
                </form>
            </div>
            <!--end of col-->
        </div>
    </div> 
</body>
</html> 