@extends('layouts.master')
@section('content')

<style type="text/css">
	.student-photo{
		height: 160px;
		padding-left: 1px;
		padding-right: 1px;
		border:1px solid #ccc;
		background: #eee;
		width: 140px;
		margin: 0 auto;
	}

	.photo > input[type='file']{
		display: none;
	}

	.photo{
		width: 30px;
		height: 30px;
		border-radius: 100%;
	}

	.student-id{
		background-repeat: repeat-x;
		border-color: #ccc;
		padding: 5px;
		text-align: center;
		background: #eee;
		border-bottom: 1px solid #eee;
	}

	.btn-browse{
		border-color: #ccc;
		padding: 5px;
		text-align: center;
		background: #eee;
		border:none;
		border-top: 1px solid #ccc;
	}

	fieldset{
		margin-top: 5px;
	}

	fieldset legend{
		display: block;
		width: 100%
		padding: 0;
		font-size: 15px;
		line-height: inherit;
		color: #797979;
		border: 0;
		border-bottom: 1px solid #e5e5e5;
	}

</style>

{{-------------------}}
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-file-text-o"></i>Student Registration</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="#">Home</a></li>
			<li><i class="icon_document_alt"></i>Student</li>
			<li><i class="fa fa-files-o"></i>Create Student</li>
		</ol>
	</div>
</div>
{{-------------------}}
<div class="row">
<div class="col-lg-12">
	{{-------------------}}
  <div class="panel-group" id="accordion">
  	<div class="panel panel-default">
  	   <div class="panel-heading">
  	   	 <a data-toggle="collapse" data-parent="according" href="#collapsel" style="text-decoration: none;">Choose Academic</a>
  	   	 <a href="#" class="pull-right" id="show-class-info"><i class="fa fa-plus"></i></a>
  	   </div>

  	   <div id="collapsel" class="panel-collapse collapse in">
  	   	<div class="panel-body academic-detail"><p></p></div>
  	   	</div>
 </div> 	   	
