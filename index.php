<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>TIENDA.COM</h1>
        
    </header>  
            <h1> <center> Registrate</center></h1>
    <main class="bg-dark text-white">
        <div class="container">
             <div class="row justify-content-center">
                 <div class="col-4">
                         <form action="addDatos.php" method="POST" class="mt-5 mb-5">
                             <div class="form-group">
                                
                                 <hr>

                                 <div class="form-group">
                                    <label for="nom">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                 </div>
                                 <hr>
                                 <div class="form-group">
                                    <label for="app">Apellido</label>
                                    <input type="text" class="form-control" id="apellidos" name="apellidos">
                                  
                                 </div>
                                 <label for="cc">cedula</label>
                                    <input type="number" class="form-control" id="cedula" name="cedula">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                 </div>
                                 <hr>
                                 <div class="form-group">
                                    <label for="edd">Edad</label>
                                    <input type="number" class="form-control" id="edad" name="edad">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                 </div>
                                 <hr>
                                 <div class="form-group">
                                    <label for="tlf">Telefono</label>
                                    <input type="number" class="form-control" id="movil" name="movil">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                 </div>
                                 <div class="form-group">
                                    <label for="dir">Direccion</label>
                                    <input type="text" class="form-control" id="casa" name="casa">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                 </div>
                                 <hr>
                                <button type="submit"class ="btn btn-primary block" name="enviardatos">enviar</button>
                                 
    
                            </form>
        </div>
    </main>
    
     <footer>
     </footer>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 
</body>
</html>