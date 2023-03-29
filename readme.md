# PdfRotate

[![Build Status](https://github.com/czproject/pdf-rotate/workflows/Build/badge.svg)](https://github.com/czproject/pdf-rotate/actions)
[![Downloads this Month](https://img.shields.io/packagist/dm/czproject/pdf-rotate.svg)](https://packagist.org/packages/czproject/pdf-rotate)
[![Latest Stable Version](https://poser.pugx.org/czproject/pdf-rotate/v/stable)](https://github.com/czproject/pdf-rotate/releases)
[![License](https://img.shields.io/badge/license-New%20BSD-blue.svg)](https://github.com/czproject/pdf-rotate/blob/master/license.md)

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
