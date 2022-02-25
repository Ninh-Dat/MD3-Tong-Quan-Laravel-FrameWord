<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{{--<form action="{{route('/input')}}" method="post">--}}
    <form action="/input" method="post">
    @csrf
    <p>Product Description</p>
    <input type="text" name="description" placeholder="Mô tả sản phẩm">
    <p>List Price</p>
    <input type="number" name="price" placeholder="Giá niêm yết của sản phẩm">
    <p>Discount Percent</p>
    <input type="number" name="discountPercent" placeholder="Tỉ lệ chiết khấu">
    <p><input type="submit" value="Tính"></p>
</form>
</body>
</html>
