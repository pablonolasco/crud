<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;
use  App\Http\Requests\ProductRequest;
class ProductController extends Controller
{
    //
    public function index(){
        $products=Product::paginate(10);
        return view('product.index')->with(compact('products'));
       
    }
    public function create(){
        return view('product.create');    
    }

    public function save(ProductRequest $request){
       try{
            DB::beginTransaction();
            $product=Product::create($request->input());
            DB::commit();

            if($product){
                return back()->with('message',['success','Producto registrado']);
            }else{
                DB::rollback();
                return back()->with('message',['danger','Producto no registrado']);
            }
        }catch(Exception $e){
            DB::rollback();
            return back()->with('message',['danger',$e->getMessage()]);
        }
    }

    
    public function destroy($id){
        try{
          
            DB::beginTransaction();
           $status= Product::findOrFail($id)->delete();
            DB::commit();
       
            return back()->with('message',['success','Producto eliminado']);
        }catch(Exception $e){
            DB::rollback();
            return back()->with('message',['danger',$e->getMessage()]);
        }
        

    }

    public function show($id){
        try{
            $producto=Product::findOrFail($id);
        
            return view('product.show',compact('producto'));
        }catch(Exception $e){

        }
    }

    public function edit($id){
        try{
            $producto=Product::findOrFail($id);
        
            return view('product.edit',compact('producto'));
        }catch(Exception $e){

        }
    }

    public function update(ProductRequest $request,$id){
        try{
           DB::beginTransaction();
            Product::where('id',$id)->update([
                'nombre'=>$request->nombre
            ]);
            DB::commit();

        
            return back()->with('message',['success','Producto actualizado']);
        }catch(Exception $e){
            DB::rollback();
            return back()->with('message',['danger','Ocurrio un error al actualizar la informacion']);
        }
    }
}
