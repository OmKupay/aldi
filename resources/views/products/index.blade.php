<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Daftar Produk</h1>
   <ul>

       @foreach ($product as $id => $product )
     <li>
        <a href="{{ url() }}">
            {{ $product['name'] }} - Rp{{ number_format($product['price'], 0, ',', '.') }}
        </a>
     </li>  
       @endforeach 
    </ul>
</body>
</html>
