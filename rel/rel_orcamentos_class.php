<?php

// chamando os arquivos necessários do DOMPdf
require_once '../dompdf/lib/html5lib/Parser.php';
require_once '../dompdf/lib/php-font-lib-master/src/FontLib/Autoloader.php';
require_once '../dompdf/lib/php-svg-lib-master/src/autoload.php';
require_once '../dompdf/src/Autoloader.php';

// definindo os namespaces
Dompdf\Autoloader::register();
use Dompdf\Dompdf;

$id = $_GET['id'];

// inicializando o objeto Dompdf
$dompdf = new Dompdf();

// coloque nessa variável o código HTML que você quer que seja inserido no PDF
$codigo_html = file_get_contents("http://localhost/fincorp/rel/rel_orcamentos.php?id=".$id);

$dompdf->loadHtml($codigo_html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("relatorioOrçamento.pdf", array("Attachment"=>0));

?>