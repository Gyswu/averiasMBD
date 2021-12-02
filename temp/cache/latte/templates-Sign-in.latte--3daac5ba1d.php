<?php

use Latte\Runtime as LR;

/** source: /var/www/nette/app/Presenters/templates/Sign/in.latte */
final class Template3daac5ba1d extends Latte\Runtime\Template
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
<br>

';
		$this->renderBlock('title', get_defined_vars()) /* line 5 */;
		echo '
<br>

';
		$this->renderBlock('bootstrap-form', ['signInForm'] + [], 'html') /* line 9 */;
		
	}


	/** {block title} on line 5 */
	public function blockTitle(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '<h1> Iniciar Sesión </h1>
';
	}

}
