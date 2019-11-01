
<div class="modal fade " id="choose-academic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xs ">
	<section class="panel ">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>  
      <h4 class="modal-title">Choose Academic</h4>
      </div>
      <form action="#" class="form-horizontal" id="frm-view-class" method="POST">
       <div class="panel-body " style=" border-bottom: 1px solid #ccc">
         <div class="form-group ">
          {{-----FOR ACADEMIC--------}}
           <div class="col-sm-6">
             <label for="academic-year">Academic Year</label>
              <div class="input-group" style="cursor: pointer;">
                <select class="form-control" name="academic_id" id="academic_id">
                 <option value="">-----------</option>
                 @foreach($academics as $key => $y)
                 <option value="{{ $y->academic_id }}">{{ $y->academic }}</option>
                 @endforeach
                </select>
                <div class="input-group-addon">
                  <span class="fa fa-plus" id="add-more-academic"></span>
                </div>
              </div> 
           </div>
            {{-----FOR COURSE--------}}
            <div class="col-sm-6">
             <label for="program">Course </label>
              <div class="input-group">
                <select class="form-control" name="program_id" id="program_id">
                 <option value="">-----------</option>
                 @foreach($programs as $key => $y)
                 <option value="{{ $y->program_id }}">{{ $y->program }}</option>
                 @endforeach
                </select>
                <div class="input-group-addon">
                  <span class="fa fa-plus" id="add-more-program"></span>
                </div>
              </div> 
           </div>

           {{-----FOR LEVEL--------}}
            <div class="col-sm-6">
             <label for="level">Level </label>
              <div class="input-group">
                <select class="form-control" name="level_id" id="level_id">
                  
                </select>
                <div class="input-group-addon">
                  <span class="fa fa-plus" id="add-more-level"></span>
                </div>
              </div> 
           </div>

           {{-----FOR SHIFT--------}}
            <div class="col-sm-6">
             <label for="shift">Shift </label>
              <div class="input-group">
                <select class="form-control" name="shift_id" id="shift_id">
                 <option value="">-----------</option>
                 @foreach($shift as $key => $y)
                 <option value="{{ $y->shift_id }}">{{ $y->shift }}</option>
                 @endforeach
                </select>
                <div class="input-group-addon">
                  <span class="fa fa-plus" id="add-more-shift"></span>
                </div>
              </div> 
           </div>

           {{-----For Time--------}}
            <div class="col-sm-6">
             <label for="time">Time </label>
              <div class="input-group">
                <select class="form-control" name="time_id" id="time_id">
                 <option value="">-----------</option>
                 @foreach($time as $key => $y)
                 <option value="{{ $y->time_id }}">{{ $y->time }}</option>
                 @endforeach
                 
                </select>
                <div class="input-group-addon">
                  <span class="fa fa-plus" id="add-more-time"></span>
                </div>
              </div> 
           </div>

           {{-----FOR BATCH--------}}
            <div class="col-sm-3">
             <label for="batch">Batch </label>
              <div class="input-group">
                <select class="form-control" name="batch_id" id="batch_id">
                 <option value="">-----------</option>
                 @foreach($batch as $key => $y)
                 <option value="{{ $y->batch_id }}">{{ $y->batch }}</option>
                 @endforeach
                  
                </select>
                <div class="input-group-addon">
                  <span class="fa fa-plus" id="add-more-batch"></span>
                </div>
              </div> 
           </div>

           {{-----FOR GROUP--------}}
            <div class="col-sm-3">
             <label for="group">Group </label>
              <div class="input-group">
                <select class="form-control" name="group_id" id="group_id">
                 <option value="">-----------</option>
                 @foreach($group as $key => $y)
                 <option value="{{ $y->group_id }}">{{ $y->groups }}</option>
                 @endforeach
                </select>
                <div class="input-group-addon">
                  <span class="fa fa-plus" id="add-more-group"></span>
                </div>
              </div> 
           </div>

         </div>
         
       </div> 
      </form>
    {{--------------------------------}}
      
      <form action="#" method="get" id="frm-multi-class">
       <div class="panel panel-default">
        <div class="panel-heading">
         Class Information
          <button type="button" id="btn-go" class="btn btn-info btn-xs pull-right" style="margin-top: 5px">Go</button>
       </div>
        <div class="panel-body" id="add-class-info" style="overflow-y: auto; height: 350px;">
          </div>
      </div>
      </form>
       <div class="modal-footer">
         <button  data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        </div>
    {{--------------------------------}}
     
    </section>
    
  </div>
</div>		

