@if(Session::has('msg2'))
<div class="success" id='message' style='display:none'>
    Terima kasih, pesan anda sudah terkirim.
</div>
@endif
@if(Session::has('msg3'))
<div class="success" id='message' style='display:none'>
    Maaf, pesan anda belum terkirim.
</div>
@endif
@if($errors->all())
<div class="error" id='message' style='display:none'>
    Terjadi kesalahan dalam menyimpan data.<br><br>
    <ul>
        @foreach($errors->all() as $message)
        <li>-{{ $message }}</li><br>
        @endforeach
    </ul>
</div>
@endif

<!-- pesan -->
<section class="section-contact-page style-2">
    <div class="map-holder">
        @if($kontak->lat!='0' || $kontak->lng!='0')
            <iframe style="float:right;width:100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn=0.006849,0.009892&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
        @else
            <iframe style="float:right;width:100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->alamat }}&amp;aq=0&amp;oq=gegerkalong+hil&amp;sspn=0.006849,0.009892&amp;ie=UTF8&amp;hq=&amp;hnear={{ $kontak->alamat }}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
        @endif  
    </div>
</section>

<section class="section-contact-form-holder">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-5">
                <div class="contact-form-holder">
                    <h3>
                        contact form 
                    </h3>
                    <p>
                        Phasellus sagittis magna sem, a bibendum quam. Nunc eu aliquam turpis.
                    </p>
                   
                    <div class="message-box"></div>

                    <form id="contact-form" class="contact-form " action="{{url('kontak')}}" method="post" >
                        <fieldset>
                            <div class="control-group">
                                <div class="controls">
                                    <input  id="cname" placeholder="your name" name="namaKontak" size="25" class="md-input  required col-xs-12" required  />
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <input id="cemail" placeholder="your email" name="emailKontak" class="md-input  required email col-xs-12" required />
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <textarea id="ccomment" name="messageKontak" rows="9"  cols="5" class="md-input  required col-xs-12" required>your message</textarea>
                                </div>
                            </div>
                            <div class="button-holder left">
                                <input class="submit  md-button large " type="submit" value="send message" />
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-7">
                <div class="content-holder about-us">
                    <h3>Sed eleifend ipasum id auctor ultrices roin consectetur tincidunt dignissim.</h3>
                    <p>
                        <p>Aenean placerat tempus iaculis. In venenatis quis elit ut facilisis. Sed nec massa accumsan est egestas mollis vitae id mi. Aenean et laoreet velit. Pellentesque nec massa pellentesque, tempus purus lacinia, vestibulum eros. 
                    </p>

                    <!-- <p>Modelo - eCommerce  <br> 
                      4 East 80th Streetd<br>
                        New York, NY
                        </p>
                    <p>
                       (123) 941 756 1234<br>
                        (123) 941 756 1234<br>
                        <br>
                        
                     <a href="#">contact@yourstore.com</a>
                    </p> -->

                    @if(!empty($kontak->alamat))
                        <strong>Shop Address :</strong> {{$kontak->alamat}}<br>
                    @endif
                    @if(!empty($kontak->telepon))
                        <strong>Phone :</strong> {{$kontak->telepon}}<br>
                    @endif
                    @if(!empty($kontak->hp))
                        <strong>HP :</strong> {{$kontak->hp}}<br>
                    @endif
                    @if(!empty($kontak->bb))
                        <strong>BBM :</strong> {{$kontak->bb}}<br>
                    @endif
                    @if(!empty($kontak->email))
                        <strong>Email :</strong><a href="mailto:{{$kontak->email}}"> {{$kontak->email}}</a>
                    @endif
                </div>
            </div>
        </div><hr>
    </div>
</section>