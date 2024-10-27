<?php

namespace App\Services\Operation\Others;

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class ReportClass
{
    public function print($request){
        switch($request->type){
            case 1:
                return $this->scholars();
            break;
            case 2:

            break;
            case 3:

            break;
            case 4:

            break;
        }
    }

    public function types(){
        return [
            ['name' => 'Scholars Status','info' => 'Summary Status of Scholars', 'report' => 1],
            ['name' => 'Scholars w/ Respective Status','info' => 'List of All Scholars with Respective Status','report' => 2],
            ['name' => 'Graduates w/ Honors','info' => 'Summary of DOST-SEI Scholar-Graduates with Honors','report' => 3],
            ['name' => 'Scholars w/ No Report','info' => 'No Report more than a year / Non-Compliance','report' => 4]
        ];
    }

    private function scholars(){
        $array = [
            'agency' => \Auth::user()->myrole->agency->region,
            'data' => 'data',
        ];
        $pdf = \PDF::loadView('reports.scholars',$array)->setPaper('a4','landscape');
        $pdf->output();
        $dompdf = $pdf->getDomPDF();
        $canvas = $dompdf->getCanvas();
        $canvas->page_script(function ($pageNumber, $pageCount, $canvas, $fontMetrics) {
            $totalPagesPerCopy = $pageCount; 
            $text = "PAGE $totalPagesPerCopy";
            $font = $fontMetrics->get_font("Helvetica", "normal");
            $size = 7.5;
            $width = $fontMetrics->get_text_width($text, $font, $size);
            $canvas->text(36,560, $text, $font, $size);
        });

        return $pdf->stream('scholars.pdf');
    }
}
