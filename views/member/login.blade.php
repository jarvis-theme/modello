@if(Session::has('error'))
<div class="error" id='message' style='display:none'>
    {{Session::get('error')}}
</div>
@endif

@if(Session::has('success'))
<div class="success" id='message' style='display:none'>
    <p>Selamat, anda sudah berhasil register. Silakan check email untuk mengetahui informasi akun anda.</p>
</div>
@endif

@if(Session::has('errorrecovery'))  
<div class="error" id='message' style='display:none'>
    <p>Maaf, email anda tidak ditemukan.</p>
</div>
@endif


<section class="section-signin-page">
    <div class="container">
        <div class="sign-in-holder">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <form class="form-login" action="{{url('member/login')}}" method="post" enctype="multipart/form-data">
                        <h3>returning customers</h3>
                        <p>
                            Phasellus sagittis magna sem, a bibendum quam. Nunc eu aliquam turpis.
                        </p>
                        <input name="email" class="md-input col-xs-12" placeholder="e-mail" required>
                        <input type="password" name="password" class="md-input col-xs-12" placeholder="password" required>
                        <a class=" forget-link" href="{{url('member/forget-password')}}">forgot your password?</a>
                        <button class="md-button narrow " type="submit">sign in</button>
                    </form>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <form class="form-guest-checkout">
                        <h3>guest checkout</h3>
                        <p>
                            Proceed to checkout, and at the end you can
    create an account on based informations you put on next steps to continue your order.
                        </p><p>
    Phasellus sagittis magna sem, a bibendum quam. Nunc eu aliquam turpis.
                        </p>
                      <br>
                        <a href="{{url('member/create')}}" class="md-button narrow" type="submit">Register</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>