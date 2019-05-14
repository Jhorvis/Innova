@extends('layout')

@section('content')

<div class="agile_top_w3_post_sections">

	<div class="col-md-12 agile_top_w3_post agile_info_shadow">
		<!-- Aca el contenido-->
<ul>
		@foreach ($products as $product)

			<li>{{ $product->name }}</li>
		


		@endforeach
</ul>									   
	</div>    

	<div class="clearfix"></div>

</div>

@endsection