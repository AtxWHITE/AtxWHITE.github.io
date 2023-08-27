<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;  

use DataTables;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
        if ($request->ajax()) {
            $data = DB::table('order')
                    ->join('customers', 'order.customer_id', '=', 'customers.id')
                    ->select('order.*', 'customers.nama', 'customers.alamat')
                    ->get();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                      
                        $btn =  '
                            <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="edit" class="text-secondary editData">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 "><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                            </a> 
                            | 
                            <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="text-secondary deleteData">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash "><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                            </a>
                        '; 

 
                            return $btn;
                    })

                    // add column status
                    ->addColumn('sts', function($row){
                        if ($row->status == 'masuk') {
                            $status = '<span class="badge badge-success">Masuk</span>';
                        } else if ($row->status == 'batal') {
                            $status = '<span class="badge badge-danger">Batal</span>';
                        }
                        return $status;
                    })

                    // filter berdasarkan status masuk & batal
                    ->filter(function ($instance) use ($request) {
                        if ($request->get('status') == 'masuk') {
                            $instance->where('status', 'masuk');
                        } else if ($request->get('status') == 'batal') {
                            $instance->where('status', 'batal');
                        }
                    })

                    ->rawColumns(['action', 'sts'])
                    ->make(true);
        }
        // jumlah order berdasarkan status masuk
        $jumlah_order_masuk = Order::where('status', 'masuk')->count();
        // jumlah order berdasarkan staus batal
        $jumlah_order_batal = Order::where('status', 'batal')->count();
        // jumlah order
        $jumlah_order = Order::count();
        return  view('backend.orders.index', compact('jumlah_order', 'jumlah_order_masuk', 'jumlah_order_batal'));
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
