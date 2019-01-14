<?hh // strict
// Copyright 2004-present Facebook. All Rights Reserved.

<<file: MyAttribute('abc123')>>

class MyAttribute implements HH\FileAttribute {
  public function __construct(public string $s) { }
}

function reflect(): void {
  $rf = new ReflectionFile("hphp/test/slow/attributes/file_attribute.php");
  $attribute = $rf->getAttributeClass(MyAttribute::class);
  $attribute_value = $attribute->s;
  var_dump($attribute_value);
}

echo reflect();