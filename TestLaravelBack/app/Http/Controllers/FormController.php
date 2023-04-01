<?php

namespace App\Http\Controllers;

use App\Domain\Common\Constants\FactoryType;
use App\Domain\Users\Entities\User;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function saveForm(Request $request)
    {
        $result = User::factory(FactoryType::EMAIL)->save($request->all());
        return response()->json(['data' => $result]);
    }

}
