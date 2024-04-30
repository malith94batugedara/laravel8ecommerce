<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Employee | Employee Crud</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>
<body>
     <div class="container mt-4">

        <div class="row">
            <h1 class="mt-4">Add New Employee  <a href="{{ route('employee.index') }}" class="btn btn-primary float-end">All Employees</a></h1><br>
        </div><br>
        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
              <div> {{ $error }} </div>
            @endforeach
        </div>
        @endif
          <form action="{{ route('employee.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
               <div class="col-md-6">
                     <label>Name</label>
                     <input type="text" name="empname" class="form-control" placeholder="Ex : E.A Albert"/><br/>
                     <label>Address</label>
                     <input type="text" name="empadd" class="form-control" placeholder="Enter Employee Address"/><br/>
                     <label>Registration No</label>
                     <input type="text" name="empreg" class="form-control" placeholder="Enter Employee Reg No"/><br/>
                     <label>ETF NO</label>
                     <input type="text" name="empetf" class="form-control" placeholder="Enter Employee ETF No"/><br/>
               </div>
               <div class="col-md-6">
                     <label>Date of Birth</label>
                     <input type="text" id="dob" name="empdob" class="form-control"><br/>
                     <label>Age</label>
                     <input type="text" name="empage" class="form-control" placeholder="Enter Employee Age"/><br/>
                     <label>Department</label>
                     <select name="empdep" class="form-control">
                          <option>---Choose Employee Department---</option>
                          <option value="IT">IT</option>
                          <option value="finance">FINANACE</option>
                          <option value="hr">HR</option>
                     </select><br/>
                     <label>Profile Picture</label>
                     <input type="file" name="empimage" class="form-control"/><br/>
               </div>
          </div>
          <input type="submit" value="Save" class="btn btn-success"/>
          <input type="reset" value="Reset" class="btn btn-warning"/>
          </form>
     </div>
     <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
     <script>
        $(function() {
            $("#dob").datepicker({
                dateFormat: 'yy-mm-dd',
                changeYear: true,
                changeMonth: true,
                yearRange: '-100y:c+nn',
                maxDate: '-1d' // Optional: restrict selection to past dates only
            });
        });
    </script>
</body>
</html>