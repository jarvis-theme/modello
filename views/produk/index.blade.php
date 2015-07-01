<section id="fullwidth-products-grid" class="section-products-grid">
    <div class="container">
        <div class="product-grid no-move-down">
            @if(count(list_product(null, @$category, @$collection)) > 0)
            <div class="tab-pane active" id="fullwidth-page">
                <div class="row">
                    @foreach (list_product(null, @$category, @$koleksi) as $listproduk)
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
                
                <div class="paging-holder">
                    <div class="pagination-buttons">
                        {{list_product(null, @$category, @$collection)->links()}}
                    </div>
                </div>
            </div>
            @else
            <article style="font-style:italic; text-align:center;">
                <i>Produk tidak ditemukan</i>
            </article>
            @endif
        </div>
    </div>
</section>