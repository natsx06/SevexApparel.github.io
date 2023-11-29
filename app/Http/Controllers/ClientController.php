<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\ShippingInfo;
use Auth;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function CategoryPage($id){
        $category = Category::findOrFail($id);
        $product = Product::where('product_category_id',$id)->latest()->get();
        return view('user_template.category', compact('category', 'product'));
    }

    public function SingleProduct($id){
        $product = Product::findOrFail($id);
        $subcat_id = Product::where('id', $id)->value('product_subcategory_id');
        $related_product = Product::where('product_subcategory_id',$subcat_id)->latest()->get();
        return view('user_template.product', compact('product', 'related_product'));
    }

    public function AddToCart(){
        $userid = Auth::id();
        $cart_items = Cart::where('user_id', $userid)->get();
        return view('user_template.addtocart', compact('cart_items'));
    }

    public function AddProductToCart(Request $request){
        $product_price = $request->price;
        $quantity = $request->quantity;
        $price = $product_price * $quantity ;
        Cart::insert([
            'product_id' => $request->product_id,
            'user_id' => Auth::id(),
            'quantity' => $request->quantity = $quantity,
            'price' => $price
        ]);

        return redirect()->route('addtocart')->with('message','Item added to cart successfully');
    }

    public function RemoveCartItem($id){
        Cart::findOrFail($id)->delete();
        return redirect()->route('addtocart')->with('message','Item Removed from cart successfully');
    }

    public function GetShippingAddress(){
        return view('user_template.shippingaddress');
    }

    public function AddShippingAddress(Request $request){
        ShippingInfo::insert([
            'user_id' => Auth::id(),
            'phone_number' => $request->phone_number,
            'complete_address' => $request->complete_address,
            'postal_code' => $request->postal_code,
        ]);

        return redirect()->route('checkout');
    }

    public function Checkout(){
        $userid = Auth::id();
        $cart_items = Cart::where('user_id', $userid)->get();
        $shipping_address = ShippingInfo::where('user_id', $userid)->first();
        return view('user_template.checkout', compact('cart_items','shipping_address'));
    }

    public function PlaceOrder(){
        $userid = Auth::id();
        $shipping_address = ShippingInfo::where('user_id', $userid)->first();
        $cart_items = Cart::where('user_id', $userid)->get();

        foreach ($cart_items as $item){
            Order::insert([
                'user_id' => $userid,
                'shipping_phoneNumber' => $shipping_address->phone_number,
                'shipping_city' => $shipping_address->complete_address,
                'shipping_postalcode' => $shipping_address->postal_code,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'total_price' => $item->price,
            ]);

            $id = $item->id;
            Cart::findOrFail($id)->delete();

        }

        ShippingInfo::where('user_id', $userid)->first()->delete();

        return redirect()->route('orders')->with('message', 'Your order has been placed successfully');

    }

    public function UserProfile(){
        return view('user_template.userprofile');
    }

    public function Orders(){
        $orders = Order::where('status', 'pending')->latest()->get();
        return view('user_template.orders', compact('orders'));
    }

    public function History(){
        return view('user_template.history');
    }

    public function SpesificProduct(){
        return view('user_template.spesificproduct');
    }

    public function About(){
        return view('user_template.about');
    }

    public function CustomerService(){
        return view('user_template.customerservice');
    }
    
}
