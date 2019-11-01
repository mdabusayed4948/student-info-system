<div class="according-body collapse " id="demo{{ $key }}">
  <table>
    <thead>
      <tr>
      	<th style="text-align: center;">#</th>
      	<th>Transaction Date</th>
      	<th>Cashier</th>
      	<th>Paid</th>
      	<th>Remark</th>
      	<th>Description</th>
      	<th style="text-align: center;">Action</th>
      </tr>	
    </thead>

    <tbody>
      @foreach($readStudentTransaction->where('s_fee_id',$sf->s_fee_id) as $n => $st)
      <tr>
      	<td style="text-align: center;">{{ ++$n }}</td>
      	<td>{{ $st->transact_date }}</td>
      	<td>{{ $st->name }}</td>
      	<td>$ {{ number_format($st->paid,2) }}</td>
      	<td>{{ $st->remark }}</td>
      	<td>{{ $st->description }}</td>

      	<td style="text-align: center; width: 112px;">
      	  <a href="#" class="btn btn-success btn-xs tooltips" data-original-title="Edit"><i class="fa fa-edit" ></i></a>
      	  <a href="{{ route('deleteTransact',$st->transact_id) }}" class="btn btn-danger btn-xs tooltips" data-original-title="Delete"><i class="fa fa-trash-o" ></i></a>
      	  <a href="{{ route('printInvoice',$st->receipt_id) }}" target="_blank" class="btn btn-primary btn-xs tooltips" data-original-title="Print"><i class="fa fa-print" ></i></a>	
      	</td>

      </tr>	
      @endforeach
    </tbody>	
  </table>	
</div>