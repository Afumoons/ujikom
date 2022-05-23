<?php

namespace App\Http\Controllers;

use Jackiedo\Cart\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{

    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd($this->cart->getDetails()->items);
        return view('cart', [
            'title' => 'Cart',
            'cart' => $this->cart->getDetails(),
        ]);
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
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }

    public function addItem(Request $request, $product = null)
    {
        $product = Product::findorFail($product);
        $this->cart->addItem([
            'id'       => $product->id,
            'title'    => $product->name,
            'quantity' => 1,
            'price'    => $product->price,
            // 'options' => [
            //     'size' => [
            //         'label' => 'XL',
            //         'value' => 'XL'
            //     ],
            //     'color' => [
            //         'label' => 'Red',
            //         'value' => '#f00'
            //     ]
            // ],
            'extra_info' => [
                'slug' => $product->slug,
                'image' => $product->image,
                'description' => $product->description,
            ]
        ]);
        // ==========================
        // Get your model
        // $model = Product::find(1);
        // $this->cart->addItem([
        //     'model'    => $model,
        //     'quantity' => 5
        // ]);
        return redirect(route('cart'));
    }
    public function getItem()
    {
        $items = $this->cart->getItems();
        foreach ($items as $key => $item) {
            dd($item);
        }
    }

    public function updateItem($itemHash = 'item_03fa81b001265cf0e5a1048fd47c01b3')
    {
        //item_03fa81b001265cf0e5a1048fd47c01b3
        $this->cart->updateItem($itemHash, [
            'title'      => 'New title',
            'quantity'   => 2,
            'extra_info' => [
                'date_time.updated_at' => time()
            ]
        ]);
        return redirect(route('cart'));
    }

    public function removeItem($itemHash)
    {
        $this->cart->removeItem($itemHash);
        return redirect(route('cart'));
    }

    public function coba()
    {
        // dd($this->cart->getDetails()->items);
        dd($this->cart->getDetails());
        // $variable = $this->cart->get('item');
    }
}
