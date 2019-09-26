<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Congrat;
use Session;

class CongratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $congrats = Congrat::orderby('created_at', 'desc')->get();
        if($congrats){
            return view('admins.congrats.index')->withCongrats($congrats);
        }
        else {
            return view('admins.congrats.index')  ;
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'content' => 'required|max:511'
            ));
        $congrat = new Congrat;

        $congrat->content = $request->content;

        $congrat->save();
        Session::flash('success', 'New congrat "' .$congrat->content.'" has been created');
        return redirect()->route('congrats.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $this->validate($request, array(
            'content' => 'required|max:511',        
            ));
        $congrat = Congrat::find($id);
        $congrat->content = $request->content;
        $congrat->save();
        Session::flash('success', 'congrat "'.$congrat->content.'" has been updated');
        return redirect()->route('congrats.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $congrat = Congrat::find($id);
        $content = $congrat->content;
        $congrat->delete();
        Session::flash('success', 'congrat "'.$content. '" has been removed');
        return redirect()->route('congrats.index'); 
    }
}
