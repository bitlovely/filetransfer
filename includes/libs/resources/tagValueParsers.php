<?php


$attributeListParser = new AttributeListParser(new Config(require __DIR__ . '/attributeValueParsers.php'), new AttributeStringToArray());
return [
	'int'            => 'intval',
	'bool'           => NULL,
	'enum'           => NULL,
	'attribute-list' => [$attributeListParser, 'parse'],
	'inf'            => ['Inf', 'fromString'],
	'byterange'      => ['Byterange', 'fromString'],
	'datetime'       => ['Iso8601Transformer', 'fromString']
];

?>