<?php
  include_once '../app/config.inc.php';
  include_once '../app/Conexion.inc.php';
  include_once '../app/redireccion.inc.php';
?>




<div class="form-group">
															<label>Ingrese su nombre de usuario</label>
															<input type="text" class="form-control" name="nombreCliente" placeholder="Ejemplo: Antony0512" <?php $validador -> mostrar_nombre()?> >
															<?php
															$validador -> mostrar_error_nombre();
															?>
														</div>
														<div class="form-group">
															<label>Ingrese su apellido paterno</label>
															<input type="text" class="form-control" name="ApePaterno" placeholder="Apellido Paterno" <?php $validador -> mostrar_apePaterno()?> >
															<?php
															$validador -> mostrar_error_ApePaterno();
															?>
														</div>
														<div class="form-group">
															<label>Ingrese su apellido materno</label>
															<input type="text" class="form-control" name="ApeMaterno" placeholder="Apellido Materno" <?php $validador -> mostrar_apeMaterno()?> >
															<?php
															$validador -> mostrar_error_ApeMaterno();
															?>
														</div>
														<div class="form-group">
															<label>Ingrese su direccion</label>
															<input type="text" class="form-control"  name="Direccion" placeholder="Direccion" <?php $validador -> mostrar_direccion()?> >
															<?php
															$validador -> mostrar_error_direccion();
															?>
														</div>
															<div class="form-group">
															<label>Ingrese su dni</label>
															<input type="text" class="form-control"  name="dni" placeholder="DNI" <?php $validador -> mostrar_dni()?> >
															<?php
															$validador -> mostrar_error_dni();
															?>
														</div>
														<div class="form-group">
															<label>Ingrese su telefono</label>
															<input type="text" class="form-control" name="telefono" placeholder="Telefono" <?php $validador -> mostrar_telefono()?> >
															<?php
															$validador -> mostrar_error_telefono();
															?>
														<div class="form-group">
															<label>Ingrese su contraseña</label>
															<input type="password" class="form-control" name="clave1" placeholder="Contraseña">
															<?php
															$validador -> mostrar_error_clave1();
															?>
														</div>
														<div class="form-group">
															<label>Repita su contraseña</label>
															<input type="password" class="form-control" name="clave2" placeholder="Repite tu contraseña">
															<?php
															$validador -> mostrar_error_clave2();
															?>
														</div>
														</div>
														<br>
														<button type="reset" class="btn btn-default">Limpiar campos</button>
														<button type="submit" class="btn btn-default" name="registrar">Registrar</button>
