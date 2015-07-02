<section id="homepage-products-tab" class="section-products-grid">
    <div class="container">
        <!-- Nav tabs -->
        <div class="tab-nav-holder">
            <ul class="nav-tabs">
                <li class="active">
                    <a  href="#">featured</a>
                    <div class="hover-holder">
                        <ul>
                            <li>
                                <a class="tab-control" href="#featured" data-toggle="featured">Featured</a>
                            </li>
                            <li>
                                <a class="tab-control"  href="#arrivals" data-toggle="arrivals">Must Have</a>
                            </li>
                            <li>
                                <a class="tab-control" href="#featured" data-toggle="featured">Top Rated</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="active-tab">
                    <a class="active-tab" href="#" >arrivals</a>
                    <div class="hover-holder">
                        <ul>
                            <li>
                                <a class="active-tab"  href="#home" data-toggle="home">Home Produk</a>
                            </li>
                            <li>
                                <a class="tab-control" href="#bestproduk" data-toggle="bestproduk">Best Sellers</a>
                            </li>
                            <li>
                                <a class="tab-control"  href="#listproduk" data-toggle="listproduk">List Produk</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="tab-tag-line uppercase bold">
            we have over 2000 products in our shop
        </div>
        <!-- Tab panes -->
        <div class="tab-content product-grid no-move-down">
            @if(count(new_product()) > 0)
            <div class="tab-pane active" id="featured">
                <div class="row">
                    @foreach(new_product() as $newproduk )
                    <div class="col-lg-offset-0 col-lg-3 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-2 product-holder">
                        <div class="product-item text-center">
                            <a href="#next" class="mini-next"></a>
                            <a href="#prev" class="mini-prev"></a>
                            <div class="image ">
                                <div class="product-mini-gallery">
                                    {{HTML::image(product_image_url($newproduk->gambar1),'gambar1',array('width'=>'212','height'=>'281'))}}
                                    {{HTML::image(product_image_url($newproduk->gambar2),'gambar2',array('width'=>'212','height'=>'281'))}}
                                    {{HTML::image(product_image_url($newproduk->gambar3),'gambar3',array('width'=>'212','height'=>'281'))}}
                                </div>
                            </div>
                            <hr>
                            <div class="brand">
                                <!-- <img alt="" src="images/brand-small03.png" /> -->
                            </div>
                            <div class="title uppercase bold">
                                <a href="{{product_url($newproduk)}}">{{short_description($newproduk->nama,18)}}</a>
                            </div>
                            <div class="price">
                                <span>{{price($newproduk->hargaJual)}}</span>
                            </div>

                            <div class="buttons-holder">
                                <div class="add-cart-holder">
                                    <a class="md-button" href="{{product_url($newproduk)}}">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="load-more-holder">
                    <a href="{{url::to('produk')}}"><span class="plus-sign">+</span>load more products</a>
                </div>
            </div>
            @endif

            @if(count(home_product()) > 0)
            <div class="tab-pane " id="home">
                <div class="row">
                    @foreach(home_product() as $homeproduk )
                    <div class="col-lg-offset-0 col-lg-3 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-2 product-holder">
                        <div class="product-item text-center">
                            <a href="#next" class="mini-next"></a>
                            <a href="#prev" class="mini-prev"></a>
                            <div class="image ">
                                <div class="product-mini-gallery">
                                    {{HTML::image(product_image_url($homeproduk->gambar1),'gambar1',array('width'=>'212','height'=>'281'))}}
                                    {{HTML::image(product_image_url($homeproduk->gambar2),'gambar2',array('width'=>'212','height'=>'281'))}}
                                    {{HTML::image(product_image_url($homeproduk->gambar3),'gambar3',array('width'=>'212','height'=>'281'))}}
                                </div>
                            </div>
                            <hr>
                            <div class="brand">
                                <!-- <img alt="" src="images/brand-small03.png" /> -->
                            </div>
                            <div class="title uppercase bold">
                                <a href="{{product_url($homeproduk)}}">{{short_description($homeproduk->nama,18)}}</a>
                            </div>
                            <div class="price">
                                <span>{{price($homeproduk->hargaJual)}}</span>
                            </div>

                            <div class="buttons-holder">
                                <div class="add-cart-holder">
                                    <a class="md-button" href="{{product_url($homeproduk)}}">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach  
                </div>
            
                <div class="load-more-holder">
                    <a href="{{url::to('produk')}}"><span class="plus-sign">+</span>load more products</a>
                </div>
            </div>
            @endif 

            @if(count(list_product()) > 0)
            <div class="tab-pane " id="listproduk">
                <div class="row">
                    @foreach(list_product() as $listproduk)
                    <div class="col-lg-offset-0 col-lg-3 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-2 product-holder">
                        <div class="product-item text-center">
                            <a href="#next" class="mini-next"></a>
                            <a href="#prev" class="mini-prev"></a>
                            <div class="image ">
                                <div class="product-mini-gallery">
                                    {{HTML::image(product_image_url($listproduk->gambar1),'gambar1',array('width'=>'212','height'=>'281'))}}
                                    {{HTML::image(product_image_url($listproduk->gambar2),'gambar2',array('width'=>'212','height'=>'281'))}}
                                    {{HTML::image(product_image_url($listproduk->gambar3),'gambar3',array('width'=>'212','height'=>'281'))}}
                                </div>
                            </div>
                            <hr>
                            <div class="brand">
                                <!-- <img alt="" src="images/brand-small03.png" /> -->
                            </div>
                            <div class="title uppercase bold">
                                <a href="{{product_url($listproduk)}}">{{short_description($listproduk->nama,18)}}</a>
                            </div>
                            <div class="price">
                                <span>{{price($listproduk->hargaJual)}}</span>
                            </div>

                            <div class="buttons-holder">
                                <div class="add-cart-holder">
                                    <a class="md-button" href="{{product_url($listproduk)}}">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach  
                </div>
               
                <div class="load-more-holder">
                    <a href="{{url::to('produk')}}"><span class="plus-sign">+</span>load more products</a>
                </div>
            </div>
            @endif  

            @if(count(best_seller()) > 0)
            <div class="tab-pane " id="bestproduk">
                <div class="row">
                    @foreach(best_seller() as $bestproduk)
                    <div class="col-lg-offset-0 col-lg-3 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-2 product-holder">
                        <div class="product-item text-center">
                            <a href="#next" class="mini-next"></a>
                            <a href="#prev" class="mini-prev"></a>
                            <div class="image ">
                                <div class="product-mini-gallery">
                                    {{HTML::image(product_image_url($bestproduk->gambar1),'gambar1',array('width'=>'212','height'=>'281'))}}
                                    {{HTML::image(product_image_url($bestproduk->gambar2),'gambar2',array('width'=>'212','height'=>'281'))}}
                                    {{HTML::image(product_image_url($bestproduk->gambar3),'gambar3',array('width'=>'212','height'=>'281'))}}
                                </div>
                            </div>
                            <hr>
                            <div class="brand">
                                <!-- <img alt="" src="images/brand-small03.png" /> -->
                            </div>
                            <div class="title uppercase bold">
                                <a href="{{product_url($bestproduk)}}">{{short_description($bestproduk->nama,18)}}</a>
                            </div>
                            <div class="price">
                                <span>{{price($bestproduk->hargaJual)}}</span>
                            </div>

                            <div class="buttons-holder">
                                <div class="add-cart-holder">
                                    <a class="md-button" href="{{product_url($bestproduk)}}">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach  
                </div>

                <div class="load-more-holder">
                    <a href="{{url::to('produk')}}"><span class="plus-sign">+</span>load more products</a>
                </div>
            </div>
            @endif         
        </div>
    </div>
</section>