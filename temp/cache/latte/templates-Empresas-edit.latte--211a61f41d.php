<?php
// source: /var/www/nette/app/AdminModule/Presenters/templates/Empresas/edit.latte

use Latte\Runtime as LR;

class Template211a61f41d extends Latte\Runtime\Template
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

            <div class = "col col-lg-6"> <a class = "btn btn-info" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:default")) ?>"> Volver </a> </div>

        </div>

        <br>

        <div class = "row">

            <div class = "col col-lg-6"> <?php
		/* line 25 */ $_tmp = $this->global->uiControl->getComponent("editarEmpresaForm");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
?> </div>

        </div>

    </div>

<?php
	}


	function blockTitle($_args)
	{
		extract($_args);
?>            <h1> Editar Cliente </h1>
<?php
	}

}
