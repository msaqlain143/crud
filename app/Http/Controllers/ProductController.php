<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {

$products = Product::all();
        return view('AdminProduct.index', ['products' => $products]);
    }
    public function create()
    {
        return view('AdminProduct.create');
    }
    //     public function submit(Request $request)
    // {
    //     // Process your form data here

    //     // Redirect to the home page
    //     return redirect('/'); // You can also use route('home') if you have a named route for your home page
    // }


    public function productdetail($id)
    {
        # code...

        $products =  Product::find($id);


        return view('AdminProduct.detail' , ['product' =>  $products]) ;
    }

    public function store(Request $request)
    {
        // dd($request->all());
        //validation
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:1000000'

        ]);
        //upload image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('products'), $imageName);
        // dd($imageName);

        $product = new Product;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
        return redirect('/')->with('success', 'Product Created Successfully !!');
    }
    public function edit($id)
    {
        $data = Product::where('id', $id)->first(); // Replace YourModel with the actual model class
        return view('AdminProduct.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:1000000'


        ]);
        $product = Product::get('id', $id)->first();
        //upload image
        if (isset($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('products'), $imageName);
            $product->image = $imageName;
        }
        // dd($imageName);
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
        return redirect('/')->with('success', 'Product Updated Successfully !!');
    }
    public function destroy($id)
    {
        $product = Product::get('id', $id)->first();

        $product->delete();
        return redirect('/')->with('success', 'Product Deleted Successfully !!');
    }

    public function show($id)
    {
        $product = Product::where('id', $id)->first();
        return view('AdminProduct.show', compact('product'));
    }
    public function find(Request $request)
    {
        $search = $request->get('search'); // Get the search query from the request

        $products = Product::where('name', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%')
            ->orWhere('image', 'like', '%' . $search . '%')
            ->get(); // Retrieve products based on the search query

        return view('AdminProduct.find', compact('search', 'products'));
    }
    public function apricot(){
        return view('OurProducts.apricot');
    }
    public function apple(){
        return view('OurProducts.apple');
    }
    public function cherry(){
        return view('OurProducts.cherry');
    }
    public function walnut(){
        return view('OurProducts.walnut');
    }
    public function contactUs(){
        return view('contactUS.contactus');
    }
    public function services(){
        return view('services.sevices');
    }
    }
