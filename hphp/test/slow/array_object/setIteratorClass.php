<?hh

// Custom ArrayIterator (inherits from ArrayIterator)
class MyArrayIterator extends ArrayIterator {
  // custom implementation
}


// Array of available fruits
<<__EntryPoint>>
function main_set_iterator_class() {
$fruits = array("lemons" => 1, "oranges" => 4, "bananas" => 5, "apples" => 10);

$fruitsArrayObject = new ArrayObject($fruits);

// Set the iterator classname to the newly
$fruitsArrayObject->setIteratorClass('MyArrayIterator');
print_r($fruitsArrayObject->getIterator());
}
