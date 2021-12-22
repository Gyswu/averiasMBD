<?php

use Latte\Runtime as LR;

/** source: /var/www/nette/app/AdminModule/Presenters/templates/Empresas/edit.latte */
final class Template0be6160c83 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent', 'title' => 'blockTitle'],
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
		echo '
    <div class="container">

        <br>

        <div class="row">

';
		$this->renderBlock('title', get_defined_vars()) /* line 9 */;
		echo '
        </div>

        <br>

        <div class="row">

            <div class="col col-lg-6"><a class="btn btn-info" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:default")) /* line 17 */;
		echo '"> Volver </a></div>

        </div>

        <br>

        <div class="row">

            <div class="col col-lg-6"> ';
		/* line 25 */ $_tmp = $this->global->uiControl->getComponent("editarEmpresaForm");
		if ($_tmp instanceof Nette\Application\UI\Renderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		echo ' </div>

        </div>

    </div>

';
	}


	/** {block title} on line 9 */
	public function blockTitle(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '            <h1> Editar Cliente </h1>
';
	}

}
