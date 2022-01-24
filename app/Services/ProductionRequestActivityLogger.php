<?php

namespace App\Services;

use Illuminate\Http\Request;

class ProductionRequestActivityLogger
{
    protected function collectRequestData(Request $request): array
    {
        return [
            'url'=>$request->url(),
            'ipAddress'=>$request->ip(),
        ];
    }

}
