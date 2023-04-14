<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;

class TicketDocumentController extends Controller
{

    public function create()
    {
        $htmlFile = readfile("ticket-template.html", "./");
        $dompdf = new Dompdf();
        $dompdf->loadHtmlFile($htmlFile);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();

        return ("");
    }

}