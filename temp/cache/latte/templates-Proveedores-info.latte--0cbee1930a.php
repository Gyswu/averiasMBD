<?php

use Latte\Runtime as LR;

/** source: /var/www/nette/app/AdminModule/Presenters/templates/Proveedores/info.latte */
final class Template0cbee1930a extends Latte\Runtime\Template
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
		echo '    <div class="cotnainer">
        <div class="row">
            <div class="col col-lg-12">
                <h1 class="text-center">
                    Información del proveedor ';
		echo LR\Filters::escapeHtmlText($proveedor->nombre) /* line 6 */;
		echo '
                </h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-lg-12 col-md-12">
                <table class="table table-striped">
                    <tr>
                        <td>
                            <h5>ID</h5>
                        </td>
                        <td>
                            ';
		echo LR\Filters::escapeHtmlText($proveedor->id) /* line 18 */;
		echo '
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>NIF</h5>
                        </td>
                        <td>
                            ';
		echo LR\Filters::escapeHtmlText($proveedor->nif) /* line 26 */;
		echo '
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Nombre</h5>
                        </td>
                        <td>
                            ';
		echo LR\Filters::escapeHtmlText($proveedor->nombre) /* line 34 */;
		echo '
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Telefono</h5>
                        </td>
                        <td>
                            ';
		echo LR\Filters::escapeHtmlText($proveedor->telefono) /* line 42 */;
		echo '
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Dirección</h5>
                        </td>
                        <td>
                            ';
		echo LR\Filters::escapeHtmlText($proveedor->direccion) /* line 50 */;
		echo '
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
';
	}

}
