<x-app-layout>
    <x-slot name="style">
        <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    </x-slot>

    <x-slot name="js">
        <script src="{{ asset('js/cart.js') }}" defer></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                calculateTotal();
        
                function calculateTotal() {
                    var productTotalElements = document.getElementsByClassName("productTotal");
                    var subtotal = 0;
        
                    for (var i = 0; i < productTotalElements.length; i++) {
                        var productTotalText = productTotalElements[i].textContent.trim(); // Menghapus spasi di awal dan akhir
                        var productTotal = parseFloat(productTotalText.replace("Rp. ", "").replace(",", "").replace(/\s+/g, "")); // Menghapus spasi di tengah-tengah
        
                        if (!isNaN(productTotal)) {
                            subtotal += productTotal;
                        }
                    }
        
                    var subtotalElement = document.getElementById("subtotal");
                    var totalElement = document.getElementById("total");
        
                    if (subtotalElement && totalElement) {
                        subtotalElement.textContent = "Rp. " + formatPrice(subtotal);
                        totalElement.textContent = "Rp. " + formatPrice(subtotal);
                    }
                }
        
                function formatPrice(price) {
                 var formattedPrice = price.toFixed(3).replace(/\d(?=(\d{3})+\.)/g, '$&,');
                return formattedPrice;
                }
            });
        </script>     
    </x-slot>
    {{--------------------- 
            $slot 
        --------------------}}
            <main  class="_container">
                @if (count($products))
                <table cellspacing="0">
                    <thead>
                        <tr>
                            <td>Product</td>
                            <td>Quantity</td>
                            <td>Subtotal</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)    
                            <tr>
                                <td>
                                    <div class="product flex_align">
                                        <img class="d-b" src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->title }}">
                                        <div class="details">
                                            <a href="{{route('product', ['product' => $product->id])}}" class="m-0">{{ ucfirst($product->title) }}</a>
                                            <p>Price: {{ $product->formatPrice($product->price) }}</p>
                                            @auth
                                                <form action="{{ route('rfc', ['product' => $product->id]) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            @endauth
                                            <a onclick="removeCart(this, {{$product->id}}, {{ auth()->check() }})" class="remove" href="#">Remove</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @auth
                                        <form action="{{ route('uc', ['product' => $product->id, 'quantity' => 0]) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                        </form>
                                    @endauth
                                    <input type="number" min="1" max="20" onchange="updateQuantity({{$product->id}}, this, {{auth()->check()}})" value="{{$product->quantity}}">
                                </td>
                                <td class="productTotal">{{ $product->formatPrice($product->price * $product->quantity) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <table class="subtotal-table ml-auto">
                    <tr>
                        <td>Subtotal</td>
                        <td id="subtotal"></td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>Rp. 0</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td id="total"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="checkout">
                                <a href="{{ route('checkout') }}">Proceed to checkout</a>
                            </div>
                        </td>
                    </tr>
                </table>
                @else
                    <div style="display: grid;place-items:center;padding:2rem 0">
                        <img style="max-width: 100%;" src="{{ asset('img/cart-empty.png') }}" alt="">
                    </div>
                @endif
            </main>
            <x-modal title="Remove Item" ok="REMOVE">
                <x-slot name="description">
                    Are you sure you want to remove this item?
                </x-slot>
            </x-modal>
    {{--------------------- 
        $slot 
    --------------------}}
</x-app-layout>