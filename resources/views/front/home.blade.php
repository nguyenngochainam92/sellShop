@extends('master')
@section('title', 'Home')
@section('css')
	<link href="{!! asset('css/price-range.css') !!}" rel="stylesheet">
@endsection
@section('content')
	@include('common.slider')
	<section>
		 <div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<!--category-productsr-->
						@include('common/catagory_product')
						<!--/category-products-->
						
						<!--brands_products-->
						@include('common/brands_products')
						<!--/brands_products-->

						<!--price-range-->
						@include('common/price-range')
						<!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="img/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<!--features_items-->
					@include('common/features_items')
					<!--features_items-->

					<!--category-tab-->
					@include('common/category_tab')
					<!--/category-tab-->

					<!--recommended_items-->
					@include('common/recommended_items')
					<!--/recommended_items-->

				</div>
			</div>
		</div>
	</section>
@endsection
@section('scripts')
	<script src="{!! asset('js/price-range.js') !!}"></script>
	<script type="text/javascript">
		/*price range*/

		 $('#sl2').slider();

			var RGBChange = function() {
			  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
			};	
				
	</script>
@endsection