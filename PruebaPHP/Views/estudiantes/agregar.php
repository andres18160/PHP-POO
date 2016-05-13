<div class="container">
    <div class="section">
    <div class="row">
    	<div class="col s12 m12 l6">
                  <div class="card-panel">
                    <h4 class="header2">Agregar Estudiante</h4>
                    <div class="row">
                      <form class="col s12" action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="nombre" name="nombre" type="text">
                            <label for="nombre">Nombre Estudiante</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="edadEstudiante" name="edadEstudiante" type="number">
                            <label for="edadEstudiante">Edad</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="promedio" name="promedio" type="number">
                            <label for="promedio">Promedio</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                           <select name="seccion" id="seccion">
                           	<?php while ( $row=mysqli_fetch_array($datos)) {?>
                           		<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                           <?php	} ?>
                           </select>
                            <label for="seccion">Seccion</label>
                          </div>
                        </div>
                        <div class="file-field input-field">
					      <div class="btn">
					        <span>Imagen</span>
					        <input id="imagen" name="imagen"  type="file">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
                        <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Agregar
                                <i class="material-icons">input</i>
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