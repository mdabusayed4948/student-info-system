<script type="text/javascript">
	
   $('#academic_id').on('change',function(e){
    showClassInfo();
   })

   $('#level_id').on('change',function(e){
    showClassInfo();
   })

   $('#shift_id').on('change',function(e){
    showClassInfo();
   })

   $('#time_id').on('change',function(e){
    showClassInfo();
   })

   $('#batch_id').on('change',function(e){
    showClassInfo();
   })

   $('#group_id').on('change',function(e){
    showClassInfo();
   }) 
//=======================================	

	//========Level Change option=======================  
  $('#frm-view-class #program_id').on('change',function(e){
    var program_id = $(this).val();
    var level = $('#level_id');
    $(level).empty();
    $.get("{{ route('showLevel') }}",{program_id:program_id},function(data){
      $.each(data,function(i,l){
        $(level).append($("<option/>",{
        value : l.level_id,
        text  : l.level
      }))
      })
      showClassInfo();
    })
  })
//=======================================
	$('#show-class-info').on('click',function(e){
		e.preventDefault();
		showClassInfo();
		$('#choose-academic').modal('show');
	});
//=======================================
	function showClassInfo()
    {
    var data = $('#frm-view-class').serialize();
   // var academic_id = $('#academic_id').val();
    $.get("{{ route('showClassInformation') }}",data,function(data){
        //console.log(data);
        $('#add-class-info').empty().append(data);
       // $('trtd#hidden').addClass('hidden');
        //$('th#hidden').addClass('hidden');
        MergeCommonRows($('#table-class-info'));
    })
  }

//=======================================
	$('#dob').datepicker({
    changeMonth:true,
    changeYear:true,
    dateFormat:'yy-mm-dd'
  })  
</script>