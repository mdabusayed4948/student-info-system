@extends('layouts.master')
@section('title','Multi Class Student Report')
@section('content')
<style type="text/css">
	caption{
		height: 50px;
		font-size: 20px;
		font-weight: bold;
	}
</style>
{{-------------------}}
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-file-text-o"></i>Student List</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="#">Home</a></li>
			<li><i class="icon_document_alt"></i>Reports</li>
			<li><i class="fa fa-files-o"></i> Student List</li>
		</ol>
	</div>
</div>
{{-------------------}}
 <div class="panel panel-default">
  	   <div class="panel-heading">
  	   	<b><i class="fa fa-apple"></i> Student Information</b>
  	   	 <a href="#" class="pull-right" id="show-class-info"><i class="fa fa-plus"></i>
  	   	 </a>
  	   </div>
  	   <div class="panel-body" style="padding-bottom: 4px;">
  	   	<p style="text-align: center; font-size: 20px; font-weight: bold;">Student Report</p>
  	   	<div class="show-student-info">
  	   		
  	   	</div>
  	   </div>
</div>  	   

@include('class.classPopup')
@endsection()


@section('script')
@include('script.scriptClassPopup')
<script type="text/javascript">
	$(document).on('click','#btn-go',function(e){
		e.preventDefault();
		data = $('#frm-multi-class').serialize();
		$.get("{{ route('showStudentListMultiClass') }}",data,function(data){
			//console.log(data);
			$('.show-student-info').empty().append(data);
		})

	})
//--------check all------------	
  $(document).on('click','#checkall',function(){
  	$(':checkbox.chk').prop('checked',this.checked)
  })
	
</script>	
@endsection()