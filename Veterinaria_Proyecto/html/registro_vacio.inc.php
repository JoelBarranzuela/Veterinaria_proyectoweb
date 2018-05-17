<?php
  include_once '../app/config.inc.php';
  include_once '../app/Conexion.inc.php';
  include_once '../app/redireccion.inc.php';
?>



<div class="form-group">
															<label>Ingrese su nombre de usuario</label>
															<input type="text" class="form-control" name="nombreCliente" placeholder="Ejemplo: Antony0512">
														</div>
														<div class="form-group">
															<label>Ingrese su apellido paterno</label>
															<input type="text" class="form-control" name="ApePaterno" placeholder="Apellido Paterno">
														</div>
														<div class="form-group">
															<label>Ingrese su apellido materno</label>
															<input type="text" class="form-control" name="ApeMaterno" placeholder="Apellido Materno">
														</div>
														<div class="form-group">
															<label>Ingrese su direccion</label>
															<input type="text" class="form-control" name="Direccion" placeholder="Direccion">
														</div>
															<div class="form-group">
															<label>Ingrese su dni</label>
															<input type="text" class="form-control" name="dni" placeholder="DNI">
														</div>
														<div class="form-group">
															<label>Ingrese su telefono</label>
															<input type="text" class="form-control" name="telefono" placeholder="Telefono">
														</div>
														<div class="form-group">
															<label>Ingrese su contraseña</label>
															<input type="password" class="form-control" name="clave1" placeholder="Contraseña">
														</div>
														<div class="form-group">
															<label>Repita su contraseña</label>
															<input type="password" class="form-control" name="clave2" placeholder="Repite tu contraseña">
														</div>
														<br>
														<button type="reset" class="btn btn-default">Limpiar campos</button>
														<button type="submit" class="btn btn-default" name="registrar">Registrar</button>