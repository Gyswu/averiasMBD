<?php
// source: /var/www/nette/app/AdminModule/Presenters/templates/Piezas/default.latte

use Latte\Runtime as LR;

class Template98f0f05a65 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'content' => 'html',
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
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			if (isset($this->params['cambio'])) trigger_error('Variable $cambio overwritten in foreach on line 37');
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
    <div class="container">
        <div class="row">
            <div class="col col-lg-6">
                <h1>Cambios de Piezas</h1>
            </div>
            <div class="col col-lg-6">

            </div>
            <div class="col col-lg-10">
                <table class="table">
                    <thead class="thead-dark">
<?php
		if ($mode == 0) {
?>
                            <th>
                                Maquina
                            </th>
<?php
		}
?>
                        <th>
                            Pieza
                        </th>
                        <th>
                            Fecha
                        </th>
                        <th>
                            Razón
                        </th>
                        <th>
                            Origen
                        </th>
                        <th>
                            Tecnico
                        </th>
                        <th>
                            Garantía
                        </th>
                    </thead>
<?php
		$iterations = 0;
		foreach ($cambios as $cambio) {
?>
                        <tr>
<?php
			if ($mode == 0) {
?>
                                <td>x
                                    <?php echo LR\Filters::escapeHtmlText($cambio->maquina->id) /* line 41 */ ?>

                                </td>
<?php
			}
?>
                            <td>
                                Pieza (TODO)
                            </td>
                            <td>
                                Añadir campo fecha
                            </td>
                            <td>
                                <?php echo LR\Filters::escapeHtmlText($cambio->causa) /* line 51 */ ?>

                            </td>
                            <td>
                                <?php echo LR\Filters::escapeHtmlText($cambio->origen) /* line 54 */ ?>

                            </td>
                            <td>
                                <?php echo LR\Filters::escapeHtmlText($cambio->tecnico) /* line 57 */ ?>

                            </td>
                            <td>
<?php
			if ($cambio->garantia) {
?>
                                    Si
<?php
			}
			else {
?>
                                    No
<?php
			}
?>
                            </td>
                        </tr>
<?php
			$iterations++;
		}
?>
                </table>

            </div>
        </div>
    </div><?php
	}

}
