@extends('layouts.master')
@section('title','Student List')
@section('content')
{{-------------------------}}
  <div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-file-text-o"></i>Student List</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="#">Home</a></li>
			<li><i class="icon_document_alt"></i>Student</li>
			<li><i class="fa fa-files-o"></i> Student List</li>
		</ol>
	</div>
</div>

<div class="panel panel-default">
  <div class="panel-body">
   <form method="GET" id="frm-search">
     <table>
       <tr>
       	<td>
       	  <input type="search" name="search" class="form-control" value="{{ request('search') }}" placeholder="Search By ID or Name">	
       	</td>
       </tr>	
     </table>	
   </form>	
  </div>

  <div class="panel-body">
  	<div class="table-responsive">
	<table class="table table-bordered table-condensed table-striped">
  	  <thead>
  	  	<th style="text-align: center;">N<sup>o</sup></th>
  	  	<th style="text-align: center;">First Name</th>
  	  	<th style="text-align: center;">Last Name</th>
  	  	<th style="text-align: center;">Full Name</th>
  	  	<th style="text-align: center;">Sex</th>
  	  	<th style="text-align: center;">Birth Date</th>
  	  	<th style="text-align: center;">Action</th>
  	  </thead>

  	  <tbody>
  	  	@foreach($students as $key => $stu)
  	  	 <tr>
  	  	 	<td style="text-align: center;">{{ ++$key }}</td>
  	  	 	<td style="text-align: center;">{{ $stu->first_name }}</td>
  	  	 	<td style="text-align: center;">{{ $stu->last_name }}</td>
  	  	 	<td style="text-align: center;">{{ $stu->full_name }}</td>
			<td style="text-align: center;">{{ $stu->Sex }}</td>
  	  	 	<td style="text-align: center;">{{ $stu->dob }}</td>
  	  	 	<td style="text-align: center;">
  	  	 	  <a href="#">Edit</a> | <a href="#">Delete</a>	
  	  	 	</td>
  	  	 </tr>
  	  	 @endforeach
  	  </tbody>	
  	</table>
  	</div>
  </div>
  <div class="footer">
  	{{ $students->render() }}
  </div>	
</div>

@endsection