<?php

namespace App\Http\Controllers\ADMIN\OOGWAY\Manager;

use App\Http\Controllers\Controller;
//
use App\Http\Requests\ADMIN\OOGWAY\StoreRequest;
//
use App\Models\Oogway;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){


        $data = $request->validated();

        $oogway = Oogway::create($data);

        return redirect()->route('admin.oogway.manager.index');
    }
}