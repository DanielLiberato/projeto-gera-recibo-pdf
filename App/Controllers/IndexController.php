<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;
use Dompdf\Dompdf;

class IndexController extends Action {

	public function index() 
	{
		$this->render('index');
	}
	public function geraPdf()
	{
		$dompdf= new Dompdf();
		ob_start();
		include __DIR__ . '../../Views/index/modelo_recibo.phtml';
		$dompdf->loadHtml(ob_get_clean());
		$dompdf->setPaper("A4");
		$dompdf->render();
		$dompdf->stream('Recibo.pdf',["Attachment" => false]);
	}
}


?>