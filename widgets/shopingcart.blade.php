<div id="shopping-cart shoppingcartplace" class="top-cart-holder ic-sm-basket">
    shoping cart:
    <span class="top-cart-price">{{ price(Shpcart::cart()->total() )}}</span>
    <div class="total-buble">
        <span>{{Shpcart::cart()->total_items()}}</span>
    </div>

    <div class="hover-holder">
        <ul class="basket-items">
            @foreach (Shpcart::cart()->contents() as $key => $cart)
            <li class="row">
                <div class="thumb col-xs-3">
                    <img width="45" height="45" alt="" src="{{URL::to(product_image_url($cart['image']))}}" />
                </div>
                <div class="body col-xs-9">
                    <a href="{{URL::to('produk/'.Str::slug($cart['name']))}}">
                        <h5>{{$cart['name']}}</h5>
                    </a>
                    <div class="price">
                        <span>{{price($cart['price'])}}</span>
                    </div>
                    <a class="remove-item" href="javascript:deletecart({{ "'".$cart['rowid']."'" }})">x</a>
                </div>
            </li>
            @endforeach
        </ul>

        <a class="top-chk-out md-button" href="{{url('checkout')}}">check out</a>
    </div>
</div>