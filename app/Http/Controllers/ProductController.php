<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductDeleteRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Product;
use Ramsey\Uuid\Type\Integer;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller implements ProductControllerInterface
{
    public function create(ProductCreateRequest $request)
    {
       $product = Product::query()->create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
            'stock_quantity' => $request->stock_quantity
        ]);

        return response()->json()->setData(['code'=> Response::HTTP_CREATED, 'message' => 'Produto registrado com sucesso', 'data'=>$product]);
    }

    public function list()
    {
        $products = Product::query()->select(['name', 'description', 'price'])->get();

        return response()->json()->setData([
            'code'=> Response::HTTP_OK,
            'message' => 'Produtos listados com sucesso',
            'data' => $products
        ]);
    }

    public function update(ProductUpdateRequest $request)
    {
       $product = Product::query()->where('id', $request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
            'stock_quantity' => $request->stock_quantity
        ]);

        return response()->json()->setData([
            'code'=> Response::HTTP_OK,
            'message' => 'Produto atualizado com sucesso',
            'data' => $product
        ]);
    }

    public function delete(ProductDeleteRequest $request)
    {
        $delete = Product::query()->where('id', $request->id)->delete();

        if ($delete){
            return response()->json()->setData(['code'=> Response::HTTP_OK, 'message' => 'Produto deletado com sucesso']);
        }else{
            return response()->json()->setData([
                'code'=> Response::HTTP_BAD_REQUEST,
                'message' => 'Produto não encontrado'
            ]);
        }

    }
}
