<?php

	namespace CzProject\PdfRotate;

	use setasign\Fpdi;


	class PdfRotate
	{
		const DEGREES_0 = 0;
		const DEGREES_90 = 90;
		const DEGREES_180 = 180;
		const DEGREES_270 = 270;


		/**
		 * @param  string
		 * @param  string
		 * @param  int
		 * @return void
		 */
		public function rotatePdf($sourceFile, $outputFile, $degrees)
		{
			$pdf = new Fpdi\Fpdi;
			$pageCount = $pdf->setSourceFile($sourceFile); //the original file

			for ($i = 1; $i <= $pageCount; $i++) {
				$pageformat = array('Rotate' => $degrees);

				$tpage = $pdf->importPage($i);
				$size = $pdf->getTemplateSize($tpage);

				// get original page orientation
				$orientation = $size['width'] > $size['height'] ? 'L' : 'P';

				$pdf->AddPage($orientation, '', $degrees);
				$pdf->useTemplate($tpage);
			}

			$pdf->Output($outputFile, "F");
		}
	}
