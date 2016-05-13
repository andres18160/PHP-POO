<div class="container">
    <div class="section">
	    <div id="basic-form" class="section">
	      <div class="row">
	        <div class="col s12 m12">
	          <div class="card-panel">
	            <h4 class="header2">Listado de Secciones</h4>
	            <div class="row">
			      <table class="bordered striped highlight centered">
			        <thead>
			          <tr>
			              <th>Id</th>
			              <th>Nombre</th>
			              <th>Acción</th>
			          </tr>
			        </thead>
			        <tbody>
			        <?php while($row=mysqli_fetch_array($datos)){ ?>
				        <tr>
				        	 <td><?php echo $row['id'];?></td>
				            <td><?php echo $row['nombre'];?></td>
				            <td>
				            <a href="<?php echo URL; ?>editar/<?php echo  $row['id']; ?>" class="btn-floating btn-flat waves-effect waves-light red accent-2 white-text"><i class="material-icons">mode_edit</i></a>
				             <a href="<?php echo URL; ?>eliminar/<?php echo  $row['id']; ?>"class="btn-floating btn-flat waves-effect waves-light red accent-2 white-text"><i class="material-icons">delete</i></a>
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