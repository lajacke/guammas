<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('usuario/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('usuario/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'usuario/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['nombre_usuario']->renderLabel() ?></th>
        <td>
          <?php echo $form['nombre_usuario']->renderError() ?>
          <?php echo $form['nombre_usuario'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['contrasena']->renderLabel() ?></th>
        <td>
          <?php echo $form['contrasena']->renderError() ?>
          <?php echo $form['contrasena'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['correo_electronico']->renderLabel() ?></th>
        <td>
          <?php echo $form['correo_electronico']->renderError() ?>
          <?php echo $form['correo_electronico'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['nombre']->renderLabel() ?></th>
        <td>
          <?php echo $form['nombre']->renderError() ?>
          <?php echo $form['nombre'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['apellido']->renderLabel() ?></th>
        <td>
          <?php echo $form['apellido']->renderError() ?>
          <?php echo $form['apellido'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['actividad']->renderLabel() ?></th>
        <td>
          <?php echo $form['actividad']->renderError() ?>
          <?php echo $form['actividad'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['ultimo_inicio_sesion']->renderLabel() ?></th>
        <td>
          <?php echo $form['ultimo_inicio_sesion']->renderError() ?>
          <?php echo $form['ultimo_inicio_sesion'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['activo']->renderLabel() ?></th>
        <td>
          <?php echo $form['activo']->renderError() ?>
          <?php echo $form['activo'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['rol_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['rol_id']->renderError() ?>
          <?php echo $form['rol_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['ciudad_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['ciudad_id']->renderError() ?>
          <?php echo $form['ciudad_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['created_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['created_at']->renderError() ?>
          <?php echo $form['created_at'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['updated_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['updated_at']->renderError() ?>
          <?php echo $form['updated_at'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
