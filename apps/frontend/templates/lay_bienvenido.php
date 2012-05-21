<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>
        <div id="header">            
            <div id="header-title" class="container">
                <div id="logo" class="span-14">
                    <?php echo image_tag("layout/logo-guamma") ?>
                </div>
                <div class="span-10 last" id="action-panel">
                    <div class="span-8">
                        <form action="<?php echo url_for("main/buscar") ?>">
                            &nbsp;<input style="display: none;" type="text" name="s" id="main-search-box-input" />
                        </form>
                    </div>
                    <div class="span-2 last">
                        <?php echo image_tag("layout/main-search", array("id" => "main-search")) ?>
                        <?php echo image_tag("layout/main-login", array("id" => "main-login")) ?>
                    </div>    
                </div>
            </div>
        </div>
        <div id="sys-container-daddy">
            <div class="container">
                <?php echo $sf_content ?>
            </div>
        </div>
        <div id="footer">
            <div class="container">
                <hr style="background-color: #F7A66B; height: 8px" />
                <div class="span-24 last" style="text-align: right">
                    <a href="#">Quienes somos</a>
                    <a href="#">a2Movil</a>
                    <a href="#">Terminos, licencias y condiciones</a>
                    <a href="#">Acerca de</a>
                </div>
                <div class="span-24 last" style="text-align: left">
                    <small>g&uuml;amma &copy; <?php echo date("Y") ?></small>
                </div>
            </div>
        </div>  
        <div id="main-login-form"></div>
    </body>
</html>
