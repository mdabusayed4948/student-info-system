<style type="text/css">
	.academic-details{
		white-space: normal;
		width: 500px;
	}
	
	table tbody > tr >td{
		vertical-align: middle;
	}
</style>

<table class="table-hover table-striped table-condensed table-bordered" id="table-class-info" data-page-length="4" style="width: 100%">
	<thead>
		<tr>
			<th>Program</th>
			<th>Level</th>
			<th>Shift</th>
			<th>Time</th>
			<th>Academic Details</th>
			<th>Action</th>
			<th>
			  <input type="checkbox" id="checkall">	
			</th>
		</tr>
	</thead>
	<tbody>
		@foreach($classes as $c)
		<tr>
			<td>{{ $c->program }}</td>
			<td>{{ $c->level }}</td>
			<td>{{ $c->shift }}</td>
			<td>{{ $c->time }}</td>
			<td class="academic-details">
				<a href="#" data-id="{{ $c->class_id }}" id="class-edit">
					Program: {{ $c->program }} / Level: {{ $c->level }} / Shift: {{ $c->shift }} / Time: {{ $c->time }} / Batch: {{ $c->batch }} / Group: {{ $c->groups }} / StartDate: {{ date("d-M-Y",strtotime($c->start_date)) }} / EndDate: {{ date("d-M-Y",strtotime($c->end_date)) }}
				</a>
			</td>
			<td style="vertical-align: middle; width: 50px" id="hidden">
				<button class="btn btn-danger btn-sm del-class" value="{{ $c->class_id }}">Del</button>
			</td>
			<td>
			  <input type="checkbox" name="chk[]" value="{{ $c->class_id }}" class="chk">	
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

<script type="text/javascript">
	$(document).ready( function () {
      $('#table-class-info').DataTable();
    });
</script>

