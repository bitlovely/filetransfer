<?php

return ['decimal-integer' => 'strval', 'hexadecimal-sequence' => 'strval', 'decimal-floating-point' => 'strval', 'signed-decimal-floating-point' => 'strval', 'quoted-string' => function($value) {
	return sprintf('"%s"', $value);
}, 'enumerated-string' => 'strval', 'decimal-resolution' => 'strval', 'datetime' => function($value) {
	return sprintf('"%s"', Iso8601Transformer::toString($value));
}, 'byterange' => function($value) {
	return sprintf('"%s"', $value);
}];

?>