
# PdfRotate

Rotate PDF documents from PHP.

<a href="https://www.janpecha.cz/donate/"><img src="https://buymecoffee.intm.org/img/donate-banner.v1.svg" alt="Donate" height="100"></a>


## Installation

[Download a latest package](https://github.com/czproject/pdf-rotate/releases) or use [Composer](http://getcomposer.org/):

```
composer require czproject/pdf-rotate
```

`CzProject\PdfRotate` requires PHP 5.3.0 or later.


## Usage


``` php
use CzProject\PdfRotate\PdfRotate;

$pdf = new PdfRotate;
$sourceFile = '/path/to/source.pdf';
$outputFile = '/path/to/output.pdf';

$pdf->rotatePdf($sourceFile, $outputFile, $pdf::DEGREES_90);
```

------------------------------

License: [New BSD License](license.md)
<br>Author: Jan Pecha, https://www.janpecha.cz/
