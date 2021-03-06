--TEST--
Check for protocol buffers descriptor builder should be throw an exception when passed added tag
--FILE--
<?php

$builder = new ProtocolBuffersDescriptorBuilder();
$builder->addField(1, new ProtocolBuffersFieldDescriptor(array(
	"type"     => ProtocolBuffers::TYPE_STRING,
	"name"     => "name",
	"required" => false,
	"optional" => false,
	"repeated" => true,
	"packable" => false,
	"default"  => "",
)));
try{
	$builder->addField(1, new ProtocolBuffersFieldDescriptor(array(
		"type"     => ProtocolBuffers::TYPE_STRING,
		"name"     => "name",
		"required" => false,
		"optional" => false,
		"repeated" => true,
		"packable" => false,
		"default"  => "",
	)), true);
	echo "OK" . PHP_EOL;
} catch (Exception $e) {
	echo "FAULT" . PHP_EOL;
}
--EXPECT--
OK
