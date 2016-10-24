
# PdfRotate

## Usage


``` php
<?php

use CzProject\PdfRotate\PdfRotate;

$pdf = new PdfRotate;
$sourceFile = '/path/to/source.pdf';
$outputFile = '/path/to/output.pdf';

$pdf->rotatePdf($sourceFile, $outputFile, $pdf::DEGREES_90);
```


Installation
------------

[Download a latest package](https://github.com/czproject/pdf-rotate/releases) or use [Composer](http://getcomposer.org/):

```
composer require [--dev] czproject/pdf-rotate
```

`CzProject\PdfRotate` requires PHP 5.3.0 or later.


------------------------------

License: [New BSD License](license.md)
<br>Author: Jan Pecha, https://www.janpecha.cz/
