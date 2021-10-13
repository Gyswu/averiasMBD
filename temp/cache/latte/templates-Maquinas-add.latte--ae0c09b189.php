<?php
// source: /var/www/nette/app/AdminModule/Presenters/templates/Maquinas/add.latte

use Latte\Runtime as LR;

class Templateae0c09b189 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'content' => 'html',
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
<div class="container">
    <div class="row">
        <div class="col-6 col-lg-6">
            <h1>Dar maquina de alta</h1>
        </div>
        <div class="col-6-col-lg-6">
        </div>
    </div>
    <div class="row">
        <div class="col-12-col-lg-12">
<?php
		if (isset($empresaId)) {
?>

<?php
			/* line 15 */ $_tmp = $this->global->uiControl->getComponent("addMaquinaForm->$empresaId");
			if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
			$_tmp->render();
?>

<?php
		}
		else {
?>

<?php
			/* line 19 */ $_tmp = $this->global->uiControl->getComponent("addMaquinaForm");
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

}
