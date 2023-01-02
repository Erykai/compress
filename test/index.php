<?php
use Erykai\Compress\Compress;

require "vendor/autoload.php";

(new Compress(__DIR__ . "/storage/", "DSC_0696.JPG", 25))->img()->send();