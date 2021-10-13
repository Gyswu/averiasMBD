<?php
// source: /var/www/nette/app/AdminModule/Presenters/templates/Usuarios/add.latte

use Latte\Runtime as LR;

class Templateb4e2064d86 extends Latte\Runtime\Template
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

        <div class = "row">

            <div class = "col col-lg-6">

                <a class="btn btn-xs btn-primary" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Usuarios:default")) ?>"> Volver </a>

            </div>

        </div>

        <br>

        <div class = "row">


            <div class = "col col-lg-6">

<?php
		if (isset($empresaId)) {
?>

<?php
			/* line 34 */ $_tmp = $this->global->uiControl->getComponent("addUsuarioForm->$empresaId");
			if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
			$_tmp->render();
?>

<?php
		}
		else {
?>

<?php
			/* line 38 */ $_tmp = $this->global->uiControl->getComponent("addUsuarioForm");
			if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
			$_tmp->render();
?>

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
?>            <h1> Crear Nuevo Usuario </h1>
<?php
	}

}
