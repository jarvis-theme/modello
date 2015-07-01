@if($errors->all())
<div class="alert alert-error">
    Kami menemukan error berikut:
    <ul>
    @foreach($errors->all() as $message)
    <li>{{ $message }}</li>
    @endforeach
    </ul>
</div>
@endif
@if(Session::has('error'))
    <div class="alert alert-error">
        <h3>Kami menemukan error berikut:</h3>
        <p>{{Session::get('error')}}</p>
    </div>
@endif
@if(Session::has('success'))
<div class="success" id='message' style='display:none'>
  Selamat anda telah terdaftar.      
</div>
@endif


<section class="section-signin-page">
	<div class="container">
        <div class="row">
            <div id="center_column" class="inner-bg col-lg-12 col-xs-12 col-sm-8">
            	<div class="tab-title-top"><h1>Register</h1></div>
				<div class="register-page">
					<span>Jika anda telah memiliki akun, maka anda dapat langsung menuju <a href="{{url('member')}}"> halaman login</a></span>
					{{Form::open(array('url'=>'member','method'=>'post','class'=>'form-horizontal'))}}
						<br>
						<table class="col-xs-10 col-md-6">
							<tr>
								<td>Nama</td><td><input type="text" class="md-input col-xs-12" name="nama" value="{{Input::old('nama')}}" required></td>
							</tr>
							<tr>
								<td>Email</td><td><input type="email" class="md-input col-xs-12" name="email" value='{{Input::old("email")}}' required></td>
							</tr>
							<tr>
								<td>Password</td><td><input type="password" class="md-input col-xs-12" name="password" required></td>
							</tr>
							<tr>
								<td>Konfirmasi Password</td><td><input type="password" class="md-input col-xs-12" name="password_confirmation" required></td>
							</tr>
							<tr>
								<td>Alamat</td><td><textarea class="md-input col-xs-12" name="alamat" required>{{Input::old("alamat")}}</textarea></td>
							</tr>
							<tr>
								<td>Negara</td>
								<td>
									{{Form::select('negara',array('' => '-- Pilih Negara --') + $negara,Input::old(''),array('required', 'id="negara" data-rel="chosen" class="md-input col-xs-12"'))}}
								</td>
							</tr>
							<tr>
								<td>Provinsi</td>
								<td>
									{{Form::select('provinsi',array('' => '-- Pilih Provinsi --'), Input::old("provinsi"),array('required', 'id="provinsi" data-rel="chosen" class="md-input col-xs-12"'))}}
								</td>
							</tr>
							<tr>
								<td>Kota</td>
								<td>
									{{Form::select('kota',array('' => '-- Pilih Kota --'), Input::old("kota"),array('required', 'id="kota" data-rel="chosen" class="md-input col-xs-12"'))}}
								</td>
							</tr>
							<tr>
								<td>Kode Pos</td><td><input type="text" class="md-input col-xs-12" name="kodepos" value='{{Input::old("kodepos")}}'></td>
							</tr>
							<tr>
								<td>Telepon / HP</td><td><input type="text" class="md-input col-xs-12" name="telp" value='{{Input::old("telp")}}' required></td>
							</tr>
							<tr>
								<td>Captcha</td><td>{{ HTML::image(Captcha::img(), 'Captcha image') }}
								{{Form::text('captcha','',array('class'=>'md-input col-xs-12'))}}</td>
							</tr>
							<tr>
								<td colspan="2"><input type="checkbox" name="readme" id="inlineCheckbox1" value="1" required=""> Saya telah membaca dan menyetujui 
								<a style="color:#81b011;" href="{{url('service')}}" target="_blank">Persyaratan Member</a></td>
							</tr>
							<tr>
								<td><br><input type="submit" class="md-button narrow" value="Register"><br><br></td><td>&nbsp;</td>
								
							</tr>
						</table>
					{{Form::close()}}
				</div>
	        </div>
	    </div>
	</div>
</section>