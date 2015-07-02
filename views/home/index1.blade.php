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
                                    @if($newproduk->gambar1 != '')
                                    {{HTML::image(product_image_url($newproduk->gambar1),'gambar1',array('width'=>'212','height'=>'281'))}}
                                    @endif
                                    @if($newproduk->gambar2 != '')
                                    {{HTML::image(product_image_url($newproduk->gambar2),'gambar2',array('width'=>'212','height'=>'281'))}}
                                    @endif
                                    @if($newproduk->gambar3 != '')
                                    {{HTML::image(product_image_url($newproduk->gambar3),'gambar3',array('width'=>'212','height'=>'281'))}}
                                    @endif 
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
                    <a href="{{url::to('produk')}}">
                        <span class="plus-sign">+</span>load more products</a>
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
                                    @if($newproduk->gambar1 != '')
                                    {{HTML::image(product_image_url($newproduk->gambar1),'gambar1',array('width'=>'212','height'=>'281'))}}
                                    @endif
                                    @if($newproduk->gambar2 != '')
                                    {{HTML::image(product_image_url($newproduk->gambar2),'gambar2',array('width'=>'212','height'=>'281'))}}
                                    @endif
                                    @if($newproduk->gambar3 != '')
                                    {{HTML::image(product_image_url($newproduk->gambar3),'gambar3',array('width'=>'212','height'=>'281'))}}
                                    @endif 
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
                    <a href="{{url::to('produk')}}">
                        <span class="plus-sign">+</span>load more products</a>
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
                                    @if($newproduk->gambar1 != '')
                                    {{HTML::image(product_image_url($newproduk->gambar1),'gambar1',array('width'=>'212','height'=>'281'))}}
                                    @endif
                                    @if($newproduk->gambar2 != '')
                                    {{HTML::image(product_image_url($newproduk->gambar2),'gambar2',array('width'=>'212','height'=>'281'))}}
                                    @endif
                                    @if($newproduk->gambar3 != '')
                                    {{HTML::image(product_image_url($newproduk->gambar3),'gambar3',array('width'=>'212','height'=>'281'))}}
                                    @endif 
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
                    <a href="{{url::to('produk')}}">
                        <span class="plus-sign">+</span>load more products</a>
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
                    <a href="{{url::to('produk')}}">
                        <span class="plus-sign">+</span>load more products</a>
                </div>
            </div>
            @endif         
        </div>

    </div>
</section>


{{ Theme::partial('subscribe') }}

<section class="section-banners">

    <div class="container">
        @foreach(horizontal_banner() as $banners)
        <div class="col-lg-6 col-md-12">
            <div class="homepage-banner">
                <a href="{{url($banners->url)}}">
                    {{HTML::image(banner_image_url($banners->gambar),'banner',array('class'=>'lazy','width'=>'584','height'=>'211'))}}
                </a>
            </div>

        </div>
        @endforeach
        @foreach(horizontal_banner() as $banners)
        <div class="col-lg-6 col-md-12">
            <div class="homepage-banner">
                <a href="{{url($banners->url)}}">
                    {{HTML::image(banner_image_url($banners->gambar),'banner',array('class'=>'lazy','width'=>'584','height'=>'211'))}}
                </a>
            </div>

        </div>
        @endforeach
    </div>
</section>
<section class="section-from-out-blog">
<div class="container">
    <h2>from out blog</h2>
    
    <div class="row items-holder">

         @if(count(list_blog(null,@$blog_category)) > 0)
         @foreach(list_blog(null,@$blog_category) as $blogs)
        <div class="col-xs-6">
            <div class="from-blog-item">
                <div class="row">
                  
                        <div class=" col-xs-12 col-sm-7 col-lg-12">
                             <div class="body">
                                 <h4><a href="{{blog_url($blogs)}}">{{$blogs->judul}}</a></h4>
                                 <small><i class="fa fa-calendar"></i> {{waktuTgl($blogs->updated_at)}}</small>&nbsp;&nbsp;
                                 @if(!empty($blogs->kategori->nama))
                                <span class="date-post"><i class="fa fa-tags"></i> <a href="{{blog_category_url(@$blogs->kategori)}}">{{@$blogs->kategori->nama}}</a></span>
                                @endif
                                 <p class="excerpt">
                                    {{shortDescription($blogs->isi,300)}}
                                 </p>
                                 
                                 <div class="comment">
                                 <a class="md-button" href="{{blog_url($blogs)}}"> Baca Selengkapnya →</a>
                                 </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
            @endif
       
        
    
      
    </div>
</div>

</section>