<div class="container">
    <div class="section">
	    <div id="basic-form" class="section">
	      <div class="row">
	        <div class="col s12 m12">
	          <div class="card-panel">
	            <h4 class="header2">Listado de estudiantes</h4>
	            <div class="row">
			      <table class="bordered striped highlight centered">
			        <thead>
			          <tr>
			              <th>Imagen</th>
			              <th>Nombre</th>
			              <th>Edad</th>
			              <th>Promedio</th>
			              <th>Acción</th>
			          </tr>
			        </thead>
			        <tbody>
			        <?php while($row=mysqli_fetch_array($datos)){ ?>
				        <tr>
				        	<td><img class="imagen" src="<?php echo URL;?>Views/template/imagenes/<?php echo $row['imagen']; ?>"></td>
				            <td><a href="<?php echo URL; ?>estudiantes/ver/<?php echo $row['id'];?>"><?php echo $row['nombre'];?></a></td>
				            <td><?php echo $row['edad'];?></td>
				            <td><?php echo $row['promedio'];?></td>
				            <td>
				            	<a href="<?php echo URL; ?>estudiantes/editar/<?php echo  $row['id']; ?>" class="btn-floating btn-flat waves-effect waves-light red accent-2 white-text"><i class="material-icons">mode_edit</i></a>
				             <a href="<?php echo URL; ?>estudiantes/eliminar/<?php echo  $row['id']; ?>"class="btn-floating btn-flat waves-effect waves-light red accent-2 white-text"><i class="material-icons">delete</i></a>
				             </td>
				             
				        </tr>
				     <?php } ?>	   
			        </tbody>
			      </table>

	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
    </div>
</div>