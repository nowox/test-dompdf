<?php

require 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('defaultFont', 'Open Sans');
$options->set('fontDir', 'vendor/webfontkit/open-sans/fonts');

$dompdf = new Dompdf($options);
$dompdf->loadHtml(file_get_contents('template.html'));


$dompdf->setPaper('A4');
$dompdf->render();
$dompdf->stream();
