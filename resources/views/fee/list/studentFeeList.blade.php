<style type="text/css">
	.ac:hover{ background: #394A59;}

</style>
<div class="panel panel-default" style="margin-top: -18px;">
 <div class="panel-heading">Pay List</div> 
  <div class="panel-body">
    <div class="table-responsive">
      <table style="border-collapse: collapse;" class="table-hover table-bordered" id="list-student-fee">

        <thead>
      	  <tr>
      	  	<th style="text-align: center;">N<sup>o</sup></th>
            <th style="text-align: center;">Program</th>
      	  	<th style="text-align: center;">Level</th>
      	  	<th style="text-align: center;">Fee</th>
      	  	<th style="text-align: center;">Amount</th>
      	  	<th style="text-align: center;">Discount</th>
      	  	<th style="text-align: center;">Paid</th>
      	  	<th style="text-align: center;">Balance</th>
      	  	<th style="text-align: center;">Options</th>
      	  </tr> 	
      	</thead>

      	<tbody id="tbody-student-fee">

		{{--------Test---------}}
   {{--@for($i=0;$i<5;$i++)--}}

		@foreach($readStudentFee as $key => $sf)

      	  <tr data-id="" id="sfeeId">
      	  	<td style="text-align: center;">{{ $key+1 }}</td>
            <td style="text-align: center;">{{ $sf->program }}</td>
      	  	<td style="text-align: center;">{{ $sf->level }}</td>
      	  	<td style="text-align: center;">$ {{ number_format($sf->school_fee,2) }}</td>
      	  	<td style="text-align: center;">$ {{ number_format($sf->student_amount,2) }}</td>
      	  	<td style="text-align: center;">{{ $sf->discount }}%</td>
      	  	<td style="text-align: center;">
            $ {{ number_format($readStudentTransaction->where('s_fee_id',$sf->s_fee_id)->sum('paid'),2) }}
            <input type="hidden" name="b" id="b">
           </td>
      	  	<td style="text-align: center; color: red; font-weight: bold;">
            $ {{ number_format($sf->student_amount-$readStudentTransaction->where('s_fee_id',$sf->s_fee_id)->sum('paid'),2) }}
          </td>

            <td style="text-align: center; width: 115px; ">
              <a href="#" class="btn btn-success btn-xs btn-sfee-edit tooltips" data-original-title="Edit" data-placement="bottom" data-id-update-student-fee="{{ $sf->s_fee_id }}">

                        <i class="fa fa-edit"></i>

                      </a>
                    <button type="button" class="btn btn-danger btn-xs btn-paid tooltips" data-original-title="Complete" data-placement="bottom" value="{{ $sf->student_amount-$readStudentTransaction->where('s_fee_id',$sf->s_fee_id)->sum('paid') }}" data-id-paid="{{ $sf->s_fee_id }}">

                      <i class="fa fa-usd"></i>

                    </button>
                    <button class="btn btn-primary btn-xs according-toggle tooltips" data-original-title="Partial" data-placement="bottom" data-toggle="collapse" data-target="#demo{{ $key }}"><span class="fa fa-eye"></span></button>
            </td>

      	  </tr>

		<tr>
      	    <td colspan="9" class="hiddenRow">
      	      @include('fee.list.transactionList') 
	
      	    </td>	
      	</tr>

      	@endforeach
    {{--------End Test---------}}  	
		</tbody>

      </table>	
    </div>	
  </div>
  <div class="panel-footer" style="height: 40px;"></div>	
</div>

