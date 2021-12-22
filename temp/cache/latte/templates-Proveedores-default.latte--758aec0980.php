<?php

use Latte\Runtime as LR;

/** source: /var/www/nette/app/AdminModule/Presenters/templates/Proveedores/default.latte */
final class Template758aec0980 extends Latte\Runtime\Template
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
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['proveedor' => '32'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
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
            <div class="col col-lg-6">
                <h1>Todos los proveedores</h1>
            </div>
            <div class="col col-lg-6">
                <h2>Work in Progress</h2>
            </div>
            <div class="col-lg-10">
                <table class="table">
                    <thead class="thead-dark">
                    <th class="id">
                        ID
                    </th>
                    <th class="nif">
                        Nif
                    </th>
                    <th class="nombre">
                        Nombre
                    </th>
                    <th class="telefono">
                        Telefono
                    </th>
                    <th class="direccion">
                        Dirección
                    </th>
                    <th class="opciones">
                        Opciones
                    </th>
                    </thead>
';
		$iterations = 0;
		foreach ($proveedores as $proveedor) /* line 32 */ {
			echo '                        <tr>
                            <td class="id">
                                ';
			echo LR\Filters::escapeHtmlText($proveedor->id) /* line 35 */;
			echo '
                            </td>
                            <td class="nif">
                                ';
			echo LR\Filters::escapeHtmlText($proveedor->nif) /* line 38 */;
			echo '
                            </td>
                            <td class="nombre">
                                ';
			echo LR\Filters::escapeHtmlText($proveedor->nombre) /* line 41 */;
			echo '
                            </td>
                            <td class="telefono">
                                <a class="nounderline" href="tel:';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($proveedor->telefono)) /* line 44 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($proveedor->telefono) /* line 44 */;
			echo '</a>
                            </td>
                            <td class="direccion">
                                ';
			echo LR\Filters::escapeHtmlText($proveedor->direccion) /* line 47 */;
			echo '
                            </td>
                            <td class="opciones">
                                <a class="btn btn-xs btn-primary" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Maquinas:default", ['id'=> $proveedor->id , 'mode'=> 9 ])) /* line 50 */;
			echo '"> Maquinas</a>
                                <a class="btn btn btn-xs btn-primary" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Proveedores:info", [$proveedor->id ])) /* line 51 */;
			echo '">Información</a>
                            </td>
                        </tr>
';
			$iterations++;
		}
		echo '                </table>
            </div>
        </div>
    </div>
';
	}

}
