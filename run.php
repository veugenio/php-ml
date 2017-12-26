<?php

$train_file = (dirname(__FILE__) . "/names.net");
$ann = fann_create_from_file($train_file);
if ($ann) {
	// $input = array(74, 111, 195, 163, 111);
	$input = array(77, 97, 114, 105, 97);
  $out = fann_run($ann, $input);
  print_r($out);
  fann_destroy($ann);
}
