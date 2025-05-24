<?php


$attributeListDumper = new AttributeListDumper(new Config(require __DIR__ . '/attributeValueDumpers.php'));
return [
	'int'            => 'strval',
	'bool'           => NULL,
	'enum'           => NULL,
	'attribute-list' => [$attributeListDumper, 'dump'],
	'inf'            => 'strval',
	'byterange'      => 'strval',
	'datetime'       => ['Iso8601Transformer', 'toString']
];

?>