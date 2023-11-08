<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadsController extends Controller
{
    //
    public function index()
    {
        $filePath =public_path("assets/m31/documents/M31 Research Company Profile.pdf");
        $headers = ['Content-Type: application/pdf'];

        return response()->download($filePath, "M31 Research Company Profile.pdf", $headers);

    }
}
