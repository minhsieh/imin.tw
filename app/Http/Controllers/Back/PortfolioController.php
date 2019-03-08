<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Portfolio;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $portfolios = Portfolio::orderBy('sort','ASC')->paginate(20);
        return view('back.portfolio.index',compact('portfolios'));
    }

    public function create()
    {
        return view('back.portfolio.form');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'info' => 'required',
            'content' => 'required'
        ]);

        $portfolios = Portfolio::create([
            'name' => $request->input('name') ,
            'display_name' => $request->input('display_name') ,
            'is_com' => $is_com
        ]);

        return redirect()->action('Back\PortfolioController@index')
                        ->with('success','Portfolio created successfully');
    }

    public function edit($id)
    {
        $permission = Permission::find($id);
        return view('manage.permissions.edit',compact('permission'));
    }

    public function update(Request $request , $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:permissions,name,'.$id.',id',
            'display_name' => 'required',
            'is_com' => Rule::in(['on', 'off']),
        ]);

        $is_com = ( $request->input('is_com') == 'on' ) ? true : false;

        $permission = Permission::find($id);
        $permission->update([
            'name' => $request->input('name'),
            'display_name' => $request->input('display_name'),
            'is_com' => $is_com
        ]);

        return redirect()->action('Manage\PermissionController@index')
                        ->with('success','Permission updated successfully');
    }

    public function destroy($id)
    {
        DB::table("permissions")->where('id',$id)->delete();
        return redirect()->action('Manage\PermissionController@index')
                        ->with('success','Permission deleted successfully');
    }
}
