<div class="card-body">
    <div class=form-row>
    <div class="form-group col-md-4">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" value="<?php echo $usuarios->nombre; ?>">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" value="<?php echo $usuarios->email; ?>">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="Dni">Dni/Ruc</label>
                    <input type="text" class="form-control" id="dni" value="<?php echo $usuarios->Dni_Ruc; ?>">
                  </div>
    </div>
    <div class=form-row>
    <div class="form-group col-md-4">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control phone" name = "telefono" id="phone" value="<?php echo $usuarios->telefono; ?>">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="confirmacion_password">Confirmación de Password</label>
                    <input type="password" class="form-control" id="confirmacion_password" name="confirmacion_password">
                  </div>
    </div>
             
                 
              
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Grabar</button>
                  <a href="<?php echo site_url("admin/usuarios/show/$usuarios->id");?>" class="btn btn-warning"><i class="fa-solid fa-backward"></i> Atras</a>
                </div>