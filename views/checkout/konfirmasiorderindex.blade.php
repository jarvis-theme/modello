<div class="container">
@if(Session::has('message'))
<div class="error" id='message' style='display:none'>
	<p>Maaf, kode order anda tidak ditemukan.</p>					
</div>		
@endif

<section id="main-content">

	<div class="inner-column row padd">
        <div class="inner-bg col-lg-3 col-xs-12 col-sm-8">
        	<div class="contact-form">
				<p>Silakan masukkan kode order yang mau anda cari!</p>
				{{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))}}
					<input style="float:left;" type="text" class="md-input col-xs-12" placeholder=" Kode Order" name='kodeorder' required>
                    <br><br><br>
					<button type="submit" class="md-button narrow"><span> Cari Kode</span></button>
				{{Form::close()}}
			</div>
			<br>
        </div> <!--.center_column-->
    </div><!--.inner-column-->
    
</section>