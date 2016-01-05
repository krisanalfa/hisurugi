<?php

namespace HitenMitsurugi\Ryutsuisen\Http\Controllers;

use Route;
use Validator;
use Illuminate\Http\Request;
use HitenMitsurugi\Ryutsuisen\RouteCollector;
use HitenMitsurugi\Ryutsuisen\Contracts\Role as RoleContract;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Import all permission from registered named routes.
     *
     * @param  \HitenMitsurugi\Ryutsuisen\RouteCollector $routeCollector
     *
     * @return \Illuminate\Http\Response
     */
    public function bulk(RouteCollector $routeCollector)
    {
        return view('ryutsuisen::permission.bulk', [
            'routes' => $routeCollector->all(),
        ]);
    }
}
