<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;


class OrderController extends Controller
{
    public function submitOrder(OrderRequest $req)
    {
        $order = new Order();
        $order->counterparty = $req->input('counterparty');
        $order->tel = $req->input('tel');
        $order->address = $req->input('address');
        $order->product = $req->input('product');
        $order->quantityProd = $req->input('quantityProd');
        $order->storage = $req->input('storage');
        $order->managers = $req->input('managers');

        $order->save();

        return redirect()->route('home')->with('success', 'Заказ успешно добавлен!');
    }

    public function orderList(){
        $order = new Order();
        return view('home', ['data'=>$order->orderBy('id', 'desc')->get()]);
    }

    public function orderItem($id){
        $order = new Order();
        return view('order-item', ['data'=>$order->find($id)]);
    }

    public function orderUpdate($id){
        $order = new Order();
        return view('order-update', ['data'=>$order->find($id)]);
    }

    public function orderUpdateSubmit($id, OrderRequest $req)
    {
        $order = Order::find($id);
        $order->counterparty = $req->input('counterparty');
        $order->tel = $req->input('tel');
        $order->address = $req->input('address');
        $order->product = $req->input('product');
        $order->quantityProd = $req->input('quantityProd');
        $order->storage = $req->input('storage');
        $order->managers = $req->input('managers');

        $order->save();

        return redirect()->route('order-item', $id)->with('success', 'Заказ успешно изменен!');
    }

    public function orderDelete($id){
        Order::find($id)->delete();

        return redirect()->route('home')->with('success', 'Заказ успешно удален!');
    }
}
