<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

class FileDownloadController extends Controller
{
    public function downloadPDF()
    {
        $filePath = public_path('files/Sacoret_Credentials Offering Pricelist.pdf'); // Adjust the file name as necessary

        if (file_exists($filePath)) {
            return Response::download($filePath);
        } else {
            return abort(404); // File not found
        }
    }
}
