@extends('layouts.blank')

@section('title','商品列表')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data table</h4>
            <div class="row">
                <div class="col-12">
                    <table id="order-listing" class="table" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID#</th>
                            <th>商品名稱</th>
                            <th>種類</th>
                            <th>價格</th>
                            <th>商品述敘</th>
                            <th>創建日期</th>
                            <th>照片路徑</th>
                            <th>管理功能</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ \App\Category::find($product->category_id)->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>
                                <label class="badge badge-info">On hold</label>
                            </td>
                            <td>
                                <a class="btn btn-outline-primary" href="{{route('products.edit',[$product->id])}}">編輯</a>
                                <a class="btn btn-outline-primary">刪除</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {!! $products->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection