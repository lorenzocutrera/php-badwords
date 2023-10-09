<?php

$testo = $_POST['testo'];
$censura = $_POST['censura'];

echo '<pre>';
var_dump($testo);
var_dump($censura);
echo '</pre>';

$testo_censurato = str_replace($censura, '***', $testo );
$testo_originale = strlen($testo);
$testo_modificato = strlen($testo_censurato);

?>


<h2><?php echo $testo_censurato ?></h2>
<p>il testo originale ha <?php echo $testo_originale ?> caratteri</p>
<p>il testo modificato ha <?php echo $testo_modificato ?> caratteri</p>