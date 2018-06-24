
# PdfRotate

Rotate PDF documents from PHP.

<a href="https://www.patreon.com/bePatron?u=9680759"><img src="https://c5.patreon.com/external/logo/become_a_patron_button.png" alt="Become a Patron!" height="35"></a>
<a href="https://www.paypal.me/janpecha/1eur"><img src="https://buymecoffee.intm.org/img/button-paypal-white.png" alt="Buy me a coffee" height="35"></a>


## Installation

[Download a latest package](https://github.com/czproject/pdf-rotate/releases) or use [Composer](http://getcomposer.org/):

```
composer require czproject/pdf-rotate
```

`CzProject\PdfRotate` requires PHP 5.3.0 or later.


## Usage


``` php
<?php

use CzProject\PdfRotate\PdfRotate;

$pdf = new PdfRotate;
$sourceFile = '/path/to/source.pdf';
$outputFile = '/path/to/output.pdf';

$pdf->rotatePdf($sourceFile, $outputFile, $pdf::DEGREES_90);
```

------------------------------

License: [New BSD License](license.md)
<br>Author: Jan Pecha, https://www.janpecha.cz/
