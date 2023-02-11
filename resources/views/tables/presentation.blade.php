<table class="table table-bordered table-striped">
    <thead>
    <tr>
    		<th>Event Name </th>
		<th>Start Date </th>
		<th>End Date </th>
		<th>Dailygrid Start </th>
		<th>Dailygrid End </th>
		<th>Starttime Firstday </th>
		<th>Endtime Lastday </th>
		<th>Participants Qty </th>
		<th>Charge </th>
		<th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)
    <tr>	 	<td> {{$record->event_name }} </td>
	 	<td> {{$record->start_date }} </td>
	 	<td> {{$record->end_date }} </td>
	 	<td> {{$record->dailygrid_start }} </td>
	 	<td> {{$record->dailygrid_end }} </td>
	 	<td> {{$record->starttime_firstday }} </td>
	 	<td> {{$record->endtime_lastday }} </td>
	 	<td> {{$record->participants_qty }} </td>
	 	<td> {{$record->charge }} </td>
	<td><a class="btn btn-secondary" href="{{route('presentations.show',$record->id)}}">
    <span class="fa fa-eye"></span>
</a><a class="btn btn-secondary" href="{{route('presentations.edit',$record->id)}}">
    <span class="fa fa-pencil"></span>
</a>
<form onsubmit="return confirm('Are you sure you want to delete?')"
      action="{{route('presentations.destroy',$record->id)}}"
      method="post"
      style="display: inline">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button type="submit" class="btn btn-secondary cursor-pointer">
        <i class="text-danger fa fa-remove"></i>
    </button>
</form></td></tr>

    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <td colspan="3">
            {{{$records->render()}}}
        </td>
    </tr>
    </tfoot>
</table>