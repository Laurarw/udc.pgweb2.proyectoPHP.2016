
            <div class="form-group ">
                <label class="control-label">  Nombre:</label><br>
                <div class="col-sm-5">
                    <input class="input-sm form-control" type="text" name="nombre" value="<?php echo (isset($cliente->nombre) ? $cliente->nombre:'') ?>">
                </div>
            </div><br>
            <div class="form-group ">
                <label class="control-label">  Apellido:</label><br>
                <div class="col-sm-5">
                    <input class="input-sm form-control" type="text" name="apellido" value="<?php echo isset($cliente->apellido) ? $cliente->apellido:'' ?>">
                </div>
            </div><br>
            <div class="form-group">
                <label class="control-label">Fecha de Nacimiento:</label><br>
                <div class="col-sm-5">
                    <input class="input-sm form-control" type="text" name="fecha_nac" id="datepicker" value="<?php echo (isset($cliente->fecha_nacimiento) ? $cliente->fecha_nacimiento:'') ?>">
                </div>
            </div><br>                            
            <div class="form-group">
                <label>Lugar de nacimiento</label><br>
                <div class="col-sm-5">
                    <select name="lugar_nac" class="input-sm form-control">
                        <option value="">Seleccionar Pais</option>
                        <?php foreach ($nacionalidades as $pais):?>
                            <option <?php echo (isset($cliente->nacionalidad) && $cliente->nacionalidad_id ==$pais->id) ? 'selected="selected"':'' ?> value="<?php echo $pais->id ?>" ><?php echo $pais->nombre ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div><br>
            <div class="form-group checkbox ">
                <label class="form-control-label col-sm-1">Activo:</label>
                
                <input class="checkbox-inline" type="checkbox" name="activo" value="1">
                
            </div><br>
           