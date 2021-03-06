@if($errors->all())
<div class="alert alert-error">
	We encountered the following errors:
	<br>
	<ul>
		@foreach($errors->all() as $message)
		<li>{{ $message }}</li>
		@endforeach
	</ul>
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-error">
	<p>Password lama anda tidak benar, silakan coba lagi.</p>
</div>
@endif
@if(Session::has('success'))
<div class="success" id='message' style='display:none'>
	<p>Informasi anda berhasil di update.</p>
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
    	@if($pengaturan->checkoutType!=2)
			@if($order->count() > 0)
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th><span>ID Order</span></th>
							<th class="desc"><span>Tanggal Order</span></th>
							<th><span>Detail Order</span></th>
							<th><span>Total Order</span></th>
							<th><span>No. Resi</span></th>
							<th><span>Status</span></th>
							<th><span>Konfirmasi</span></th>
						</tr>
					</thead>
					<tbody>
					@foreach ($order as $item)
						<tr>
							<td>
							@if($pengaturan->checkoutType==3)	
								{{prefixOrder().$item->kodePreorder}}
							@else 
								{{prefixOrder().$item->kodeOrder}}
							@endif
							</td>
							<td>
								@if($pengaturan->checkoutType==3)	
									{{waktu($item->tanggalPreorder)}}
								@else 
									{{waktu($item->tanggalOrder)}}
								@endif	
							</td>
							<td class="desc">
								<ul>
								@if($pengaturan->checkoutType==3) 
									<li>{{$item->preorderdata->produk->nama}} ({{$item->opsiSkuId==0 ? 'No Opsi' : $item->opsisku->opsi1.($item->opsisku->opsi2!='' ? ' / '.$item->opsisku->opsi2:'').($item->opsisku->opsi3!='' ? ' / '.$item->opsisku->opsi3:'')}}) - {{$item->jumlah}}<li>
								@else 
									@foreach ($item->detailorder as $detail)
									
									<li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku["opsi1"].($detail->opsisku["opsi2"] != '' ? ' / '.$detail->opsisku["opsi2"]:'').($detail->opsisku["opsi3"] !='' ? ' / '.$detail->opsisku["opsi3"]:'').')':''}} - {{$detail->qty}}</li>
									
									@endforeach 
								@endif
								</ul>
							</td>
							<td class="quantity">
								{{ price($item->total)	}}
							</td>
							<td class="sub-price">
								{{ $item->noResi }}
							</td>
							<td class="total-price">
							@if($pengaturan->checkoutType==1) 
								@if($item->status==0)
								<span class="label label-warning">Pending</span>
								
								@elseif($item->status==1)
								<span class="label label-info">Konfirmasi diterima</span>
								
								@elseif($item->status==2)
								<span class="label label-success">Pembayaran diterima</span>
								
								@elseif($item->status==3)
								<span class="label label-success">Terkirim</span>
								
								@elseif($item->status==4)
								<span class="label label-danger">Batal</span>
								@endif 
							@else 
								@if($item->status==0)
								<span class="label label-warning">Pending</span>
								
								@elseif($item->status==1)
								<span class="label label-info">Konfirmasi DP diterima</span>
								
								@elseif($item->status==2)
								<span class="label label-success">DP terbayar</span>
								
								@elseif($item->status==3)
								<span class="label label-info">Menunggu pelunasan</span>
								
								@elseif($item->status==4)
								<span class="label label-success">Pembayaran lunas</span>
								
								@elseif($item->status==5)
								<span class="label label-success">Terkirim</span>
								
								@elseif($item->status==6)
								<span class="label label-danger">Batal</span>
								
								@elseif($item->status==7)
								<span class="label label-info">Konfirmasi Pelunasan diterima</span>
								@endif
							@endif
							</td>
							<td style="text-align: center;">
							@if($pengaturan->checkoutType==3) 
								@if($item->status < 4)
								<button onclick="window.open('{{url('konfirmasipreorder/'.$item->id)}}','_blank')" class="btn btn-small btn-success" data-title="Edit" data-placement="top" data-tip="tooltip"><i class="fa fa-check"></i></button>
								@endif 
							@endif
							@if($pengaturan->checkoutType==1) 
								@if($item->status <= 1)
								<button onclick="window.open('{{url('konfirmasiorder/'.$item->id)}}','_blank')" class="btn btn-small btn-success" data-title="Edit" data-placement="top" data-tip="tooltip"><i class="fa fa-check"></i></button>
								@endif 
							@endif
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
				<div class="paging-holder">
                	<div class="pagination-buttons">
                    {{$order->links()}} 
				</div>
			</div>
			</div>
			@else
				<span> Belum ada data order</span>
			@endif
		@else 
			@if($inquiry->count()!=0)
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th><span>ID Order</span></td></th>
							<th><span>Tanggal Order</span></td></th>
							<th><span>Detail Order</span></td></th>
							<th><span>Status</span></td></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($inquiry as $item)
						<tr>
							<td>
								{{prefixOrder()}}{{$item->kodeInquiry}}
							</td>
							<td>
								{{waktu($item->created_at)}}
							</td>
							<td>
								@foreach ($item->detailInquiry as $detail)
								<li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku["opsi1"].($detail->opsisku["opsi2"] != '' ? ' / '.$detail->opsisku["opsi2"]:'').($detail->opsisku["opsi3"] !='' ? ' / '.$detail->opsisku["opsi3"]:'').')':''}} - {{$detail->qty}}</li>
								@endforeach
							</td>
							<td>
								@if($item->status==0)
								<span class="label label-warning">Pending</span>
								@elseif($item->status==1)
								<span class="label label-success">Inquiry diterima</span>
								@elseif($item->status==2)
								<span class="label label-info">Batal</span>
								@endif
							</td>
						</tr>
						@endforeach
					</tbody>
			@else
				<tr>
					<td colspan="2">
						Inquiry anda masih kosong.
					</td>
				</tr>
			@endif
				</table>
			</div>
		@endif
		<br>
        </div> <!--.center_column-->
    </div><!--.inner-column-->  
</section>