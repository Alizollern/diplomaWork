<!DOCTYPE html>
<html>
<head>
<title>Laravel Search</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-4">
<form action="{{ route('doctor.addReciept') }}" method="POST">
	@csrf
	<input type="text" name="receipt_title" class="form-control" placeholder="number_of_receipt"><br>
	<input type="text" name="receipt_comments" class="form-control" placeholder="receipt_date"><br>
	<input type="date" name="expired_date" class="form-control" placeholder="expired_date"><br>
	<input type="text" name="doctor" class="form-control" placeholder="doctor_id"><br>
	<input type="hidden" name="patient" class="form-control" value="{{$id}}" ><br>
	<input type="submit" value="submit" class="btn btn-secondary">
	</div><br>

</form>
</div>
</div>
</div>
</body>
</html>
