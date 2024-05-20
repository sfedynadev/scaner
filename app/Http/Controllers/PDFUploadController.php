<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Smalot\PdfParser\Parser;

class PDFUploadController extends Controller
{
    public function upload()
    {
        return view('upload');
    }

    public function parse(Request $request)
    {
        $request->validate([
            'pdf' => 'required|file|mimes:pdf|max:2048',
        ]);

        $pdfPath = $request->file('pdf')->store('pdfs');

        $parser = new Parser();
        $pdf = $parser->parseFile(storage_path('app/' . $pdfPath));
        $text = $pdf->getText();
        /*$parser = new Parser();
        $pdf = $parser->parseFile(storage_path('app/' . $pdfPath));
        $text = $pdf->getText();*/

        return view('parsed', ['text' => $text]);
    }
}
