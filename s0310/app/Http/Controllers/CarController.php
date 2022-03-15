<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  自定義myForm
    public function myForm(Request $request)
    {
        // echo 'hello myForm';

        // $input = $request->all();
        // dd($input);

        // $url = route('cars.myform123');
        // dd($url);

        $input = $request->all();
        dd($input);
    }

    public function test()
    {
        echo 'hello test';
    }

    public function index()
    {
        $data = DB::select('select * from users');
        // foreach ($data as $user) {
        //     echo $user->name . "<br>";
        // }
        // dd($users);
        // return view('user.index', ['users' => $users]);
        return view('car.index', ['data' => $data]);

        // echo "A";
        // return view('car.index');
        // return view('car.index',['name'=>'yo']);
        // return view('car.index',['chinese'=>'80']);
        // return view('car.index',['math'=>'91']);
        // return view('car.index',['english'=>'92']);

        $data = [
            'id' => '1',
            'name' => 'yo',
            'chinese' => '80',
            'math' => '90',
            'english' => '70',
        ];

        $data['avg'] = '80';

        // dd($data);
        return view('car.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "hello cars store";
        $input = $request->all();
        dd($input);
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
