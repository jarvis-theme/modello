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
                    <div class="products-list-holder">
                        <div class="product-list-item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="item-details-holder">
                                        <div class="brand">
                                            <!-- <img src="images/brand-small01.png" alt=""> -->
                                        </div>
                                        <h2 class="title">{{$detailblog->judul}}</h2>
                                        <p>
                                            <small><i class="fa fa-calendar"></i> {{waktuTgl($detailblog->updated_at)}}</small>&nbsp;&nbsp;
                                            @if(!empty($detailblog->kategori->nama))
                                            <span class="date-post"><i class="fa fa-tags"></i> <a href="{{blog_category_url(@$detailblog->kategori)}}">{{@$detailblog->kategori->nama}}</a></span>
                                            @endif
                                        </p>
                                        {{sosialShare(blog_url($detailblog))}}
                                        <div class="excerpt">
                                            <p>{{$detailblog->isi}}</p>
                                        </div>
                                        <hr>
                                        <div class="navigate comments clearfix">
                                            @if(isset($prev))
                                                <div class="pull-left">
                                                    <!-- <a href="{{$prev->slug}}">&larr; Sebelumnya</a> -->
                                                    <div class="buttons-holder">
                                                    <div class="add-cart-holder">
                                                        <a class="md-button" href="{{$prev->slug}}">&larr; Sebelumnya</a>
                                                    </div>
                                                </div>
                                                </div>
                                            @else
                                                <div class="pull-right"></div>
                                            @endif
                                            @if(isset($next))
                                                <div class="pull-right">
                                                    <div class="buttons-holder">
                                                        <div class="add-cart-holder">
                                                            <a class="md-button" href="{{$next->slug}}">Selanjutnya &rarr;</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="pull-right"></div>
                                            @endif
                                        </div><hr>
                                    </div>
                                    {{$fbscript}}
                                    {{fbcommentbox(blog_url($detailblog), '100%', '5', 'light')}}
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>