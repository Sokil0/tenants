<?php

namespace App\Http\Middleware;

use anlutro\LaravelSettings\Facades\Setting;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SetTenantIdSettings
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($tenantId = $request->header('tenant_id')) {
            Setting::setExtraColumns(array(
                'tenant_id' => $tenantId
            ));
        }

        return $next($request);
    }
}
