<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-k6RqeWeci5ZR/Lv4MR0sA0FfDOMC9QJo8p4a2n6L4g9U1d5/RxMx7B8nE24V6FfWcqltTso7LhdzFg0cJ5nXQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .product {
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: white;
            padding: 20px;
            margin: 10px;
            width: 220px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .product:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        h2 {
            font-size: 18px;
            color: #333;
            margin: 10px 0;
        }
        p {
            font-size: 16px;
            color: #666;
            margin: 0;
        }
        .price {
            font-weight: bold;
            color: #27ae60; /* Green color for the price */
        }
    </style>
</head>
<body>
    <h1>Product List</h1>
    <div class="products">
        @foreach($products as $product)
            <div class="product">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                <h2>{{ $product->name }}</h2>
                <p class="price">${{ number_format($product->price, 2) }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
