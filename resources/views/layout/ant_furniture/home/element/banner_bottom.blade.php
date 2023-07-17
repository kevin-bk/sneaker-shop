<section class="awe-section-2">	
	<div class="section_banner_home hidden-xs container">
	<div class="row">
		<div class="col-md-3 col-sm-3 box box1">
		@if(!empty($banner_home_1))
			<div class="box-inner">
				<a href="/test">
					<img src="{{$banner_home_1->full_image_url}}"  alt="{{$banner_home_1->title}}">
				</a>
				<div class="text">
				
				{!!$banner_home_1->code!!}
				
				</div>
			</div>
		@endif
		</div>
		<div class="col-md-6 col-sm-6 box box2">
		@if(!empty($banner_home_2))
			<div class="box-inner">
				<a href="/test">
					<img src="{{$banner_home_2->full_image_url}}"  alt="{{$banner_home_2->title}}">
				</a>
				<div class="text">
				{!!$banner_home_2->code!!}
				</div>
			</div>
		@endif
		</div>
		<div class="col-md-3 col-sm-3 box box3">
		@if(!empty($banner_home_3))
			<div class="box-inner">
				<a href="#">
					<img src="{{$banner_home_3->full_image_url}}"  alt="{{$banner_home_3->title}}">
				</a>
				<div class="text">
				{!!$banner_home_3->code!!}
				</div>
			</div>
		@endif
		</div>
	</div>
</div>
</section>