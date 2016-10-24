<?php

	namespace CzProject\PdfRotate;

	use FPDI;


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
			$pdf = new FPDI;
			$pageCount = $pdf->setSourceFile($sourceFile); //the original file

			for ($i = 1; $i <= $pageCount; $i++) {
				$pageformat = array('Rotate' => $degrees);

				$tpage = $pdf->importPage($i);
				$size = $pdf->getTemplateSize($tpage);

				// get original page orientation
				$orientation = $size['w'] > $size['h'] ? 'L' : 'P';

				$pdf->AddPage($orientation, '', $degrees);
				$pdf->useTemplate($tpage);
			}

			$pdf->Output($outputFile, "F");
		}
	}
