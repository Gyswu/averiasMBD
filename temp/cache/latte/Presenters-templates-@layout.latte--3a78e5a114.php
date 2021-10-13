<?php
// source: /var/www/nette/app/AdminModule/Presenters/templates/@layout.latte

use Latte\Runtime as LR;

class Template3a78e5a114 extends Latte\Runtime\Template
{
	public $blocks = [
		'sidebar' => 'blockSidebar',
		'usuario' => 'blockUsuario',
	];

	public $blockTypes = [
		'sidebar' => 'html',
		'usuario' => 'html',
	];


	function main()
	{
		extract($this->params);
?>


<?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('sidebar', get_defined_vars());
?>

<?php
		$this->renderBlock('usuario', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			if (isset($this->params['datos'])) trigger_error('Variable $datos overwritten in foreach on line 29');
		}
		$this->parentName = "../../../Presenters/templates/@layout.latte";
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockSidebar($_args)
	{
		
	}


	function blockUsuario($_args)
	{
		extract($_args);
?>

    <nav class = "navbar navbar-expand-lg navbar-dark bg-primary">
	<div class="container-fluid">
        <a class = "navbar-brand" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) ?>"> Home </a>

        <button class = "navbar-toggler" type = "button" data-bs-toggle = "collapse"

                data-bs-target = ".dual-collapse2"

                aria-controls = "navbarSupportedContent" aria-expanded = "false"

                aria-label = "Toggle navigation">

            <span class="navbar-toggler-icon"> </span>

        </button>

        <div class = "collapse navbar-collapse w-100 order-0 dual-collapse2" id = "navbarSupportedContent">

            <ul class = "navbar-nav mr-auto">

<?php
		$iterations = 0;
		foreach ($menu as $datos) {
?>

<?php
			if ($datos['mostrar']) {
?>

                        <li class="nav-item">

                            <a class = "nav-link" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link($datos['nhref'])) ?>"> <?php
				echo LR\Filters::escapeHtmlText($datos['nombre']) /* line 35 */ ?>


                            </a>

                        </li>

<?php
			}
?>

<?php
			$iterations++;
		}
?>

            </ul>

        </div>

        <div class = "d-flex navbar-collapse collapse w-100 order-3 dual-collapse2">

            <ul class = "navbar-nav ml-auto">

                <li class = "nav-item">

<?php
		if ($usuarioDb) {
?>

                        <a class = "nav-link" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Sign:out")) ?>"> <?php
			echo LR\Filters::escapeHtmlText($usuarioDb->nombre) /* line 57 */ ?> (<b> Salir </b>)</a>

<?php
		}
		else {
?>

                        Invitado

<?php
		}
?>

                </li>

            </ul>

        </div>
	</div>
    </nav>

<?php
	}

}
