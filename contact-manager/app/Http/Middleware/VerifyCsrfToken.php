<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array 
     */
    protected $except = [
        
            'contacts',
            'contacts/*',
        ];
        
    protected function tokensMatch($request)
    {
        $excluded = collect($this->except)->contains(function ($except) use ($request) {
            return $request->fullUrlIs($except) || $request->is($except);
        });
    
        if ($excluded) {
            \Log::info('CSRF token check excluded for URI: ' . $request->fullUrl());
        }
    
        return $excluded || parent::tokensMatch($request);
    }
    
}
