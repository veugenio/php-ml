<?php

$result = array();
$result[] = '4 5 1';

$names = array(
  'João' => 'h',
  'Maria' => 'm',
  'Silva' => 'h',
  'Joana' => 'm',
);

foreach($names as $name => $r) {
	$result[] = convert_name($name);
	$result[] = $r === 'h' ? 1 : 0;
}

function convert_name($name) {
	return join(' ', array_map(function ($char) {
		return ord($char);
  }, str_split($name)));
}

file_put_contents('names.data', join(PHP_EOL, $result));
