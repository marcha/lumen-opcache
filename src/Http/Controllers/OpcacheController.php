<?php

namespace Marcha\Opcache\Http\Controllers;

use Marcha\Opcache\OpcacheFacade as OPcache;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * Class OpcacheController.
 */
class OpcacheController extends BaseController
{
    /**
     * Clear the OPcache.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function clear()
    {
        return response()->json(['result' => OPcache::clear()]);
    }

    /**
     * Get config values.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function config()
    {
        return response()->json(['result' => OPcache::getConfig()]);
    }

    /**
     * Get status info.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function status()
    {
        return response()->json(['result' => OPcache::getStatus()]);
    }

    /**
     * Compile.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function compile(Request $request)
    {
        return response()->json(['result' => OPcache::compile($request->get('force'))]);
    }
}
