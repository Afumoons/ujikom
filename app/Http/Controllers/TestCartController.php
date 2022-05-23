<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Jackiedo\Cart\Cart;

class TestCartController extends Controller
{
    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function content()
    {
        // $variable = $this->cart->doSomething();
    }

    public function addItem(array $attributes = [], $withEvent = true)
    {
        // $this->cart->addItem([
        //     'id'       => 4,
        //     'title'    => 'bh',
        //     'quantity' => 5,
        //     'price'    => 300,
        //     'options' => [
        //         'size' => [
        //             'label' => 'XL',
        //             'value' => 'XL'
        //         ],
        //         'color' => [
        //             'label' => 'Red',
        //             'value' => '#f00'
        //         ]
        //     ],
        //     'extra_info' => [
        //         'date_time' => [
        //             'added_at' => time(),
        //         ]
        //     ]
        // ]);
        // ==========================
        // $product = Product::class;
        // $this->cart->addItem([
        //     'model' => $product,
        //     'id' => 12,
        //     'title' => 'coba pakai model'
        // ]);
        // ==========================
        // Get your model
        $model = Product::find(1);

        // Add 5 items of this model to the cart
        $this->cart->addItem([
            'model'    => $model,
            'quantity' => 5
        ]);
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

    public function removeItem($itemHash = 'item_03fa81b001265cf0e5a1048fd47c01b3')
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
