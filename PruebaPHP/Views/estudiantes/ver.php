<div class="container">
    <div class="section">
    <div class="row">
    	<div class="col s12 m12 173">
                  <div class="card-panel">
                    <h4 class="header1">Estudiante</h4>
                    <div class="row">
                  <div class="col s3">
                  <img class="img-responsive" src="<?php echo URL; ?>Views/template/imagenes/<?php echo $datos['imagen']; ?>">
                  </div>
                  <div class="col s9">
                      <form class="col s12" action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                          <div class="input-field col s12">
                            <input disabled  id="nombre" name="nombre" type="text" value="<?php echo $datos['nombre']; ?>">
                            <label for="nombre">Nombre Estudiante</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input disabled  id="edad" name="edad" type="number" value="<?php echo $datos['edad']; ?>">
                            <label for="edad">Edad</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input disabled  id="promedio" name="promedio" type="number" value="<?php echo $datos['promedio']; ?>">
                            <label for="promedio">Promedio</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input disabled  id="seccion" name="seccion" type="text" value="<?php echo $datos['nombre_seccion']; ?>">
                            <label for="promedio">Seccion</label>
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