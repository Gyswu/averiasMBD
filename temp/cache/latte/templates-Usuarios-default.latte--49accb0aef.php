<?php

use Latte\Runtime as LR;

/** source: /var/www/nette/app/AdminModule/Presenters/templates/Usuarios/default.latte */
final class Template49accb0aef extends Latte\Runtime\Template
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
			foreach (array_intersect_key(['usuario' => '71'], $this->params) as $ʟ_v => $ʟ_l) {
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
    <div class="container">

        <br>

        <div class="row">

';
		$this->renderBlock('title', get_defined_vars()) /* line 9 */;
		echo '
        </div>

        <br>

        <div class="row">

            <div class="col col-lg-6">

';
		if (isset($empresa)) /* line 19 */ {
			echo '
                    <a class="btn btn-xs btn-success" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Usuarios:add", [$empresa->id])) /* line 21 */;
			echo '"> Añadir Usuario </a>

';
		}
		else /* line 23 */ {
			echo '
                    <a class="btn btn-xs btn-success" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Usuarios:add")) /* line 25 */;
			echo '"> Añadir Usuario </a>

';
		}
		echo '
            </div>

        </div>

        <br>

        <div class="row">

            <div class="col col-lg-12">

                <table class="table">

                    <thead class="thead-dark">

                    <tr>

';
		if ($rol == 'admin') /* line 45 */ {
			echo '
                            <th> Empresa</th>

';
		}
		echo '
                        <th> Nombre</th>

                        <th> Apellidos</th>

                        <th> Correo</th>

                        <th> Rol</th>

                        <th> Telefono</th>

                        <th> Extension</th>

                        <th> Opciones</th>

                    </tr>

                    </thead>

                    <tbody>

';
		$iterations = 0;
		foreach ($usuarios as $usuario) /* line 71 */ {
			if ($usuario->id !== 666) /* line 72 */ {
				echo '                            <tr>

';
				if ($rol == 'admin') /* line 75 */ {
					echo '
                                    <td> ';
					echo LR\Filters::escapeHtmlText($usuario->empresa->nombre) /* line 77 */;
					echo ' </td>

';
				}
				echo '



                                <td> ';
				echo LR\Filters::escapeHtmlText($usuario->nombre) /* line 84 */;
				echo ' </td>




                                <td> ';
				echo LR\Filters::escapeHtmlText($usuario->apellidos) /* line 89 */;
				echo '</td>




                                <td> ';
				echo LR\Filters::escapeHtmlText($usuario->correo) /* line 94 */;
				echo ' </td>




                                <td> ';
				echo LR\Filters::escapeHtmlText($usuario->rol) /* line 99 */;
				echo ' </td>




                                <td> ';
				echo LR\Filters::escapeHtmlText($usuario->telefono) /* line 104 */;
				echo ' </td>




                                <td>';
				echo LR\Filters::escapeHtmlText($usuario->extensiontelefono) /* line 109 */;
				echo '</td>

';
				if ($rol == 'admin') /* line 111 */ {
					echo '
                                    <td>

                                        <a class="btn btn-xs btn-primary" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Usuarios:editar", [$usuario->id])) /* line 115 */;
					echo '">
                                            Editar </a>

                                        <a
                                                class="btn btn-xs btn-danger del" href="';
					echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Usuarios:borrarUsuario", [$usuario->id])) /* line 118 */;
					echo '"> Borrar </a>

                                    </td>

';
				}
				echo '
                            </tr>
';
			}
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
		echo '            <h1> Usuarios </h1>
';
	}

}
