<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<a href="{{route('product.add')}}"class="btn btn-success">Thêm Mới</a>
    <table>
        <thead>
            <th>STT</th>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Quantity</th>
        </thead>
        @foreach($product as $p)
        <tbody>
            <tr>
                <td>{{ $loop->iteration + $product->firstItem() - 1 }}</td>
                <td>{{$p->name}}</td>
                <td>
                    <img src="{{asset('storage/' . $p->image)}}"width="70">
                </td>
                <td>{{$p->price}}</td>
                <td>{{$p->quantity}}</td>
                <td>
                    <a href="{{route('product.remove', ['id' => $p->id])}}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không')">Xóa</a>
                    <a href="{{route('product.edit', ['id' => $p->id])}}" class="btn btn-success">Sửa</a>
                </td>
            </tr>
        </tbody>
            @endforeach
    </table>
<div class="clearfix"></div>
    <hr>
    {{$product->render()}}
</body>
</html>
