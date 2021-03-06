<?hh
<<__EntryPoint>> function main(): void {
$document = new DOMDocument;
$root = $document->createElement('root');
$document->appendChild($root);

$cdata = $document->createElement('cdata');
$root->appendChild($cdata);

$cdatanode = $document->createCDATASection('');
$cdata->appendChild($cdatanode);
$cdatanode->appendData('data');
echo "CDATA Length (one append): " . $cdatanode->length . "\n";

$cdatanode->appendData('><&"');
echo "CDATA Length (two appends): " . $cdatanode->length . "\n";

echo "CDATA Content: " . $cdatanode->data . "\n";

echo "\n" . $document->saveXML();
}
