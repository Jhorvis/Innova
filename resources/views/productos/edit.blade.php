<!DOCTYPE html>
<html>
<head>
	<title>Edición</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<style type="text/css">
	body {
		background-color: #EDEDED;
	}
	.area-general {
		background-color: #FFFFFF;
		width: 90%;
		height: 300px;
		margin-left: 5%;
		margin-top: 1%;
	}
	.area{
		width: 80%;
		margin-left: 10%;
		margin-top: 20%;
	}
	label {
		color: red;
	}

	.area-button {
		width: 40%;
		margin-left: 30%;
	}
</style>


@foreach ($product as $producto)
@endforeach
<form method="post" action="{{ url('products.id.update') }}">
	{!!csrf_field()!!}
	<input type="hidden" name="id"  value="{{ $product->id }}">
	<div class="area-general">
	<div class="form-group area">
		<label class="control-label col-md-2 col-sm-2 col-xs-12" for="name">Producto <span class="required">*</span>
		</label>
	<div class="col-xs-12">
	<input class="form-control" type="text" name="name" value="{{ $product->name }}">
	</div>
	<label class="control-label col-md-2 col-sm-2 col-xs-12" for="name">Código <span class="required">*</span>
	</label>
	<div class="col-xs-12">
	<input class="form-control" type="text" name="code" value="{{ $product->code }}">
	</div>
	<label class="control-label col-md-2 col-sm-2 col-xs-12" for="name">Precio <span class="required">*</span>
	</label>
	<div class="col-xs-12">
	<input class="form-control" type="text" name="price" value="{{ $product->price }}">
	</div>
	</div>

	<div class="area-button">
	<button type="submit" class="btn btn-primary btn-block">Actualizar</button>
	</div>
	</div>
</form>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>