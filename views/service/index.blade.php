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
            <article class="col-lg-12 col-md-12 col-xs-12">
                <h4>Term of Service</h4>
                <p>{{$service->tos}}</p>
            </article>
            <article class="col-lg-12 col-md-12 col-xs-12">
                <h4>Refund Policy</h4>
                <p>{{$service->refund}}</p>
            </article>
            <article class="col-lg-12 col-md-12 col-xs-12">
                <h4>Privacy Policy</h4>
                <p>{{$service->privacy}}</p>
            </article>
        </div>
    </div>
</div>

    

</div>

</section>