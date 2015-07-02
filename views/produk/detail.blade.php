<section class="section-single-product-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-xs-1 col-sm-3 hidden-xs">
                <div class="single-product-vertical-gallery">
                    <a class="fa fa-angle-up up-btn" href="#up"></a>
                     <a class="fa fa-angle-down down-btn" href="#down"></a>
                    <ul>
                        @if($produk->gambar1 != '')
                        <li>
                            <a class="vertical-gallery-item" href="#slide1">
                                <img class="lazy" src="{{url(product_image_url($produk->gambar2,'thumb'))}}" />
                            </a>
                        </li>
                        @endif
                        @if($produk->gambar2 != '')
                        <li>
                            <a class="vertical-gallery-item" href="#slide2">
                                <img class="lazy" alt="" src="{{url(product_image_url($produk->gambar2,'thumb'))}}" />
                            </a>
                        </li>
                        @endif
                        @if($produk->gambar3 != '')
                        <li>
                         <a class="vertical-gallery-item" href="#slide3">
                        <img class="lazy" alt="" src="{{url(product_image_url($produk->gambar3,'thumb'))}}" />
                    </a>
                        </li>
                        @endif
                        @if($produk->gambar4 != '')
                        <li>
                         <a class="vertical-gallery-item" href="#slide4">
                        <img class="lazy" alt="" src="{{url(product_image_url($produk->gambar4,'thumb'))}}" />
                    </a>
                        </li>
                        @endif

                    </ul>
                   
                </div>
                </div>
                    <div class="col-xs-11 col-sm-9">
                <div class="single-product-gallery">
                    
                    <div class="nav-holder">
                        <a class="fa fa-angle-right next-btn" href="#next"></a>
                        <a class="fa fa-angle-left prev-btn" href="#prev"></a>    
                    </div>
                     
                    <div class="single-product-slider">
                        @if($produk->gambar1 != '')
                        <div class="single-product-gallery-item" id="slide1">
                            <a data-rel="prettyphoto" href="{{url(product_image_url($produk->gambar1))}}">
                                <img class="lazy" style="width: 500px;" alt="" src="{{url(product_image_url($produk->gambar1,'large'))}}" />
                            </a>
                        </div>
                        @endif
                        @if($produk->gambar2 != '')
                        <div class="single-product-gallery-item" id="slide2">
                            <a data-rel="prettyphoto" href="{{url(product_image_url($produk->gambar2))}}">
                            <img class="lazy" style="width: 500px;" alt="" src="{{url(product_image_url($produk->gambar2,'large'))}}" />
                                </a>
                        </div>
                        @endif
                        @if($produk->gambar3 != '')
                        <div class="single-product-gallery-item" id="slide3">
                            <a data-rel="prettyphoto" href="{{url(product_image_url($produk->gambar3))}}">
                            <img class="lazy" style="width: 500px;" alt="" src="{{url(product_image_url($produk->gambar3,'large'))}}" />
                                </a>
                        </div>
                        @endif
                        @if($produk->gambar4 != '')
                        <div class="single-product-gallery-item" id="slide4">
                            <a data-rel="prettyphoto" href="{{url(product_image_url($produk->gambar4))}}">
                            <img class="lazy" style="width: 500px;" alt="" src="{{url(product_image_url($produk->gambar4,'large'))}}" />
                                </a>
                        </div>
                        @endif

                     </div>
                </div>
                         </div>
                     </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="single-product-info-holder">
                    <div class="nav-area-holder">
                        <div class="row">
                            <div class="col-xs-12">
                                {{sosialShare(product_url($produk))}}
                            </div>
                        </div>
                    </div>
                    <div class="brand">
                       <!--  <img width="100" height="17" alt="" src="images/brands01.png" /> -->
                    </div>
                    <h1>{{$produk->nama}}</h1>
                    <div class="star-holder">
                        <!-- <div class="star" data-score="3"></div> -->
                    </div>

                    <div class="price">
                        @if(!empty($produk->hargaCoret))
                        <span class="previous-price">{{price($produk->hargaCoret)}}</span>
                        @endif
                        <span>{{price($produk->hargaJual)}}</span>
                    </div>
                    <div class="excerpt">
                        <p>{{$produk->deskripsi}}</p>
                    </div>
                    
                    <form action="#" id="addorder">
                        @if($opsiproduk->count() > 0)
                        <div class="size inline">
                            <h5 class="opsi">Opsi :</h5>
                           
                            <select class="md-select ">
                                <option value="">-- Pilih Opsi --</option>
                                @foreach ($opsiproduk as $key => $opsi)
                                 <option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}}>{{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{price($opsi->harga)}}</option>
                                @endforeach
                            </select> 
                          
                        </div>
                        @endif
                        <div class="quantitiy inline">
                            <h5>Quantity</h5>
                            <button type='submit' class='qtyminus md-button narrow' field='qty' /><i class="fa fa-caret-left"></i></button>
                            <input class='md-input col-xs-12 inpunqty' type='text' name='qty' value='0' class='qty' />
                            <button type='button' value='+' class='qtyplus md-button narrow' field='qty' /><i class="fa fa-caret-right"></i></button>
                        </div>
                        <div class="buttons-holder">
                            <div class="add-cart-holder inline">
                                <button type="submit" class="md-button addtocart ">add to cart</button>
                                <!-- <button class="btn addtocart baddtocart btn-checkout chart" type="submit"><i class="cart"></i>Add to cart</button> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <section class="section-review-comment">
            <div class="tabbable tabs-left">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 no-margin">
                        <ul class="nav nav-tabs ">
                            <li class="active"><a href="#comments" data-toggle="tab">comments</a></li>
                            <li><a href="#additional" data-toggle="tab">additional information</a></li>
                            <li><a href="#description" data-toggle="tab">description</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-9 no-margin ">
                        <!-- Tab panes -->
                        <div class="tab-content ">
                            <div class="tab-pane active " id="comments">
                                @foreach (list_testimonial() as $items) 
                                <!-- <div class="comment-item">
                                    <div class="row no-margin">
                                        <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                            <div class="avatar">
                                                <img alt="avatar" src="{{url(dirTemaToko().'modello/assets/images/default-avatar.jpg')}}" />
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-lg-11 col-sm-10 no-margin-right">
                                            <div class="comment-body">
                                                <div class="meta-info">
                                                    <div class="inline author">
                                                        <a href="#" class="bold">{{$items->nama}}</a>
                                                    </div>
                                                    <div class="star-holder inline">
                                                        <div class="star" data-score="4"></div>
                                                    </div>
                                                    <div class="date inline pull-right">
                                                        12.07.2013
                                                    </div>
                                                </div>
                                                <p class="comment-text">
                                                    {{$items->isi}} 
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                @endforeach
                                <!-- <br>
                                <div class="button-holder right">
                                    <a href="{{url::to('testimoni')}}" class="md-button narrow">write comment</a>
                                </div> -->
                                {{pluginTrustklik()}}
                            </div>
                            <div class="tab-pane" id="additional">
                                <div class="additional-info">
                                    <!-- <div class="star-holder inline">
                                        <div class="star" data-score="2"></div>
                                    </div> -->
                                    <p>
                                        <span>Berat:</span> {{$produk->berat}} gram
                                    </p>
                                    <p>
                                        <span>Stock:</span> {{$produk->stok}}
                                    </p>
                                    <p>
                                        <span>Vendor:</span> {{$produk->vendor}}
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane" id="description">
                                <div class="additional-info">
                                    <h4>Description</h4>
                                    <hr>
                                    <p>
                                        {{$produk->deskripsi}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<section class="section-related-products single-product-page">
    <div class="container">
        @if(count(other_product($produk)) > 0)
        <h2>you will also like</h2>
        <div class="product-grid no-move-down">
            <div class="tab-pane active">        
                @foreach(other_product($produk) as $relproduk)
                <div class="product-holder small">
                    <div class="product-item text-center">
                        <a href="#next" class="mini-next"></a>
                        <a href="#prev" class="mini-prev"></a>
                        <div class="image ">
                            <div class="product-mini-gallery">
                            @if($relproduk->gambar1 != '')
                             {{HTML::image(product_image_url($relproduk->gambar1),'gambar1',array('width'=>'177','height'=>'212'))}}
                            @endif
                            @if($relproduk->gambar2 != '')
                             {{HTML::image(product_image_url($relproduk->gambar2),'gambar2',array('width'=>'177','height'=>'212'))}}
                            @endif 
                            @if($relproduk->gambar3 != '')
                             {{HTML::image(product_image_url($relproduk->gambar3),'gambar3',array('width'=>'177','height'=>'212'))}}
                            @endif
                            </div>
                        </div>
                        <hr>
                        <div class="brand">
                            <!-- <img alt="" src="images/brand-small03.png" /> -->
                        </div>
                        <div class="title uppercase bold">
                            <a href="{{product_url($relproduk)}}">{{short_description($relproduk->nama,18)}}</a>
                        </div>
                        <div class="price">
                           <!--  @if(!empty($relproduk->hargaCoret))
                            <span class="previous-price">{{price($relproduk->hargaCoret)}}</span>
                            @endif -->
                            <span>{{price($relproduk->hargaJual)}}</span>
                        </div>
                        <div class="buttons-holder">
                            <div class="add-cart-holder">
                                <a class="md-button narrow" href="{{product_url($relproduk)}}">add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>