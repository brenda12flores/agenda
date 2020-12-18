<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   
    <div class="container">
      <h1 style="color: blue"><center>Contactos</center></h1>
      <div class="row">
        <div class="col-sm-12" >
          <form method="POST" action="<?php echo base_url().'/crear' ?>">

            <label for="concepto" class="font-weight-bold">Categoria:</label>
            <input type="text" name="concepto" id="concepto" class="form-control">

            <label for="monto" class="font-weight-bold">Nombre</label>
            <input type="text" name="monto" id="monto" class="form-control">

            <label for="fecha" class="font-weight-bold">Paterno</label>
            <input type="text" name="monto" id="monto" class="form-control">

             <label for="monto" class="font-weight-bold">Materno</label>
            <input type="text" name="monto" id="monto" class="form-control">

            <label for="monto" class="font-weight-bold">Teléfono</label>
            <input type="text" name="monto" id="monto" class="form-control">

            <label for="monto" class="font-weight-bold">Email</label>
            <input type="text" name="monto" id="monto" class="form-control">

            <br>
            <button class="btn btn-primary">Guardar</button>
          </form>
        </div>
      </div>

      

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>