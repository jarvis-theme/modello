@if(Session::has('errorlogin'))
    <div class="error" id='message' style='display:none'>
        <p>Maaf, email atau password anda salah.</p>
    </div>
@endif
@if(Session::has('error'))
    <div class="error" id='message' style='display:none'>
        {{Session::get('error')}}!!!
    </div>
@endif
@if(Session::has('errorrecovery'))
    <div class="error" id='message' style='display:none'>
        <p>Maaf, email anda tidak ditemukan.</p>
    </div>
@endif
@if(Session::has('forget'))
<div class="success" id='message' style='display:none'>
    <p>Cek email untuk me-reset password anda!</p>
</div>  
@endif
@if(Session::has('error'))
<div class="error" id='message' style='display:none'>
    <p>{{Session::get('error')}}</p>
</div>  
@endif

<section class="section-signin-page">
    <div class="container">
        <div class="sign-in-holder">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <h2 class="title">Lupa Password</h2><br>
                    <div class="input-group">
                        <form class="form-horizontal" action="{{url('member/forgetpassword')}}" method="post">
                            <input type="email" class="md-input col-xs-12" placeholder="Email" name='recoveryEmail' required>
                            <span class="input-group-btn btnlp">
                                <button class="md-button narrow" type="submit">Reset Password</button>
                            </span>
                        </form>
                    </div><br><br>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <h2 class="title">Pelanggan Baru</h2><br>
                    <p>Nikmati kemudahan berbelanja dengan mendaftar sebagai member.</p>
                    <a href="{{URL::to('member/create')}}" class="md-button narrow">Daftar</a>
                </div>
            </div>
        </div>
    </div>
</section>