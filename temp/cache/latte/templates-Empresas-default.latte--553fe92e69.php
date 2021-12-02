<?php

use Latte\Runtime as LR;

/** source: /var/www/nette/app/Presenters/templates/Empresas/default.latte */
final class Template553fe92e69 extends Latte\Runtime\Template
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
    <div class = "container">

    <br>

    <div class = "row"> ';
		$this->renderBlock('title', get_defined_vars()) /* line 7 */;
		echo ' </div>

    <div class = "row">

        <div class = "col col-lg-12">

        <br>

            <table class = "table">

                <tbody>

                        <tr>

                            <td> NIF: ';
		echo LR\Filters::escapeHtmlText($empresa->nif) /* line 21 */;
		echo '  </td>

                            <td> NOMBRE: ';
		echo LR\Filters::escapeHtmlText($empresa->nombre) /* line 23 */;
		echo ' </td>

                            <td> TELEFONO: ';
		echo LR\Filters::escapeHtmlText($empresa->telefono) /* line 25 */;
		echo ' </td>

                            <td> DIRECCION: ';
		echo LR\Filters::escapeHtmlText($empresa->direccion) /* line 27 */;
		echo ' </td>

                            <td>

                               <a class = "btn btn-xs btn-primary" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Usuarios:default", [$empresa->id])) /* line 31 */;
		echo '"> Usuarios </a>

                                <a class = "btn btn-xs btn-primary " href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:edit", [$empresa->id])) /* line 33 */;
		echo '"> Editar </a>

                                <a class = "btn btn-xs btn-danger " href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Empresas:borrar", [$empresa->id])) /* line 35 */;
		echo '"> Borrar </a>

                            </td>

                        </tr>

                </tbody>

            </table>

    </div>

    </div>

    </div>


';
	}


	/** {block title} on line 7 */
	public function blockTitle(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '<h1> Mi Empresa </h1>';
	}

}