</div>	
  <div class="panel panel-default">
   <div class="panel-heading">
   	  <b><i class="fa fa-apple"></i> Student Information</b>
   </div>
  
   
   	<form action="{{ route('postStudentRegister') }}" method="POST" id="frm-create-student" enctype="multipart/form-data">
	{!! csrf_field() !!}	
	<input type="hidden" name="class_id" id="class_id">
	<input type="hidden" name="user_id" id="user_id" value="{{ Auth::id() }}">
	<input type="hidden" name="dateregistered" id="dateregistered" value="{{ date('Y-m-d') }}">
	 <div class="panel-body" style="padding-bottom: 4px;">	
   		<div class="row">
   		  <div class="col-lg-9 col-md-9 col-sm-9">
   		  	{{------First Name---------}}
   		  	
   		  	  <div class="col-md-4">
   		  	    <div class="form-group">
   		  	      <label for="lastname">First Name</label>	
   		  	      <input type="text" name="first_name" id="first_name" class="form-control" required="1">
   		  	    </div>	
   		  	  </div>
			{{-----Last Name------------}}	
		  	  	<div class="col-md-4">
		  	    <div class="form-group">
		  	      <label for="firstname">Last Name</label>	
		  	      <input type="text" name="last_name" id="last_name" class="form-control" required="1">
		  	    </div>	
		  	  </div>
		  	  {{-----Gender ------------}}
		  	  <div class="col-md-4">
		  	  	<div class="form-group">
		  	  	  <fieldset>
		  	  	  	<legend>Sex</legend>
		  	  	  		<table style="width: 100%; margin-top: -14px;">
		  	  	  			<tr style="border-bottom: 1px solid #ccc">
		  	  	  			  <td>
		  	  	  			  	<label>
		  	  	  			  		<input type="radio" name="sex" id="sex" value="0" required="1">Male
		  	  	  			  	</label>
		  	  	  			  </td>
		  	  	  			  <td>
		  	  	  			  	<label>
		  	  	  			  		<input type="radio" name="sex" id="sex" value="1" required="1">Female
		  	  	  			  	</label>
		  	  	  			  </td>	
		  	  	  			</tr>
		  	  	  		</table>
		  	  	  	
		  	  	  </fieldset>	
		  	  	</div>
		  	  </div>
		  	 
			{{-----DOB ------------}}
			<div class="col-md-4">
			 <div class="form-group">
			  <label for="dob">Birth Date</label>
			  <div class="input-group">
			    <div class="input-group-addon">
			      <i class="fa fa-calendar studentdob"></i>	
			    </div>
			    <input type="text" name="dob" id="dob" class="form-control" placeholder="yyyy/mm/dd" required="1">	
			  </div>	
			 </div>	
			</div>
			{{-----National Card ------------}}
			<div class="col-md-4">
			  <div class="form-group">
			    <label for="national_card">National Card</label>
			    <input type="text" name="national_card" id="national_card" class="form-control">	
			  </div>	
			</div>
			{{-----status ------------}}
			<div class="col-md-4">
			  <div class="form-group">
			   <fieldset>
			   	<legend>Status</legend>
			   	<table style="width: 100%; margin-top: -14px;">
			   		<tr style="border-bottom: 1px solid #ccc">
			   			<td>
			   			  <label>
							<input type="radio" name="status" id="status" value="0" required="1" checked>Single
			   			  </label>
			   			  <label>
							<input type="radio" name="status" id="status" value="1" required="1" >Married
			   			  </label>	
			   			</td>
			   		</tr>
			   		
			   	</table>
			   </fieldset> 	
			  </div>	
			</div>
			{{-------Nationality---------}} 
			<div class="col-md-4">
			 <div class="form-group">
			 	<label for="nationality">Nationality</label>
			 	<input type="text" name="nationality" id="nationality" class="form-control">
			 </div>	
			</div>
			{{-------Rac---------}} 
			<div class="col-md-4">
			 <div class="form-group">
			 	<label for="rac">Rac</label>
			 	<input type="text" name="rac" id="rac" class="form-control">
			 </div>	
			</div>
			{{-------Passport---------}}
			<div class="col-md-4">
			 <div class="form-group">
			 	<label for="passport">Passport</label>
			 	<input type="text" name="passport" id="passport" class="form-control">
			 </div>	
			</div>
			{{-------Phone---------}}
			<div class="col-md-4">
			 <div class="form-group">
			 	<label for="phone">Phone</label>
			 	<input type="text" name="phone" id="phone" class="form-control">
			 </div>	
			</div>
			{{-------Email---------}}
			<div class="col-md-4">
			 <div class="form-group">
			 	<label for="email">Email</label>
			 	<input type="text" name="email" id="email" class="form-control">
			 </div>	
			</div>
		
   		  	
   		  </div>

   		  		{{-------photo---------}}
			<div class="col-lg-3 col-md-3 col-sm-3">
			 <div class="form-group form-group-login">
			  <table style="margin: 0 auto;">
			    <thead>
			      <tr class="info">
			       <th class="student-id">{{ sprintf('%05d',$student_id+1) }}</th>	
			      </tr>	
			    </thead>
			    <tbody>
			      <tr>
			      	<td class="photo">
			      	 {!!Html::image('photo/example.png',null,['class'=>'student-photo','id'=>'showPhoto'])!!}
			      	 <input type="file" name="photo" id="photo" accept="image/x-png,image/png,image/jpg,image/jpeg,">
			      	 
			      	</td>
			      </tr>	
			      <tr >
			      	<td >
			      		<input type="button" name="browse_file" id="browse_file" class="form-control btn-browse" value="Brouse">
			      	</td>
			      </tr>
			    </tbody>	
			  </table>	
			 </div>	
			</div>
			</div>
		</div>

		{{-------Address----------}}
		<div class="panel panel-default" style="">
		<div class="panel-heading" >
		 <b><i class="fa fa-apple"></i>Address</b>	
		</div>
		<div class="panel-body" style="">
		  <div class="row">
		  	<div class="col-md-3">
   		  	    <div class="form-group">
   		  	      <label for="village">Village</label>	
   		  	      <input type="text" name="village" id="village" class="form-control" >
   		  	    </div>	
   		  	  </div>
		  	<div class="col-md-3">
		  	  <div class="form-group">
		  	    <label for="commune">Commune</label>
		  	    <input type="text" name="commune" id="commune" class="form-control">	
		  	  </div>	
		  	</div>

		  	<div class="col-md-3">
		  	  <div class="form-group">
		  	    <label for="district">District</label>
		  	    <input type="text" name="district" id="district" class="form-control">	
		  	  </div>	
		  	</div>

		  	<div class="col-md-3">
		  	  <div class="form-group">
		  	    <label for="province">Province</label>
		  	    <input type="text" name="province" id="province" class="form-control">	
		  	  </div>	
		  	</div>
		  </div>
			<div class="row">
		  	<div class="col-md-12">
		  	  <div class="form-group">
		  	    <label for="current_address">Current Address</label>
		  	    <input type="text" name="current_address" id="current_address" class="form-control">	
		  	  </div>	
		  	</div>
		</div>	
		</div>
		{{-----address--------}}
		<div class="panel-footer">
		  <button value="submit" class="btn btn-default btn-save">Save <i class="fa fa-save"></i></button>	
		</div>	
   		</div>
   		
   	</form>
  		
  	</div>
 </div>   	
</div>	

@include('class.classPopup')
@endsection()


@section('script')
@include('script.scriptClassPopup')
<script type="text/javascript">
   $('#frm-multi-class #btn-go').addClass('hidden');
	//showClassInfo($('#academic_id').val());
	//showClassInfo();
	$(document).on('click','#class-edit',function(e){
		e.preventDefault();
		$('#class_id').val($(this).data('id'));
		$('.academic-detail p').text($(this).text());
		$('#choose-academic').modal('hide');
	})
//================================
  
//---------Browse Photo------------------
	$('#browse_file').on('click',function(){
		$('#photo').click();
	})
	$('#photo').on('change',function(e){
		showFile(this,'#showPhoto');	
	})
//================================
	function showFile(fileInput,img,showName)
	{
		if (fileInput.files[0]) {
			var reader = new FileReader();
			reader.onload =function(e)
			{
				$(img).attr('src',e.target.result);	
			}
			reader.readAsDataURL(fileInput.files[0]);

		}
		$(showName).text(fileInput.files[0].name)
	};
//==================================
    function MergeCommonRows(table)
    {
      var firstColumnBrakes = [];
      $.each(table.find('th'),function(i){
        var previous = null,cellToExtend = null,rowspan = 1;
         table.find("td:nth-child(" +i+ ")").each(function(index, e){
          var jthis = $(this), content = jthis.text();
          if (previous == content && content !== "" && $.inArray(index, firstColumnBrakes) === -1) {
            jthis.addClass('hidden');
            cellToExtend.attr("rowspan", (rowspan = rowspan+1));
          }else{
            if(i === 1) firstColumnBrakes.push(index);
            rowspan      = 1;
            previous     = content;
            cellToExtend = jthis;

          }
         });
      });
      $('td.hidden').remove();
    }

</script>
@endsection()