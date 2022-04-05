<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage-orders');
    }
    public function index()
    {
        $order = Order::query();

        if ($search = \request('search')) {
            $order->where('status', 'LIKE', "%{$search}%")
                ->orWhereHas('user', function ($item) use ($search) {
                    $item->where('name', 'LIKE', "%{$search}%");
                })
                ->orWhere('id', $search);
        }
        $orders = $order->wherestatus(\request('type'))->latest()->paginate(50)->appends(['search' => \request('search')]);

        return view('admin.order.allorder', compact('orders'));
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        //
    }


    public function show(Order $order)
    {


        $orderr = Payment::query();

        if ($search = \request('search')) {
            $orderr->where('res_number', 'LIKE', "%{$search}%")
                ->orWhereHas('order', function ($item) use ($search) {
                    $item->where('status', 'LIKE', "%{$search}%");
                })
                ->orWhere('id', $search);
        }
        $orders = $order->payments()->latest()->paginate(50)->appends(['search' => \request('search')]);
        return view('admin.order.payments', compact('orders', 'order'));

    }


    public function edit(Order $order)
    {
        return view('admin.order.editorder', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'status' => ['required', Rule::in(['unpaid', 'paid', 'posted', 'preparation', 'canceled', 'received',])],
            'tracking_serial' => 'required'
        ]);

        $order->update($request->all());

        return redirect(route('admin.orders.index') . "?type=$order->status");
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return back();

    }

    public function detail(Order $order)
    {
        $orderr = Order::query();

        if ($search = \request('search')) {
            $orderr->where('status', 'LIKE', "%{$search}%")
                ->orWhereHas('products', function ($item) use ($search) {
                    $item->where('title', 'LIKE', "%{$search}%");
                })
                ->orWhere('id', $search);
        }
        $orders = $order->products()->latest()->paginate(50)->appends(['search' => \request('search')]);
        return view('admin.order.orderdetail', compact('orders', 'order'));

    }
}
