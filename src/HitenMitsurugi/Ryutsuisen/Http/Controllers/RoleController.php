<?php

namespace HitenMitsurugi\Ryutsuisen\Http\Controllers;

use Route;
use Validator;
use Illuminate\Http\Request;
use HitenMitsurugi\Ryutsuisen\RouteCollector;
use HitenMitsurugi\Ryutsuisen\Contracts\Role as RoleContract;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RoleContract $role)
    {
        return view('ryutsuisen::role.index', [
            'collection' => app('ryutsuisen.role')->orderBy('name')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ryutsuisen::role.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        return redirect('role.index');
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
     * Import all role from registered named routes.
     *
     * @param  \HitenMitsurugi\Ryutsuisen\RouteCollector $routeCollector
     *
     * @return \Illuminate\Http\Response
     */
    public function bulk(RouteCollector $routeCollector)
    {
        return view('ryutsuisen::role.bulk', [
            'routes' => $routeCollector->all(),
        ]);
    }

    /**
     * Get a validator for an incoming store request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255|unique:roles',
            'display_name' => 'max:255',
            'description' => 'max:255',
        ]);
    }
}
