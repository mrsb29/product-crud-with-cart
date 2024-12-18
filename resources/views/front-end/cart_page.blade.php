
<div class="col-sm-12 mr-lg-4">
    <!DOCTYPE html>
    <html>
    <head>
        <title>Shopping Cart</title>
        <style>
            /* Basic CSS styles for the cart page */
            body {
                font-family: Arial, sans-serif;
            }
            .cart-container {
                max-width: 800px;
                margin: 0 auto;
                padding: 20px;
            }
            .cart-item {
                border: 1px solid #ccc;
                padding: 10px;
                margin-bottom: 10px;
            }
            .cart-item img {
                max-width: 100px;
                height: auto;
                display: block;
                margin: 0 auto;
            }
            .cart-item h3 {
                margin-top: 10px;
            }
            .cart-item .quantity {
                display: inline-block;
                margin-right: 10px;
            }
            .cart-item .remove {
                color: red;
                cursor: pointer;
            }
            .cart-total {
                text-align: right;
                margin-top: 20px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="cart-container" >
            <h2>Shopping Cart</h2>
            <div style="display: flex">
            @foreach($se_data as $item)
            <div class="cart-item " style="width: 200px">
                <img src="{{ asset('public/Image/'. $item->product_img) }}" alt="Product 1">
                <h3>{{$item->product_name}}</h3>
                <div class="quantity">
                    
                </div>
                <span class="" style="color: red">Price</span>  {{$item->product_price}}
            </div>
            @endforeach
        </div>
           
            <p>Total ({{$total}})</p>
        </div>
    </body>
    </html>
    
</div>
