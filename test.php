<?php
$num_input = 5;
$num_output = 1;
$num_layers = 3;
$num_neurons_hidden = 3;

$ann = fann_create_standard($num_layers, $num_input, $num_neurons_hidden, $num_output);
if ($ann) {
  fann_set_activation_function_hidden($ann, FANN_SIGMOID_SYMMETRIC);
  fann_set_activation_function_output($ann, FANN_SIGMOID_SYMMETRIC);
  $filename = dirname(__FILE__) . "/names.data";

	if (fann_train_on_file($ann, $filename, 500000, 1000, 0.001)) {
		fann_save($ann, dirname(__FILE__) . "/names.net");
	}
}
