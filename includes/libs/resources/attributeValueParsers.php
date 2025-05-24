<?php

return [
	'decimal-integer'               => 'intval',
	'hexadecimal-sequence'          => 'strval',
	'decimal-floating-point'        => 'floatval',
	'signed-decimal-floating-point' => 'floatval',
	'quoted-string'                 => function($value) {
	return trim($value, '"');
},
	'enumerated-string'             => 'strval',
	'decimal-resolution'            => ['Resolution', 'fromString'],
	'datetime'                      => function($value) {
	return Iso8601Transformer::fromString(trim($value, '"'));
},
	'byterange'                     => function($value) {
	return Byterange::fromString(trim($value, '"'));
}
];

?>