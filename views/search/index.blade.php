<section class="section-single-product-page sidebar-single-page">

<div class="container">
    <div class="row">
    <div class="col-xs-12 col-md-3">
        <div class="sidebar">
            <div class="accordion-widget category-accordions">
                @if(count(list_blog_category()) > 0)
                <h2>Category</h2>
                <div class="accordion">
                @foreach(list_blog_category() as $kat)
                @if(!empty($kat->nama))
                
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle collapsed"  href="{{blog_category_url($kat)}}">
                                {{$kat->nama}}
                            </a>

                        </div>
                    </div>
                
                @endif
                 @endforeach
                 </div>
                @endif
            </div> 
        </div>

    </div>
    <div class="col-xs-12 col-md-9">
        <div id="list-view" class="tab-pane active">
                @if(count(list_blog(null,@$blog_category)) > 0)
                    <div class="products-list-holder">
                        <div class="product-list-item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4">
                                    <div class="image-holder">
                                        <img alt="" src="images/products/product01.jpg"> 
                                    </div>
                                </div> 

                                <div class="col-xs-12 col-sm-8">
                                    <div class="item-details-holder">
                                        <div class="brand">
                                            <img src="images/brand-small01.png" alt="">
                                        </div>
                                        <h2 class="title">shirt from viskoze</h2>
                                        <div class="star-holder">
                                            <div class="star" data-score="3" style="cursor: pointer; width: 100px;"><img src="images/star-on.png" alt="1" title="bad">&nbsp;<img src="images/star-on.png" alt="2" title="poor">&nbsp;<img src="images/star-on.png" alt="3" title="regular">&nbsp;<img src="images/star-off.png" alt="4" title="good">&nbsp;<img src="images/star-off.png" alt="5" title="gorgeous"><input type="hidden" name="score" value="3"></div>
                                        </div>
                                        <div class="excerpt">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nunc lorem, mollis eget dignissim nec. 
                                            </p>
                                        </div>
                                        <div class="color-options">
                                            <div class="btn-group">
                                                <button type="button" class="color-option" data-color="#B73138" style="background-color: rgb(183, 49, 56);"></button>
                                                <button type="button" class="color-option" data-color="#F2ECE0" style="background-color: rgb(242, 236, 224);"></button>
                                                <button type="button" class="color-option" data-color="#2C333D" style="background-color: rgb(44, 51, 61);"></button>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="previous-price">$249,00</span>
                                            <span>$57.99</span>

                                        </div>

                                        <div class="buttons-holder">
                                            <div class="add-cart-holder">
                                                <a class="md-button" href="#">add to cart</a>
                                            </div>
                                            <div class="add-wishlist-holder">
                                                <a href="#" class="add-to-wishlist uppercase ic-sm-heart">
                                                    add to wishlist
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div> 
                            </div>
                        </div>
                        @foreach(list_blog(null,@$blog_category) as $blogs)
                        <div class="product-list-item">
                            <div class="row"> 

                                <div class="col-xs-12 col-sm-12">
                                    <div class="item-details-holder">
                                        <div class="brand">
                                            <!-- <img src="images/brand-small01.png" alt=""> -->
                                        </div>
                                        <h2 class="title">{{$blogs->judul}}</h2>
                                         <p>
                                            <small><i class="fa fa-calendar"></i> {{waktuTgl($blogs->updated_at)}}</small>&nbsp;&nbsp;
                                            @if(!empty($blogs->kategori->nama))
                                            <span class="date-post"><i class="fa fa-tags"></i> <a href="{{blog_category_url(@$blogs->kategori)}}">{{@$blogs->kategori->nama}}</a></span>
                                            @endif
                                        </p>
                                        <div class="excerpt">
                                            <p>
                                                {{shortDescription($blogs->isi,300)}}
                                            </p>
                                        </div>
                                        

                                        <div class="buttons-holder">
                                            <div class="add-cart-holder">
                                                <a class="md-button" href="{{blog_url($blogs)}}">Baca Selengkapnya →</a>
                                            </div>
                                        </div>

                                    </div>
                                </div> 
                            </div>
                        </div>
                        @endforeach


                    </div>
                


                <div class="paging-holder">
                    <div class="pagination-buttons">
                        
                        {{list_blog(null,@$blog_category)->links()}}
                    </div>
                </div>

         @else
        <article style="font-style:italic; text-align:center;">
            Blog tidak ditemukan.
        </article>
        @endif
        </div>
    </div>
</div>

    

</div>

</section>