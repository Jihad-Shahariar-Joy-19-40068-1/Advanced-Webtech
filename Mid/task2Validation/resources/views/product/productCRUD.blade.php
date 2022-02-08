<html>
    <head>
	<title>Products CRUD</title>
    </head>
    <body>

	<form method="post" action="{{route('product.submit')}}">
		{{@csrf_field()}}
		<fieldset>
			<legend><b>Products</b></legend>
			<table align="center">
				<tr>
					<td>Name: </td>
					<td><input type="text" placeholder="Product name" name="pname" value="{{old('pname')}}"></td>
					<td>
						@error('pname')
						<span>{{$message}}</span>
						@enderror
					</td>
				</tr>
				<tr>
					<td>Price:</td>
					<td><input type="text" placeholder="Price" name="price" value="{{old('price')}}"></td>
					<td>
						@error('price')
						<span>{{$message}}</span>
						@enderror
					</td>
				</tr>
				<tr>
					<td>Quantity:</td>
					<td><input type="text" placeholder="Quantity" name="qty" value="{{old('qty')}}"></td>
					<td>
						@error('qty')
						<span>{{$message}}</span>
						@enderror
					</td>
				</tr>
				<tr>
					<td>Description:</td>
					<td><input type="text" placeholder="Description" name="des" value="{{old('des')}}"></td>
					<td>
						@error('des')
						<span>{{$message}}</span>
						@enderror
					</td>
				</tr>
				<tr>
					<td colspan = 3 align="center"><br>
						<!-- <input type="submit" name="submit" value="Submit"> -->
						<a href="{{route('productCRUD')}}"><input type="button" name="" value="Reset"></a>
         		        <input type="submit">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
    </body>
</html>
