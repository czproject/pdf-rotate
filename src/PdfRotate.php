<?php

	declare(strict_types=1);

	namespace CzProject\PdfRotate;

	use setasign\Fpdi;


	class PdfRotate
	{
		const DEGREES_0 = 0;
		const DEGREES_90 = 90;
		const DEGREES_180 = 180;
		const DEGREES_270 = 270;


		/**
		 * @param  string $sourceFile
		 * @param  string $outputFile
		 * @param  int $degrees
		 * @return void
		 */
		public function rotatePdf($sourceFile, $outputFile, $degrees)
		{
			$pdf = new Fpdi\Fpdi;
			$pageCount = $pdf->setSourceFile($sourceFile); //the original file

			for ($i = 1; $i <= $pageCount; $i++) {
				$tpage = $pdf->importPage($i);
				$size = $pdf->getTemplateSize($tpage);
				$orientation = ''; // use default orientation
				$newSize = ''; // use default size

				// get original page orientation
				if (isset($size['orientation'])) {
					$orientation = $size['orientation'];

				}

				if (isset($size['width'], $size['height'])) {
					if ($orientation === '') {
						$orientation = ($size['width'] > $size['height'] ? 'L' : 'P');
					}

					$newSize = [$size['width'], $size['height']];
				}

				$pdf->AddPage($orientation, $newSize, $degrees);
				$pdf->useTemplate($tpage);
			}

			$pdf->Output($outputFile, "F");
		}
	}
