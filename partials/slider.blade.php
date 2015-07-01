<section class="section-modello-one-slider">
    <div class="container">
        <div class="flexslider">
            <div class="preloader bubble-loader loading">
                <div class="1"></div>
                <div class="2"></div>
                <div class="3"></div>
                <div class="4"></div>
                <div class="5"></div>
            </div>
            <ul class="slides">
                @foreach (slideshow() as $val) 
                <li class="slide">
                    <div class="flex-caption">
                        <div class="back-layer">
                            <div class="big-text anim">
                                <!-- 2015 -->
                            </div>
                        </div>
                        <div class="front-layer">
                            <div class="image ">
                                <img class="anim" alt="" width="993" height="557" src="{{slide_image_url($val->gambar)}}" />
                            </div>
                            <div class="texts-holder">
                                @if(!empty($val->text))
                                <div class="lines anim">
                                    <img alt="" src="{{url(dirTemaToko().'modello/assets/images/slider-01-lines.png')}}" />
                                </div>
                                <!-- <h3 class="anim">new season</h3> -->
                                <h2 class="anim">{{$val->text}}</h2>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>