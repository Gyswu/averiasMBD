<?php

use Latte\Runtime as LR;

/** source: /var/www/nette/app/AdminModule/Presenters/templates/Resumen/default.latte */
final class Template29f19b10be extends Latte\Runtime\Template
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
        <div class="row" style="border: 1px solid black ">
';
		for ($i = 0;
		$i < count($datosMaquinasCantidadKey);
		$i++) /* line 4 */ {
			echo '                
                <div height="2rem"  style="padding-left: calc(var(--bs-gutter-x) * .0) !important; padding-right: 0 !important;    width:';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::escapeCss(round($porcentajeMaquinas[$i], 2))) /* line 6 */;
			echo '%;
                display: inline-block; float: left; background-color:#';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::escapeCss(dechex(rand(0,10000000)))) /* line 7 */;
			echo '">&nbsp;</div>
                <br>
';
		}
		echo '        </div>
    </div>


';
	}

}
