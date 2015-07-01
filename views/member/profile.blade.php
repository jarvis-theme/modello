@if($errors->all())
<div class="error" id='message' style='display:none'>
	Kami menemukan error berikut:
	<br>
	<ul>
		@foreach($errors->all() as $message)
		<li>{{ $message }}</li>
		@endforeach
	</ul>
</div>
@endif

@if(Session::has('success'))
<div class="success" id='message' style='display:none'>
	Selamat anda telah terdaftar.      
</div>
@endif

<section id="center_column">
    <div class="inner-column row">
        <div id="left_sidebar" class="col-lg-3 col-xs-12 col-sm-4">
            <div class="accordion-widget category-accordions">
                <h2>Category</h2>
                <div class="accordion">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle collapsed" href="{{url('member')}}">Order History</a>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle collapsed" href="{{url('member/profile/edit')}}">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--#left_sidebar-->
        <div id="center_column" class="inner-bg col-lg-9 col-xs-12 col-sm-8">
           {{Form::open(array('url'=>'member/update','method'=>'put','class'=>'form-horizontal'))}}
				<div class="form-group">
					<label for="inputName" class="col-md-2 control-label">Name</label>
					<div class="col-md-4">
						<input type="text" class="md-input col-xs-12" id="inputName" name="nama" value='{{$user->nama}}' required placeholder="Name">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail1" class="col-md-2 control-label">Email</label>
					<div class="col-md-4">
						<input type="email" class="md-input col-xs-12" name='email' value='{{$user->email}}' required id="inputEmail1" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPhone" class="col-md-2 control-label">Telepon</label>
					<div class="col-md-4">
						<input type="text" class="md-input col-xs-12" id="inputPhone" name='telp' value='{{$user->telp}}' required placeholder="Phone">
					</div>
				</div>
				<div class="form-group">
					<label for="inputCountry" class="col-md-2 control-label">Country</label>
					<div class="col-md-4">
						{{Form::select('negara',array('' => '-- Pilih Negara --') + $negara , ($user ? $user->negara :(Input::old("negara")? Input::old("negara") :"")), array('required'=>'', 'id'=>'negara', 'class'=>'md-input col-xs-12'))}}
					</div>
				</div>      
				<div class="form-group">
					<label for="inputCountry" class="col-md-2 control-label">Provinsi</label>
					<div class="col-md-4">
						{{Form::select('provinsi',array('' => '-- Pilih Provinsi --') + $provinsi , ($user ? $user->provinsi :(Input::old("provinsi")? Input::old("provinsi") :"")),array('required'=>'','id'=>'provinsi', 'class'=>'md-input col-xs-12'))}}
					</div>
				</div>      
				<div class="form-group">
					<label for="inputCountry" class="col-md-2 control-label">Kota</label>
					<div class="col-md-4">
						{{Form::select('kota',array('' => '-- Pilih Kota --') + $kota , ($user ? $user->kota :(Input::old("kota")? Input::old("kota") :"")),array('required'=>'','id'=>'kota', 'class'=>'md-input col-xs-12'))}}
					</div>
				</div>              
				<div class="form-group">
					<label for="inputAddress" class="col-md-2 control-label">Alamat</label>
					<div class="col-md-4">
					   <textarea class="md-input col-xs-12" rows="3" placeholder="Address" name='alamat' required>{{$user->alamat}}</textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="inputZip" class="col-md-2 control-label">Kode Pos</label>
					<div class="col-md-4">
						<input type="text" class="md-input col-xs-12" id="inputZip" placeholder="Kode Pos" name='kodepos' value='{{$user->kodepos}}' required>
					</div>
				</div>
				<hr>
				<div class="form-group">
					<label for="inputUsername" class="col-md-2 control-label">Password Lama</label>
					<div class="col-md-4">
						<input type="password" class="md-input col-xs-12" name="oldpassword" id="inputUsername" placeholder="Password Lama">
					</div>
				</div>
				<div class="form-group">
					<label for="inputUsername" class="col-md-2 control-label">Password Baru</label>
					<div class="col-md-4">
						<input type="password" class="md-input col-xs-12" name="password" id="inputUsername" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword" class="col-md-2 control-label">Ulang Password</label>
					<div class="col-md-4">
						<input type="password" class="md-input col-xs-12" name="password_confirmation" id="inputPassword" placeholder="Password">
					</div>
				</div>
				<hr />
				<div class="form-group">
					<div class="col-md-offset-2 col-md-10">
						<button type="submit" class="md-button narrow">Simpan</button>
					</div>
				</div>
			{{Form::close()}}
        </div> <!--.center_column-->
    </div><!--.inner-column-->  
</section>