<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Employees | Employee Crud</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
    
<div class="container-fluid px-4">
    <div class="row">
                        <h1 class="mt-4">All Employees  <a href="{{ route('employee.create') }}" class="btn btn-primary float-end">Add New Employee</a></h1><br>
    </div><br>
                        @if(session('message'))
                            <div class="alert alert-success">
                                  {{ session('message') }}
                            </div>
                        @endif
                      <div class="table-responsive">
                       <table class="table table-dark">
                          <thead>
                            <tr>
                               <th>ID</th>
                               <th>Employee Name</th>
                               <th>Profile Picture</th>
                               <th>Department</th>
                               <th>Reg No</th>
                               <th>Action</th>
                            </tr>
                          </thead>
                           
                          <tbody>
                          @foreach($employees as $employee)
                             <tr>
                               <td>{{ $employee->id }}</td>
                               <td>{{ $employee->name }}</td>
                               <td>
                                  <img src="{{ asset('uploads/employee/'.$employee->profile_pic)}}" height="50px" width="50px" alt="alt"/>
                               </td>
                               <td>{{ $employee->department }}</td>
                               <td>{{ $employee->reg_no }}</td>
                               <td>
                                   <a href="" class="btn btn-success">Edit</a>
                                   <a href="" class="btn btn-danger">Delete</a>
                                   {{-- <button type="button" value="{{ $category->id }}" class="btn btn-danger deleteCategoryBtn">Delete</button> --}}
                               </td>
                             </tr>
                          @endforeach
                          </tbody>
                       </table>
                      </div>
</div>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>