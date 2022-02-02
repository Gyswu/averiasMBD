<?php

use Latte\Runtime as LR;

/** source: /var/www/nette/app/Presenters/templates/@layout.latte */
final class Template79256ca434 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['head' => 'blockHead', 'sidebar' => 'blockSidebar', 'usuario' => 'blockUsuario', 'footer' => 'blockFooter', 'scripts' => 'blockScripts'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '
<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <title> ';
		if ($this->hasBlock("title")) /* line 15 */ {
			echo ' ';
			$this->renderBlock('title', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('striphtml', $ʟ_fi, $s));
			}) /* line 15 */;
			echo ' | ';
		}
		echo ' AveriasMBD </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 27 */;
		echo '/css/style.css">

    ';
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('head', get_defined_vars()) /* line 29 */;
		echo '

</head>

<body class="d-flex flex-column min-vh-100">

';
		$this->renderBlock('sidebar', get_defined_vars()) /* line 35 */;
		echo '

';
		$this->renderBlock('usuario', get_defined_vars()) /* line 37 */;
		echo '


<div class=container>
';
		$iterations = 0;
		foreach ($flashes as $flash) /* line 92 */ {
			echo '        <div';
			echo ($ʟ_tmp = array_filter(['alert', 'alert-' . $flash->type])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 92 */;
			echo '>';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 92 */;
			echo '</div>
';
			$iterations++;
		}
		echo "\n";
		$this->renderBlock('content', [], 'html') /* line 94 */;
		echo '</div>
';
		$this->renderBlock('footer', get_defined_vars()) /* line 96 */;
		echo "\n";
		$this->renderBlock('scripts', get_defined_vars()) /* line 149 */;
		echo '


</body>
</html>
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['datos' => '59', 'flash' => '92'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		$this->createTemplate('components/form.latte', $this->params, "import")->render() /* line 5 */;
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block head} on line 29 */
	public function blockHead(array $ʟ_args): void
	{
		echo ' ';
	}


	/** {block sidebar} on line 35 */
	public function blockSidebar(array $ʟ_args): void
	{
		echo ' ';
	}


	/** {block usuario} on line 37 */
	public function blockUsuario(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">

        <a class="navbar-brand" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) /* line 41 */;
		echo '"> Home </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"

                data-bs-target=".dual-collapse2"

                aria-controls="navbarSupportedContent" aria-expanded="false"

                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"> </span>

        </button>

        <div class="collapse  ml-2 navbar-collapse w-100 order-0 dual-collapse2" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">

';
		$iterations = 0;
		foreach ($menu as $datos) /* line 59 */ {
			echo "\n";
			if ($datos['mostrar']) /* line 61 */ {
				echo '
                        <li class="nav-item">

                            <a class="nav-link" href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link($datos['nhref'])) /* line 65 */;
				echo '">';
				echo LR\Filters::escapeHtmlText($datos['nombre']) /* line 65 */;
				echo '<span
                                        class="sr-only">(current)</span></a>
                        </li>

';
			}
			echo "\n";
			$iterations++;
		}
		echo '
            </ul>

        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2 mr-3 justify-content-end">
            <ul class="navbar-nav ">
                <li class="nav-item ">
';
		if ($usuarioDb) /* line 79 */ {
			echo '                        <a>';
			echo LR\Filters::escapeHtmlText($usuarioDb->nombre) /* line 80 */;
			echo ' <a class="nav-link " href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Sign:out")) /* line 80 */;
			echo '"> (salir)</a></a>
';
		}
		else /* line 81 */ {
			echo '                        Invitado
';
		}
		echo '                </li>
            </ul>
        </div>
    </nav>
';
	}


	/** {block footer} on line 96 */
	public function blockFooter(array $ʟ_args): void
	{
		echo '    <!-- Footer -->
    <footer class="bg-dark page-footer font-small pt-4 text-white mt-auto">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text-uppercase">Desarollo</h5>
                    <p>Software desarollado por Gyswu con la colaboracion de VicHaunter para MBD Informatica</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Work in progress</h5>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a href="https:www.mbdinformatica.es"> MBD Informatica</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

';
	}


	/** {block scripts} on line 149 */
	public function blockScripts(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <script src="https://nette.github.io/resources/js/3/netteForms.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css">


    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 176 */;
		echo '/js/bootstrap-select.js"></script>



    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 180 */;
		echo '/js/nette.ajax.js"></script>

    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 182 */;
		echo '/js/main.js"></script>



    <script>
        $(document).ready(function () {
            $(".del").click(function () {
                confirm(\'¿Seguro que lo quieres borrar?\')
            });

            $(".alert").fadeTo(2000, 500).slideUp(500, function () {
                $(".alert").slideUp(500);
            });
        });

        $(function () {
            $(\'[data-toggle="popover"]\').popover()
        })


    </script>
    <script>
        $.fn.datepicker.defaults.format = "dd/mm/yyyy";
        $(\'.datepicker\').datepicker({
            format: \'dd/mm/yyyy\',
            startDate: \'-3d\'
        });

    </script>
    <script>

    </script>
';
	}

}
