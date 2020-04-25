<?php declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Model\Item;
use App\Model\Items;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController
{
    public function index()
    {
        $items = [];
        foreach (Product::all() as $product_row) {
            $item = new Item();
            $items[] = $item;
            $item->setPrice(floatval($product_row['price']));
            $item->setPosition($product_row['position']);
            $item->setTitle($product_row['title']);
        }

        $items = Items::order($items);
        return view('products.index', compact('items'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function storeProduct(Request $request)
    {

        $validatedData = $request->validate(
            [
                'price'    => [new Validation\PriceValidateRule],
                'position' => [new Validation\PositionValidateRule],
                'title'    => [new Validation\TitleValidateRule],
            ]
        );

        $product = new Product();
        $product->price = request('price');
        $product->position = request('position');
        $product->title = request('title');
        $product->save();

        return redirect('/');

    }

}
