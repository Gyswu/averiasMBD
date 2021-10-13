<?php
// source: /var/www/nette/app/Presenters/templates/Sign/in.latte

use Latte\Runtime as LR;

class Templatedc8bd76940 extends Latte\Runtime\Template
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

<br>

<?php
		$this->renderBlock('title', get_defined_vars());
?>

<br>

<?php
		$this->renderBlock('bootstrap-form', ['signInForm'] + $this->params, 'html');
		
	}


	function blockTitle($_args)
	{
		extract($_args);
?><h1> Iniciar Sesión </h1>
<?php
	}

}
