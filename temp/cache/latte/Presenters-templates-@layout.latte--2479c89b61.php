<?php

use Latte\Runtime as LR;

/** source: /var/www/nette/app/AdminModule/Presenters/templates/@layout.latte */
final class Template2479c89b61 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['sidebar' => 'blockSidebar', 'usuario' => 'blockUsuario'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '

';
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('sidebar', get_defined_vars()) /* line 3 */;
		echo '

';
		$this->renderBlock('usuario', get_defined_vars()) /* line 7 */;
		echo "\n";
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['datos' => '29'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		$this->parentName = "../../../Presenters/templates/@layout.latte";
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block sidebar} on line 3 */
	public function blockSidebar(array $ʟ_args): void
	{
		
	}


	/** {block usuario} on line 7 */
	public function blockUsuario(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) /* line 11 */;
		echo '"> Home </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"

                    data-bs-target=".dual-collapse2"

                    aria-controls="navbarSupportedContent" aria-expanded="false"

                    aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"> </span>

            </button>

            <div class="collapse navbar-collapse w-100 order-0 dual-collapse2 ml-3" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">

';
		$iterations = 0;
		foreach ($menu as $datos) /* line 29 */ {
			echo "\n";
			if ($datos['mostrar']) /* line 31 */ {
				echo '
                            <li class="nav-item">

                                <a class="nav-link" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link($datos['nhref'])) /* line 35 */;
				echo '"> ';
				echo LR\Filters::escapeHtmlText($datos['nombre']) /* line 35 */;
				echo '

                                </a>

                            </li>


';
			}
			echo "\n";
			$iterations++;
		}
		echo '
                </ul>

            </div>

            <div class="d-flex navbar-collapse collapse w-100 order-3 dual-collapse2 justify-content-end">

                <ul class="navbar-nav ml-auto mr-3">

                    <li class="nav-item">

';
		if ($usuarioDb) /* line 56 */ {
			echo '
                            <a>';
			echo LR\Filters::escapeHtmlText($usuarioDb->nombre) /* line 58 */;
			echo ' <a class="nav-link" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link(":Sign:out")) /* line 58 */;
			echo '">  (<b> Salir </b>)</a></a>

';
		}
		else /* line 60 */ {
			echo '
                            Invitado

';
		}
		echo '
                    </li>

                </ul>

            </div>
        </div>
    </nav>

';
	}

}
