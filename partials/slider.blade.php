<section class="homepage2-banners-holder">
            <div class="container">
                <div class="masonry-banners">
                    @foreach(vertical_banner() as $key=>$bannerv)
                    <a href="#">
                    	<img class="lazy" alt="" src="{{banner_image_url($bannerv->gambar)}}" />
                    </a>
                    @endforeach

                </div>
            </div>
        </section>