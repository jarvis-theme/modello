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
                    <div class="entry">
                        <h2 class="title">{{$data->judul}}</h2>
                    </div>
                    <div class="row">
                        <article class="col-lg-12 col-md-12 col-xs-12">
                            <h3>{{$data->up}}</h3>
                            {{$data->isi}}
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>