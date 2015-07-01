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
                                    <a class="accordion-toggle collapsed" href="{{blog_category_url($kat)}}">
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
                                            <p>{{shortDescription($blogs->isi,300)}}</p>
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