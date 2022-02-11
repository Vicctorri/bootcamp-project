<?php
namespace App\Services;

use Illuminate\Http\Request;

class DebugRequestActivityLogger extends AbstractRequestActivityLogger
{
    protected function collectRequestData(Request $request): array
    {
        return [
            'ipAddress'=> $request->ip(),
            'url'=> $request->fullUrl(),
            'method'=> $request->method(),
            'input'=>$request->all(),
        ];
    }
}
