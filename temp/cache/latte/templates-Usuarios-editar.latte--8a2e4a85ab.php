<?php
// source: /var/www/nette/app/AdminModule/Presenters/templates/Usuarios/editar.latte

use Latte\Runtime as LR;

class Template8a2e4a85ab extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
		'title' => 'blockTitle',
	];

	public $blockTypes = [
		'content' => 'html',
		'title' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>

    <div class = "container">

        <br>

        <div class = "row">

<?php
		$this->renderBlock('title', get_defined_vars());
?>

        </div>

        <br>

        <div class="row">

            <div class="col col-lg-6">

                <a class = "btn btn-info" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Usuarios:default")) ?>"> Volver </a>

            </div>

        </div>

        <br>

        <div class = "row">

            <div class = "col col-lg-6">

<?php
		/* line 31 */ $_tmp = $this->global->uiControl->getComponent("editarUsuarioForm");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
?>

            </div>

        </div>

        <div class = "row">

            <div class = "col col-lg-12">

<?php
		if (isset($usuario->usuario)) {
?>

                <table class = "table">

                    <thead class = "thead-dark">

                        <tr>

                            <th> Nombre </th>

                            <th> Correo </th>

                            <th> Telefono </th>

                        </tr>

                    </thead>
                    
                    <tbody>
                        
                        <tr>

                            <td> <?php echo LR\Filters::escapeHtmlText($usuario->usuario->id) /* line 63 */ ?> </td>

                            <td> <?php echo LR\Filters::escapeHtmlText($usuario->usuario->correo) /* line 65 */ ?> </td>

                            <td> <?php echo LR\Filters::escapeHtmlText($usuario->usuario->telefono) /* line 67 */ ?> </td>

                        </tr>
                    
                    </tbody>
                
                </table>

<?php
		}
?>

            </div>

        </div>

    </div>

<?php
	}


	function blockTitle($_args)
	{
		extract($_args);
?>            <h1> Editar Usuario </h1>
<?php
	}

}
