<?php

use Latte\Runtime as LR;

/** source: /var/www/nette/app/AdminModule/Presenters/templates/Empresas/default.latte */
final class Template3428b40303 extends Latte\Runtime\Template
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
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['empresa' => '50'], $this->params) as $ʟ_v => $ʟ_l) {
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
		echo '
    <div class = "container">

    <br>

    <div class = "row">
        <div class="col-12 col-lg-6">
';
		$this->renderBlock('title', get_defined_vars()) /* line 9 */;
		echo '        </div>

        <div class = "col-12 col-lg-6">

            <a class = "btn btn-xs btn-success" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:add")) /* line 14 */;
		echo '"> Añadir Cliente </a>

    </div>
    </div>
    <br>

    <div class = "row">

        <div class = "col-12 col-lg-12">

            <table class="table">

                <thead class="thead-dark">

                    <tr>

                        <th class="id"> ID </th>

                        <th class="nif"> Nif </th>

                        <th> Nombre </th>

                        <th> Telefono </th>

                        <th> Direccion </th>

                        <th> Contacto </th>

                        <th> Opciones </th>

                    </tr>

                </thead>

                <tbody>

';
		$iterations = 0;
		foreach ($empresas as $empresa) /* line 50 */ {
			echo '
                        <tr>

                            <td class="id"> ';
			echo LR\Filters::escapeHtmlText($empresa->id) /* line 54 */;
			echo ' </td>

                            <td class="nif"> ';
			echo LR\Filters::escapeHtmlText($empresa->nif) /* line 56 */;
			echo ' </td>

                            <td> ';
			echo LR\Filters::escapeHtmlText($empresa->nombre) /* line 58 */;
			echo ' </td>

                            <td> ';
			echo LR\Filters::escapeHtmlText($empresa->telefono) /* line 60 */;
			echo ' </td>

                            <td> ';
			echo LR\Filters::escapeHtmlText($empresa->direccion) /* line 62 */;
			echo ' </td>

                            <td> ';
			echo LR\Filters::escapeHtmlText($empresa->contacto) /* line 64 */;
			echo ' </td>

                            <td>

                                <a class = "btn btn-xs btn-primary" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Usuarios:default", [$empresa->id])) /* line 68 */;
			echo '"> Usuarios </a>
';
			if ($rol == 'admin') /* line 69 */ {
				echo '                                <a class="btn btn-xs btn-primary" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:edit", [$empresa->id])) /* line 70 */;
				echo '"> Editar </a>
';
			}
			elseif ($rol == 'encargado') /* line 71 */ {
				echo '                                <a class="btn btn-xs btn-primary" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:edit", [$empresa->id])) /* line 72 */;
				echo '"> Editar </a>
';
			}
			if ($rol == 'admin') /* line 74 */ {
				echo '                                <a class="btn btn-xs btn-danger" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:borrar", [$empresa->id])) /* line 75 */;
				echo '"> Borrar </a>
';
			}
			echo '                            </td>

                        </tr>

';
			$iterations++;
		}
		echo '
            </tbody>

        </table>

    </div>

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
		echo '            <h1> Clientes </h1>
';
	}

}
