<?php

namespace App\Http\Controllers;

use Auth;
use Redirect;
use App\Models\Dao;
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

    public function faucet(){
        try {
            return view('daos.faucet');
        } catch(\Exception $e){
            abort(400);
        }
    }


    public function getNextAvailableDao($dao_type){
        try {

            // Fetch the first available DAO that hasn't been initialized
            $dao = Dao::where('dao_type', $dao_type)
                ->where('is_initialized', false)
                ->first();

            if (!$dao) {
                return response()->json(['error' => 'No DAOs available'], 404);
            }

            return response()->json($dao);

        } catch(\Exception $e){
            abort(400, 'Error fetching available DAO');
        }
    }

    public function setTakenDao($dao_type){
        try {

            // Update the DAO record to mark it as initialized
            $dao = Dao::where('dao_type', $dao_type)
                    ->where('dao_id', $id)
                    ->first();

            if (!$dao) {
                return response()->json(['error' => 'DAO not found'], 404);
            }

            $dao->is_initialized = true;
            $dao->initializer = auth()->user()->id;  // Set the user who initialized it
            $dao->save();

            return response()->json(['success' => 'DAO updated successfully']);

        } catch(\Exception $e){
            abort(400);
        }
    }

}
