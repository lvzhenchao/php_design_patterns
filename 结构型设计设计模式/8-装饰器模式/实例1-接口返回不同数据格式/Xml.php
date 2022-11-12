<?php
require_once "Decorator.php";

class Xml extends Decorator {

    public function retData() {
        $data = $this->dObj->retData();

        $doc = new DOMDocument();
        foreach ($data as $k => $v) {
            $doc->appendChild($doc->createElement($k, $v));

        }
        return $doc->saveXML();
    }
}