<?php

namespace App\Http\Controllers;

use App\Models\Ideas;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIdeasRequest;
use App\Http\Requests\UpdateIdeasRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IdeasController extends Controller
{
    public function index()
    {
        $ideas = Ideas::join('users','ideas.user_id','=', 'users.id')->get();
        return view('manager.manager', compact('ideas'));
    }
    public function addindex()
    {
         return view('manager.idea');
    }
    public function routeideas()
    {
        $user = Auth::user();
        $ideas =  DB::table('ideas')
         ->get();;
        return view('client.home', compact('ideas'));
    }
    public function clienthome()
    {
        $user = Auth::user();
        $ideas =  DB::table('ideas')
         ->get();;
        return view('client.clienthome', compact('ideas'));
    }
    public function routeclient()
    {
        $user = Auth::user();
        $where[] = ['users.role_id', '=', $user->role_id];

        $ideas =  DB::table('users')
        ->where($where)
         ->get();
        return view('manager.manager', compact('ideas'));
    }
    public function view($id)
    {
        $where = [];
        $where[] = ['ideas.id', '=', $id];

        $ideas = DB::table('ideas')
            ->where($where)
            ->first();
         return view('viewblog', compact('ideas', 'ideas'));
    }
    public function clientview($id)
    {
        $where = [];
        $where[] = ['users.id', '=', $id];

        $ideas = DB::table('users')
            ->where($where)
            ->first();
         return view('manager.clientview', compact('ideas', 'ideas'));
    }
    public function clientcom($id)
    {
        $where = [];
        $where[] = ['users.id', '=', $id];

        $ideas = DB::table('users')
            ->where($where)
            ->first();
         return view('client.clientcom', compact('ideas', 'ideas'));
    }
    public function pre(Request $request)
    {
        $user = Auth::user();

        $id =$user->id;

       $users= DB::table('users')
            ->where('id', $id)
            ->update(['preferred_product' => $request->input('preferred_product')]);

         return redirect()->route('clienthome');
    }

    public function ideaas(Request $request)
    {
        $user = Auth::user();
        $idea = new Ideas;
        $idea->industry_type = $request->input('industry_type');
        $idea->product_type = $request->input('product_type');
         $idea->estimated_budget = $request->input('estimated_budget');
        $idea->location = $request->input('location');
         $idea->user_id =  $user->id;

        $idea->save();

        return redirect()->route('home');
    }
}
