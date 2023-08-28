<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::where('role', 'customer')->with('customers')->get();
        return view('backend.customers.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.customers.create');
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
        return json_encode(User::with('customers')->where('id', $id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $json_data = User::with('customers')->where('id', $id)->first();
        return json_encode(User::with('customers')->where('id', $id)->first());
        // return json_encode($json_data);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request  $request, $id)
    {
        // return json_encode($request->all());
        $customer = Customers::with('user')->where('user_id', $id)->first();
        $customer->nama = $request->name;
        // $customer->email = $request->email;
        // nik
        $customer->nik = $request->nik;
        // no_hp
        $customer->no_hp = $request->no_hp;
        $customer->alamat = $request->alamat;
        //
        // $customer->password = $request->password;
        $customer->jenis_kelamin = $request->jenis_kelamin;
        $customer->tempat_lahir = $request->tempat_lahir;
        $customer->tanggal_lahir = $request->tanggal_lahir;
        // if ($request->ha
        // if ($request->foto) {
        //     $file = $request->file('foto');
        //     // $filename = time() . '.' . $file->getClientOriginalExtension();
        //     $file->move(public_path('images/customers'), $filename);
        // }
        // if ($request->foto_ktp) {
        //     $file = $request->file('foto_ktp');
        //     $filename = time() . '.' . $file->getClientOriginalExtension();
        //     $file->move(public_path('images/customers'), $filename);
        //     $customer->foto_ktp = $filename;
        // }
        $customer->update();
        $user = User::find($id);
        $user->email = $request->email;
        $user->update();
        //mengupdate password
        if ($request->password) {
            $user->password = bcrypt($request->password);
            $user->update();
        }
        return response()->json(['success' => 'Data berhasil diupdate.'], 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customers, $id)
    {
        $customers = Customers::where('user_id', $id)->first();
        $customers->delete();
        $user = User::find($id);
        $user->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
