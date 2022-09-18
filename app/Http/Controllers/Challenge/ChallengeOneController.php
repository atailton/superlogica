<?php

namespace App\Http\Controllers\Challenge;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateChallengeOneFormRequest;
use App\Models\ChallengeOne;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Object_;

class ChallengeOneController extends Controller
{
    public function index(): object
    {
        $userList = ChallengeOne::all();
        return view('userList', compact("userList"));
    }

    public function create()
    {
        return view('userCreate');
    }

    public function store(StoreUpdateChallengeOneFormRequest $request)
    {
        
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        ChallengeOne::create($data);
        return redirect()->route('userList');
    }

    public function show($id)
    {
        //Not implemented
    }

    public function destroy($id)
    {
        //Not implemented
    }
}
