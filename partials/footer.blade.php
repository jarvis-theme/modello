<section class="section-brands-slider">
    <div class="container">
        <a href="#next" class="brands-next"></a>
        <a href="#prev" class="brands-prev"></a>
        <div class="brands-slider">
            @foreach(list_koleksi() as $koleksi)
            <div class="brand-item">
                <a href="{{koleksi_url($koleksi)}}">
                    <img alt="{{$koleksi->nama}}" src="{{url(koleksi_image_url($koleksi->gambar, 'original'))}}" height="81" />
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="section-footer">
    <div class="footer-logo-holder">
        <img src="{{url(logo_image_url())}}" />
    </div>
    <div class="footer-holder">
        <div class="container">
            <div class="col-xs-offset-2 col-xs-8 col-sm-6 col-sm-offset-0  col-md-3">
                <div class="footer-column adress-column">
                    <h4>connect with us</h4>

                    <div class="content">
                        <p class="bold">{{$kontak->nama}}</p>
                        <p>
                            {{$kontak->alamat}}
                            @if(!empty($kontak->telepon))
                            <br>{{$kontak->telepon}}
                            @endif
                            @if(!empty($kontak->hp))
                            <br>{{$kontak->hp}}
                            @endif
                            @if(!empty($kontak->bb))
                            <br>{{$kontak->bb}}
                            @endif
                            @if(!empty($kontak->email))
                            <br><a href="{{$kontak->email}}">{{$kontak->email}}</a>
                            @endif
                        </p>
                        <div class="social-buttons">
                            <ul class="inline list-inline square-icons">
                                @if(!empty($kontak->fb))
                                <li class="facebook">
                                    <a href="{{url($kontak->fb)}}" class="fa fa-facebook"></a>
                                </li>
                                @endif
                                @if(!empty($kontak->tw))
                                <li class="twitter">
                                    <a href="{{url($kontak->tw)}}" class="fa fa-twitter"></a>
                                </li >
                                @endif
                                 @if(!empty($kontak->pt))
                                <li class="linkedin">
                                    <a href="{{url($kontak->pt)}}" class="fa fa-pinterest "></a>
                                </li>
                                @endif
                                @if(!empty($kontak->gp))
                                <li class="gplus">
                                    <a href="{{url($kontak->gp)}}" class="fa fa-google-plus "></a>
                                </li>
                                @endif
                                @if(!empty($kontak->tl))
                                <li class="dribbble">
                                    <a href="{{url($kontak->tl)}}" class="fa fa-tumblr "></a>
                                </li>
                                @endif
                                @if(!empty($kontak->ig))
                                <li class="rss">
                                    <a href="{{url($kontak->ig)}}" class="fa fa-instagram "></a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-offset-2 col-xs-8 col-sm-6 col-sm-offset-0  col-md-3">
                <div class="footer-column">
                    <h4>new arrivals</h4>

                    <div class="content">
                        <ul class="footer-products">
                            @foreach(new_product(2) as $newproduk )
                            <li class="row">
                                <div class="thumb col-xs-3">
                                {{HTML::image(product_image_url($newproduk->gambar1,'thumb'), 'produk')}}
                                </div>
                                <div class="body col-xs-9">
                                    <h5><a href="{{product_url($newproduk)}}">{{short_description($newproduk->nama,30)}}</a></h5>
                                    <div class="price">
                                        @if(!empty($newtproduk->hargaCoret))
                                        <span class="previous-price">{{price($newproduk->hargaCoret)}}</span>
                                        @endif
                                        @if(!empty($newproduk->hargaJual))
                                        <span>{{price($newproduk->hargaJual)}}</span>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            @foreach($tautan as $key=>$menu)
            @if($key == '1' || $key == '2')
            <div class="col-xs-offset-2 col-xs-8 col-sm-6 col-sm-offset-0  col-md-3">
                <div class="footer-column">
                    <h4>{{$menu->nama}}</h4>

                    <div class="content">
                        <ul class="link-list">
                        @foreach($quickLink as $link_menu)
                            @if($menu->id == $link_menu->tautanId)
                            <li>
                                <a href="{{menu_url($link_menu)}}">{{$link_menu->nama}}</a>
                            </li>
                            @endif
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endif
            @endforeach 
        </div>
    </div>

    <div class="footer-payment-icons">
        <ul class="list-inline">
            @foreach(list_banks() as $value)
            <li>
                <img  alt="paypal" src="{{bank_logo($value)}}" /> 
            </li>
            @endforeach
            @foreach(list_payments() as $pay)
            @if($pay->nama == 'ipaymu' && $pay->aktif == 1)
            <li>
                <img alt="visa" src="{{url('img/bank/ipaymu.jpg')}}" /> 
            </li>
            @endif
            @endforeach
            @if(count(list_dokus()) > 0 && list_dokus()->status == 1)
            <li>
                <img alt="master card" src="{{url('img/bank/doku.jpg')}}" /> 
            </li>
            @endif
        </ul>
    </div>
</section>
<div class="copyright">
    <p>  &copy; {{ short_description(Theme::place('title'),80) }} {{date('Y')}} All Right Reserved. Powered by <a class="title-copyright" href="http://jarvis-store.com" target="_blank"> Jarvis Store</a></p>
</div>
{{pluginPowerup()}}