<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form id="bien_login_form" action="<?php echo url_for('usuario/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <table>
        <tfoot>
            <tr>
                <td colspan="2">
                    <?php echo $form->renderHiddenFields(false) ?>
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
                <th><?php echo $form['correo_electronico']->renderLabel() ?></th>
                <td>
                    <?php echo $form['correo_electronico']->renderError() ?>
                    <?php echo $form['correo_electronico'] ?>
                </td>
            </tr>
            <tr>
                <th><?php echo $form['contrasena']->renderLabel() ?></th>
                <td>
                    <?php echo $form['contrasena']->renderError() ?>
                    <?php echo $form['contrasena'] ?>
                </td>
            </tr>
        </tbody>
    </table>
    <div style="padding-left: 200px">
        <span><input type="checkbox" id="deacuerdo" /></span>
        <span style="padding-left: 10px">Haciendo click aqui estoy de acuerdo con los <a href="#">Terminos y condiciones</a> de Guammas</span>
    </div>

</form>