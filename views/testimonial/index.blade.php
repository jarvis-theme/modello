@if(Session::has('msg'))
<div class="success" id='message' style='display:none'>
	<p>Terima kasih, testimonial anda sudah terkirim.</p>
</div>
@endif
@if($errors->all())
<div class="error" id='message' style='display:none'>
	Terjadi kesalahan dalam menyimpan data.<br>
	<ul>
	@foreach($errors->all() as $message)
		<li>{{ $message }}</li>
	@endforeach
	</ul>
</div>
@endif

<!-- =============================================================================================== -->

<section class="section-single-product-page sidebar-single-page">

<div class="container">
    <div class="row">
    <div class="col-xs-12 col-md-3">
        <div class="sidebar">
            <div class="accordion-widget category-accordions">
                @if(count(list_blog_category()) > 0)
                <h2>Category</h2>
                <div class="accordion">
                @foreach(list_blog_category() as $kat)
                @if(!empty($kat->nama))
                
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle collapsed"  href="{{blog_category_url($kat)}}">
                                {{$kat->nama}}
                            </a>

                        </div>
                    </div>
                
                @endif
                 @endforeach
                 </div>
                @endif
            </div> 
        </div>

    </div>
    <div class="col-xs-12 col-md-9">
        <div class="tab-content ">
        <div class="tab-pane active " id="comments">
             @foreach (list_testimonial() as $items) 
           <div class="comment-item">
                <div class="row no-margin">
                    <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                        <div class="avatar">
                            <img alt="avatar" src="http://example.jstore.local/themes/7-tema/modello/assets/images/default-avatar.jpg">
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-11 col-sm-10 no-margin-right">
                        <div class="comment-body">
                            <div class="meta-info">
                                <div class="inline author">
                                    <a href="#" class="bold">{{$items->nama}}</a>
                                </div>
                                <div class="star-holder inline">
                                   <!--  <div class="star" data-score="4"></div> -->
                                </div>
                                <div class="date inline pull-right">
                                    <!-- 12.07.2013 -->
                                </div>
                            </div>
                            <p class="comment-text">
                                {{$items->isi}} 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <br><br>
        <div class="col-lg-1 col-xs-12 col-sm-2 no-margin"></div>
        <div class="respond col-md-6">
            <h3 style="margin-top: 1px;margin-bottom: 20px;">Buat Testimonial</h3>
            <form method="post" action="{{URL::to('testimoni')}}" role="form">
                <div class="control-group">
            
                <div class="controls">
                   <div class="form-group">
                    <label for="name">Your Name</label>
                    <input id="cname" placeholder="your name" name="nama" size="25" class="md-input  required col-xs-12">
                    </div>
                </div>
            </div>
            <div class="control-group">
            
            <div class="controls">
                <div class="form-group">
               <label for="exampleInputEmail1">Testimonial</label>

                <textarea id="ccomment" name="testimonial" rows="9" cols="5" class="md-input  required col-xs-12 valid" placeholder="">your message</textarea>
            </div>
            </div>
        </div>


                <input class="submit  md-button large " type="submit" value="send message" placeholder="">
                <br><br>
            </form>
        </div>
        
        </div>
    </div>
</div>

    

</div>

</section>