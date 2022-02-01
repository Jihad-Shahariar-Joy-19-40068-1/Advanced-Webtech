@extends('layouts.app')
@section('content')

	<title>Registration Form</title>

	<table border="1" align="center" width="45%">
		<tr height="100px">
			<th colspan="3" height="100"><h2>Registration</h2></th>
		</tr>
		<tr height="35px">
			<td>Name</td>
			<td><input type="text" name="" value=""></td>
			<td width="5%"></td>
		</tr>
		<tr height="35px">
			<td>Email</td>
			<td><input type="text" name="" value=""></td>
			<td></td>
		</tr>
		<tr height="35px">
			<td>Gender</td>
			<td>
				<input type="radio" name="Gender" value="">Male
				<input type="radio" name="Gender" value="">Female
				<input type="radio" name="Gender" value="">Other
			</td>
			<td></td>
		</tr>
		<tr height="35px">
			<td>Date of Birth</td>
			<td>
				<input type="number" name="" value="" max="31" min="1">/
				<input type="text" name="" value="">/
				<input type="number" name="" value="" max="2021"> <i>(dd/mm/yyyy)</i>
			</td>
			<td></td>
		</tr>
		<tr height="35px">
			<td>Blood Group</td>
			<td>
				<select name="">
					<option value="">A+</option>
					<option value="">A-</option>
					<option value="">B+</option>
					<option value="">B-</option>
					<option value="">O+</option>
					<option value="">O-</option>
					<option value="">AB+</option>
					<option value="">AB-</option>
				</select>
			</td>
			<td></td>
		</tr>
		<tr height="35px">
			<td>Degree</td>
			<td>
				<input type="checkbox" name="option[]" value="">SSC
				<input type="checkbox" name="option[]" value="">HSC
				<input type="checkbox" name="option[]" value="">BSc.
				<input type="checkbox" name="option[]" value="">MSc.
			</td>
			<td></td>
		</tr>
		<tr height="35px">
			<td>Photo</td>
			<td colspan="2"><input type="file" name="" value=""></td>
		</tr>
		<tr height="35px">
			<td colspan="3"></td>
		</tr>
		<tr height="35px" >
			<td colspan="3" align="right">
				<a href="login"><input type="button" name="" value="Submit">
				<a href="registration"><input type="button" name="" value="Reset">
			</td>
		</tr>
	</table>

@endsection('')