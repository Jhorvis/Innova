@extends('layout')

@section('content')

<div class="agile_top_w3_post_sections">

	<div class="col-md-12 agile_top_w3_post agile_info_shadow">
		<!-- Aca el contenido-->
	
	
		<table id="table">
			<thead>
				<tr>
					<th>No.</th>
					<th>Producto</th>
					<th>Descripción</th>
					<th>Código</th>
					<th>Stock Max.</th>
					<th>Stock Min.</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 0  ?>
				@foreach ($products as $products)
				<?php $i++;  ?>
				<tr>
					<td>{{ $i}}</td>
					<td>{{ $products->name }}</td>
					<td>{{ $products->descriptionLarge }}</td>
					<td>{{ $products->code }}</td>
					<td>{{ $products->maxStock }}</td>
					<td>{{ $products->minStock }}</td>
					<td width="8%"><a href="#" class="btn btn-xs btn-info" title="Ver mas"><span class="fa fa-eye"></span></a>
						<a href="#" class="btn btn-xs btn-success" title="Editar"><span class="fa fa-pencil"></span></a>
						<a href="#" class="btn btn-xs btn-danger" title="Eliminar"><span class="fa fa-trash"></span></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
						   
	</div>    

	<div class="clearfix"></div>

</div>


@endsection