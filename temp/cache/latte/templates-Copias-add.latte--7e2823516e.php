<?php
// source: /var/www/nette/app/AdminModule/Presenters/templates/Copias/add.latte

use Latte\Runtime as LR;

class Template7e2823516e extends Latte\Runtime\Template
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
                <h1>Añadir entrada de copias</h1>
            </div>
            <div class="col-6 col-lg-6">
            </div>
        </div>
        <div class="row">
<?php
		/* line 12 */ $_tmp = $this->global->uiControl->getComponent("addCopiasForm");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
?>
        </div>
    </div>
<?php
	}

}
