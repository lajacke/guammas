<h1>Usuarios List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre usuario</th>
      <th>Contrasena</th>
      <th>Correo electronico</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Actividad</th>
      <th>Ultimo inicio sesion</th>
      <th>Activo</th>
      <th>Rol</th>
      <th>Ciudad</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
      <td><a href="<?php echo url_for('usuario/edit?id='.$usuario->getId()) ?>"><?php echo $usuario->getId() ?></a></td>
      <td><?php echo $usuario->getNombreUsuario() ?></td>
      <td><?php echo $usuario->getContrasena() ?></td>
      <td><?php echo $usuario->getCorreoElectronico() ?></td>
      <td><?php echo $usuario->getNombre() ?></td>
      <td><?php echo $usuario->getApellido() ?></td>
      <td><?php echo $usuario->getActividad() ?></td>
      <td><?php echo $usuario->getUltimoInicioSesion() ?></td>
      <td><?php echo $usuario->getActivo() ?></td>
      <td><?php echo $usuario->getRolId() ?></td>
      <td><?php echo $usuario->getCiudadId() ?></td>
      <td><?php echo $usuario->getCreatedAt() ?></td>
      <td><?php echo $usuario->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('usuario/new') ?>">New</a>
