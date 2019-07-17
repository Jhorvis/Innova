@extends('layout')

@section('content')



 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Detalles de pedido</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form method="post" action="{{ route('ordersDetails.store') }}">
                      {!!csrf_field()!!}
                    
                      <input type="hidden" name="idOrder" value="{{$idOrder}}">

                  	<div class="col-md-4 col-sm-4 col-xs-12 col-lg-2">
                  		<label>Código</label>
                  		<input id="codigo" type="text" name="codigo" class="form-control" placeholder="Digite Código de producto" onchange="select_product();">
                  	</div>
                  	<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
                  		<label>Cantidad</label>
                  		<input type="number" id="cantidad" name="cantidad" class="form-control" min="1">
                  	</div>

                    <div class="col-md-4 col-sm-4 col-xs-12 col-lg-2">
                      <label>Producto</label>
                      <input id="producto" type="text" name="producto" class="form-control" readonly>
                    </div>

                  		<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
                  		<label>Neto</label>
                  		<input id="neto"  type="text" name="neto" class="form-control" min="0" readonly value="0">
                  	</div>
                  	<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
                  		<label>Con IVA</label>
                  		<input  id="precio" type="number" name="precio" class="form-control" min="0" value="0" readonly>
                  	</div>
                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                     <br>
                     <button class="btn btn-primary "><li class="fa fa-plus"> Agregar</li></button>
                    </div>
                    </form>

                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                  <table class="table table-bordered">
                  	<thead>
                  		<th>Item</th>
                  		<th>Producto</th>
                  		<th>Cantidad</th>
                      <th>Precio U</th>
                      <th>Precio T</th>
                  	</thead>
                    <?php $i = 1; ?>
                  	
                    

                    <tbody>

                      @foreach($getOrderDetails as $getOrderDetails)
                  		<td>{{ $i }}</td>
                  		<td>{{ $getOrderDetails->name }}</td>
                  		<td>{{ $getOrderDetails->quantity }}</td>
                      <td>{{ $getOrderDetails->price }}</td>
                      <td>{{ $getOrderDetails->price * $getOrderDetails->quantity}}</td>
                  	</tbody>
                    <?php $i++; ?>
                    @endforeach


                  </table>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                   <table class="table">
                  	<thead>
                  		<th>Detalles Pedido</th>
                  		
                  	</thead>
                  	<tbody>
                  		<td>Numero de productos:</td>
                  		<tr>
                  		<td>Neto: </td>
                    </tr>
                  		<tr>
                  		<td>Iva %:</td>
                    </tr>
                  		<tr>
                  		<td>Total:</td>
                    </tr>
                  		<tr>
                      </tr>
                  		
                  	</tbody>
                  </table>
              </div>
              </div>
          </div>


<script type="text/javascript">
	function select_product()
{ //id="select_usuario" products.show  


      var codigo = $("#codigo").val();
 
    
      $.get('products.code/'+codigo, function(data){

console.log(data);

	
	    $("#precio").val(data.price);
      $("#neto").val(data.neto);
      $("#producto").val(data.name);

      if (data.price == "N/A")
      {
         $("#cantidad").attr("disabled",true);
      } else {
         $("#cantidad").attr("disabled",false);
      }

      }); 
 
}
</script>

@endsection

