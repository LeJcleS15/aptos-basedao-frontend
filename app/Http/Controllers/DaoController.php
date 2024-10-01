<?php

namespace App\Http\Controllers;

use Auth;
use Redirect;
use Illuminate\Http\Request;

class DaoController extends Controller
{

    public function showAll(){
        try {
            return view('daos.show_all_daos');
        } catch(\Exception $e){
            abort(400);
        }
    }

    public function show($id){
        try {
            return view('daos.show_dao', compact('id'));
        } catch(\Exception $e){
            abort(400);
        }
    }

    public function create(){
        try {
            return view('daos.create_dao');
        } catch(\Exception $e){
            abort(400);
        }
    }

    public function edit($id){
        try {
            return view('daos.edit_dao', compact('id'));
        } catch(\Exception $e){
            abort(400);
        }
    }

}
