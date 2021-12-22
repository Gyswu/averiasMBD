<?php

use Latte\Runtime as LR;

/** source: /var/www/nette/app/AdminModule/Presenters/templates/Maquinas/add.latte */
final class Templatef932496288 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '    <div class="container">
        <div class="row">
            <div class="col-6 col-lg-6">
                <h1>Dar maquina de alta</h1>
            </div>
            <div class="col-6-col-lg-6">
            </div>
        </div>
        <div class="row">
            <div class="col-12-col-lg-12">
';
		if (isset($empresaId)) /* line 13 */ {
			echo "\n";
			/* line 15 */ $_tmp = $this->global->uiControl->getComponent("addMaquinaForm->$empresaId");
			if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
			$_tmp->render();
			echo "\n";
		}
		else /* line 17 */ {
			echo "\n";
			/* line 19 */ $_tmp = $this->global->uiControl->getComponent("addMaquinaForm");
			if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
			$_tmp->render();
			echo "\n";
		}
		echo '            </div>
        </div>
    </div>


';
	}

}
