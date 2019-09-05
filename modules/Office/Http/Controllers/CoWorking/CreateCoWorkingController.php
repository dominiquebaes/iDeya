<?php

namespace Modules\Office\Http\Controllers\CoWorking;

use App\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Modules\Office\Entities\CoWorking;
use Modules\Office\Http\Requests\AddCoWorkingRequest;

class CreateCoWorkingController extends Controller
{
    public function __invoke(AddCoWorkingRequest $request)
    {
        $data = $request->except('_token');
        CoWorking::create($data);


        $user['email'] = $data['email'];
        $user['password'] = Hash::make($data['email']);
        $user['remember_token'] = $request->post('_token');
        $user['type'] = 'co-worker';
        User::create($user);
        return redirect()->route('users.listing');
    }
}
