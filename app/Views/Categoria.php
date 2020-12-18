<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Categorías</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg" style="background-color: #FFE4C4;">
  <div class="container-fluid">

    <div class="spinner-grow text-info" role="status">
  <span class="visually-hidden"></span>
</div>
    <a class="navbar-brand" href="<?php echo base_url('/') ?>"><h1 > INICIO</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('/Contactos') ?>"  ><h3>Contactos</h3></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/Categoria') ?>" style="color: blue"><h3>Categoria</h3></a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  
<div class="row">
      <div class="col-sm-12">
        
        <div class="card-body">
          <h2 style="color: blue"><center>Lista Categoría</center> </h2>
              <button class="btn btn-primary" data-toggle="modal" data-target="#modalInsertar">
            Agregar Categoría 
          </button>  
        </div>   
          <hr>
          <div class="table-responsive">
            <table class="table table-hover" id="tablaload">
              <thead>
                <th >Nombre</th>
                <th >Descripción </th>
                <th >Fecha </th>
                <th >Editar</th>
                <th >Eliminar</th>
              </thead>
              <tbody>
                <?php foreach($datos as $key): ?>
                  <tr>

                    <td align="center"><?php echo $key->categoria ?></td>
                    <td align="center"><?php echo $key->descripcion ?></td>
                    <td align="center"><?php echo $key->fecha ?></td>
                    <td style="text-align: center">
                      <a href="<?php echo base_url().'/obtenerCategoria/'.$key->id_categoria?>" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                    <td style="text-align: center">
                      <a href="<?php echo base_url().'/eliminar/'.$key->id_categoria?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        
      </div>
    </div>
    <!-- Content here -->
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript">
    $(document).ready(function() {
      $('#tablaload').DataTable();
    } );
  </script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
    let mensaje = '<?php echo $mensaje ?>';

    if (mensaje =='1'){
      swal(':D','Agregado con exito','success');

    }else if(mensaje == '0'){
      swal(':(','Fallo al agregar','error');  
    }else if(mensaje == '2'){
      swal(':D','Actualizado con exito','success');  
    }else if(mensaje == '3'){
      swal(':D','Fallo al actualizar','error');  
    } else if(mensaje == '4'){
      swal(':D','Eliminado con exito','success');  
    }else if(mensaje == '5'){
      swal(':D','Fallo al eliminar','error');  
    }
  </script>

  </body>
</html>