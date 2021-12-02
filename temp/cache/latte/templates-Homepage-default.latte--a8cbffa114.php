<?php

use Latte\Runtime as LR;

/** source: /var/www/nette/app/Presenters/templates/Homepage/default.latte */
final class Templatea8cbffa114 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent', 'tittle' => 'blockTittle'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
		echo "\n";
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
';
		$this->renderBlock('tittle', get_defined_vars()) /* line 4 */;
		echo '        </div>
        <div class="row">
            <div class="col col-lg-6">
                <h3>Software web de administración de comedores</h3>
            </div>
        </div>
        <div class="row">
            <div class="col col-lg-12">
                <p><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Admin:Homepage:default")) /* line 13 */;
		echo '">Administración</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col col-lg-12">
                <p>

                </p>
                <p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Leer más
                    </a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <ul>
                        <li>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

';
	}


	/** {block tittle} on line 4 */
	public function blockTittle(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '            <h1>Averias MBD</h1>
';
	}

}
