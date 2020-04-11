<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Product;

class ProductController extends Controller
{
    function index() {
        $data['products'] = Product::all();
        return view('backends.products.index', $data);
    }

    function getInsertBasic() {
        return view('backends.products.insert_basic');
    }

    function postInsertBasic() {
        $data['name'] = request()->input('name');
        $data['link_access_product'] = request()->input('link_access_product');
        Product::insert($data);
        return redirect()->route('admin.product.index');
    }

    function getUpdateBasic($id) {
        $data['product'] = Product::find($id);
        return view('backends.products.update_basic', $data);
    }

    function postUpdateBasic($id) {
        $data['name'] = request()->input('name');
        $data['link_access_product'] = request()->input('link_access_product');
        Product::where('id', $id)->update($data);
        return redirect()->route('admin.product.index');
    }

    function insertAuto() {
        if (!empty($this->getProductFromShopee())) {
            $products = $this->getProductFromShopee();
            Product::insert($products);
        }
        return redirect()->route('admin.product.index');
    }

    function getProductFromShopee() {
        $products = [];
        $link = 'https://shopee.vn/%C4%90i%E1%BB%87n-Tho%E1%BA%A1i-Ph%E1%BB%A5-Ki%E1%BB%87n-cat.84';
        $contentHtml = file_get_contents($link);
        dd($contentHtml);
        return $products;
    }

    //flash sale 16h30: https://shopee.vn/flash_sale?promotionId=2001293962
    //https://shopee.vn/%C4%90i%E1%BB%87n-Tho%E1%BA%A1i-Ph%E1%BB%A5-Ki%E1%BB%87n-cat.84
    
    //api shopee: https://shopee.vn/affiliate/cach-tao-tracking-link-tiep-thi-lien-ket-shopee/
}
