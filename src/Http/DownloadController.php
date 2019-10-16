<?php

namespace Variantgroup\LeasingCalculator\Http;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;

class DownloadController extends Controller
{
    public function __invoke()
    {
        $pdf = __DIR__ . "/../../resources/pdf/application.pdf";

        $headers = [
            'Content-Type: application/pdf',
        ];

        return Response::download($pdf, 'leasing_application.pdf', $headers);
    }
    
}