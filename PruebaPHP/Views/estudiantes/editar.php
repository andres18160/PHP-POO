<?php $secciones= $estudiantes->listarSecciones(); ?>
<div class="container">
    <div class="section">
    <div class="row">
    	<div class="col s12 m12 173">
                  <div class="card-panel">
                    <h4 class="header1">Editar Estudiante <?php echo $datos['nombre']; ?></h4>
                    <div class="row">
                  <div class="col s3">
                  <img class="img-responsive" src="<?php echo URL; ?>Views/template/imagenes/<?php echo $datos['imagen']; ?>">
                  </div>
                  <div class="col s9">
                      <form class="col s12" action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="nombre" name="nombre" type="text" value="<?php echo $datos['nombre']; ?>">
                            <label for="nombre">Nombre Estudiante</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="edad" name="edad" type="number" value="<?php echo $datos['edad']; ?>">
                            <label for="edad">Edad</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="promedio" name="promedio" type="number" value="<?php echo $datos['promedio']; ?>">
                            <label for="promedio">Promedio</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                           <select name="seccion" id="seccion">
                           	<?php while ( $row=mysqli_fetch_array($secciones)) {?>
                           		<option value="<?php echo $row['id']; ?>" <?php if($row['nombre']==$datos['nombre_seccion']) echo "selected"; ?>><?php echo $row['nombre']; ?></option>
                           <?php	} ?>
                           </select>
                            <label for="seccion">Seccion</label>
                          </div>
                        </div>
                        <input name="id" id="id" value="<?php echo $datos['id']; ?>" type="hidden"></input>
                        <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Actualizar
                                <i class="material-icons">update</i>
                              </button>
                              <button class="btn red waves-effect waves-light right" type="reset" name="action">Borrar
                                <i class="material-icons">delete</i>
                              </button>
                            </div>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
    </div>
    </div>
</div>

