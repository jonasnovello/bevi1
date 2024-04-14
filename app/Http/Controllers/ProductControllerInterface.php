<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductDeleteRequest;
use App\Http\Requests\ProductUpdateRequest;

interface ProductControllerInterface
{
    public function create(ProductCreateRequest $request);

    public function list();

    public function update(ProductUpdateRequest $request);

    public function delete(ProductDeleteRequest $request);
}
