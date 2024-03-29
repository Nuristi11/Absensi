<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transformer\UserTransformer;
use Auth;
use App\User;

class UserController extends Controller
{
    
    public function users(User $user)
    {
        $users = $user->all();

        return fractal()
        ->collection ($users)
        ->transformWith(new UserTransformer())
        ->includeCharacter()
        ->toArray();
    }

    public function profile(User $user)
    {
        $user = $user->find(Auth::user()->id);

        return fractal()
            ->item(user)
            ->transformWith(new UserTransformer)
            ->includeabsen()
            ->toArray();
    }

    public function profileById(User $user,$id)
    {
        $user = $user->find(id);

        return fractal()
            ->item($user)
            ->transformWith(new UserTransformer)
            ->includeabsen()
            ->toArray();
    }

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
}
