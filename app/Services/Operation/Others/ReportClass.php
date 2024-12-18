<?php

namespace App\Services\Operation\Others;

use App\Models\Scholar;
use App\Models\ListDropdown;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class ReportClass
{
    public function print($request){
        switch($request->type){
            case 1:
                return $this->scholars($request);
            break;
            case 2:
                return $this->scholars2($request);
            break;
            case 3:
                return $this->scholars3($request);
            break;
            case 4:
                return $this->scholars4($request);
            break;
        }
    }

    public function types(){
        return [
            ['name' => 'Scholars Status','info' => 'Summary Status of Scholars', 'report' => 1],
            ['name' => 'Scholars w/ Respective Status','info' => 'List of All Scholars with Respective Status','report' => 2],
            ['name' => 'Graduates w/ Honors','info' => 'Summary of DOST-SEI Scholar-Graduates with Honors','report' => 4],
            ['name' => 'Scholars w/ No Report','info' => 'No Report more than a year / Non-Compliance','report' => 3]
        ];
    }

    private function scholars($request){
        $year = date('Y');
        $program = $request->program;
        $statuses = [8, 9, 10, 11, 12,7,6, 4, 3, 5]; 
        $data = []; 

        for ($i = $year; $i > $year - 4; $i--) { 
            $counts = [];
        
            foreach ($statuses as $status) {
                $counts[] = Scholar::where('status_id', $status)
                ->where('awarded_year', $i)
                ->whereHas('education', function ($query){
                    $query->whereHas('campus', function ($subQuery){
                        $subQuery->where('agency_id', \Auth::user()->myrole->agency_id); 
                    });
                })
                ->whereHas('program', function ($query) use ($program){
                    $query->whereHas('program', function ($subQuery) use ($program){
                        $subQuery->where('id', $program); 
                    });
                })
                ->count();
            }
        
            $data[] = [
                'year' => $i, 
                'counts' => $counts 
            ];
        }
        $array = [
            'agency' => \Auth::user()->myrole->agency->region,
            'ay' => $request->academicyear,
            'program' => ListDropdown::where('id',$request->program)->value('name'),
            'term' => ListDropdown::where('id',$request->term)->value('name'),
            'scholars' => $data,
        ];
        $pdf = \PDF::loadView('reports.scholars',$array)->setPaper('a4','landscape');
        $pdf->output();
        $dompdf = $pdf->getDomPDF();
        $canvas = $dompdf->getCanvas();
        $canvas->page_script(function ($pageNumber, $pageCount, $canvas, $fontMetrics) {
            $totalPagesPerCopy = $pageCount; 
            $text = "PAGE $totalPagesPerCopy";
            $font = $fontMetrics->get_font("Helvetica", "normal");
            $size = 9;
            $width = $fontMetrics->get_text_width($text, $font, $size);
            $canvas->text(37,557, $text, $font, $size);
        });

        return $pdf->stream('summary.pdf');
    }

    private function scholars2($request){
       
        $array = [
            'agency' => \Auth::user()->myrole->agency->region,
            'ay' => $request->academicyear,
            'program' => ListDropdown::where('id',$request->program)->value('name'),
            'term' => ListDropdown::where('id',$request->term)->value('name'),
            'scholars' => '',
        ];
        $pdf = \PDF::loadView('reports.scholars2',$array)->setPaper('a4','landscape');
        $pdf->output();
        $dompdf = $pdf->getDomPDF();
        $canvas = $dompdf->getCanvas();
        $canvas->page_script(function ($pageNumber, $pageCount, $canvas, $fontMetrics) {
            $totalPagesPerCopy = $pageCount; 
            $text = "PAGE $totalPagesPerCopy";
            $font = $fontMetrics->get_font("Helvetica", "normal");
            $size = 7.5;
            $width = $fontMetrics->get_text_width($text, $font, $size);
            $canvas->text(37,557, $text, $font, $size);
        });

        return $pdf->stream('scholars-respective-status.pdf');
    }

    private function scholars3($request){
       
        $array = [
            'agency' => \Auth::user()->myrole->agency->region,
            'ay' => $request->academicyear,
            'program' => ListDropdown::where('id',$request->program)->value('name'),
            'term' => ListDropdown::where('id',$request->term)->value('name'),
            'scholars' => '',
        ];
        $pdf = \PDF::loadView('reports.scholars3',$array)->setPaper('a4','landscape');
        $pdf->output();
        $dompdf = $pdf->getDomPDF();
        $canvas = $dompdf->getCanvas();
        $canvas->page_script(function ($pageNumber, $pageCount, $canvas, $fontMetrics) {
            $totalPagesPerCopy = $pageCount; 
            $text = "PAGE $totalPagesPerCopy";
            $font = $fontMetrics->get_font("Helvetica", "normal");
            $size = 7.5;
            $width = $fontMetrics->get_text_width($text, $font, $size);
            $canvas->text(37,557, $text, $font, $size);
        });

        return $pdf->stream('scholars-respective-status.pdf');
    }

    private function scholars4($request){
       
        $array = [
            'agency' => \Auth::user()->myrole->agency->region,
            'ay' => $request->academicyear,
            'program' => ListDropdown::where('id',$request->program)->value('name'),
            'term' => ListDropdown::where('id',$request->term)->value('name'),
            'scholars' => '',
        ];
        $pdf = \PDF::loadView('reports.scholars4',$array)->setPaper('a4','landscape');
        $pdf->output();
        $dompdf = $pdf->getDomPDF();
        $canvas = $dompdf->getCanvas();
        $canvas->page_script(function ($pageNumber, $pageCount, $canvas, $fontMetrics) {
            $totalPagesPerCopy = $pageCount; 
            $text = "PAGE $totalPagesPerCopy";
            $font = $fontMetrics->get_font("Helvetica", "normal");
            $size = 7.5;
            $width = $fontMetrics->get_text_width($text, $font, $size);
            $canvas->text(37,557, $text, $font, $size);
        });

        return $pdf->stream('scholars-respective-status.pdf');
    }
}
