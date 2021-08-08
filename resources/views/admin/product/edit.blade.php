<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" name="name" class="form-control" value="{{old('name', $product->name)}}">
            </div>
            <div class="form-group">
                <label for="">Danh mục</label>
                <select name="cate_id" class="form-control" >
                    @foreach($cates as $c)
                        <option
                            @if($c->id == old('cate_id', $product->cate_id))
                            selected
                            @endif
                            value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">ảnh</label>
                <input type="file" name="file_upload" class="form-control">

            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="">Giá</label>
                <input type="text" name="price" value="{{$product->price}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="text" name="quantity" value="{{$product->quantity}}" class="form-control">
            </div>

        </div>
        <div class="col-12 d-flex justify-content-end">
            <button class="btn btn-primary" type="submit">Lưu</button>
        </div>
    </div>
</form>
</body>
</html>
