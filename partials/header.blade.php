<header>
    <div class="lang-bar">
        <div class="container">
            <div class="col-xs-6">
                <ul class="inline">
                    <li class="active">
                        <a href="#"><!-- eng --></a>
                    </li>
                    <li>
                        <a href="#"><!-- de --></a>
                    </li>
                    <li>
                        <a href="#"><!-- pl --></a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-6 text-right">
                <ul class="inline">
                    <li class="active">
                        <a href="#"><!-- us --></a>
                    </li>
                    <li>
                        <a href="#"><!-- eur --></a>
                    </li>
                    <li>
                        <a href="#"><!-- pln --></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=" container">
        <section class="style-one-header top-area">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                @if ( ! is_login() )
                    <div class="login-menu-holder ic-sm-user">
                        welcome, you can <a href="{{url('member')}}">login</a> or <a href="{{url('member/create')}}">register</a>
                    </div>
                @else
                    <div class="login-menu-holder ic-sm-user">
                        welcome, {{ HTML::link('member', user()->nama,array('class'=>'loginRegLout')) }}
                        <a href="{{url('logout')}}">logout</a>
                    </div>
                @endif

                    <div class="hotline-holder ic-sm-phone">
                        <label>Telepon:</label>
                        <span>{{$kontak->telepon}}</span>
                    </div>
                </div>
                <div class="top-logo-holder col-sm-4 col-xs-12">
                    <div class="top-logo">
                        <a href="{{url('home')}}">{{HTML::image(logo_image_url(), 'Logo')}}</a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12">
                    <div class="wish-cart-holder">
                        {{shopping_cart()}}
                        <div class="search-holder">
                            <form action="{{url('search')}}" method="post">
                                <input type="text" name="search" placeholder="SEARCH" required />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @if(count(list_category()) > 0)
        <div class="top-menu visible-md visible-lg">
            <ul>
            @foreach(list_category() as $side_menu)
                @if(count($side_menu->anak) >= 1)
                <li class="dropdown">
                @else
                <li>
                @endif

                @if($side_menu->parent == '0')
                    <a class="dropdown-toggle" id="dropdownMenu1"  href="{{category_url($side_menu)}}">{{short_description($side_menu->nama,20)}}</a>
                    @if($side_menu->anak->count() != 0)
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        @foreach($side_menu->anak as $submenu)
                        @if($submenu->parent == $side_menu->id)
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" href="{{category_url($submenu)}}">{{short_description($submenu->nama,20)}}</a>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endif
            @endforeach
            </ul>
        </div>
        @endif
        <select class="top-drop-menu  visible-sm visible-xs">
            @foreach(main_menu()->link as $link)
            <option value="{{menu_url($link)}}">
                {{$link->nama}}
            </option>
            @endforeach
        </select>
    </div>
</header>