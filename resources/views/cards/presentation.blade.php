<div class="card card-default">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-9">
                <a href="{{route('presentations.show',$record->id)}}"> {{$record->id}}</a>
            </div>
            <div class="col-sm-3 text-right">
                <div class="btn-group">
                    <a class="btn btn-secondary" href="{{route('presentations.edit',$record->id)}}">
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
</form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-block">
        <table class="table table-bordered table-striped">
            <tbody>
            		<tr>
			<th>Event Name</th>
			<td>{{$record->event_name}}</td>
		</tr>
		<tr>
			<th>Start Date</th>
			<td>{{$record->start_date}}</td>
		</tr>
		<tr>
			<th>End Date</th>
			<td>{{$record->end_date}}</td>
		</tr>
		<tr>
			<th>Dailygrid Start</th>
			<td>{{$record->dailygrid_start}}</td>
		</tr>
		<tr>
			<th>Dailygrid End</th>
			<td>{{$record->dailygrid_end}}</td>
		</tr>
		<tr>
			<th>Starttime Firstday</th>
			<td>{{$record->starttime_firstday}}</td>
		</tr>
		<tr>
			<th>Endtime Lastday</th>
			<td>{{$record->endtime_lastday}}</td>
		</tr>
		<tr>
			<th>Participants Qty</th>
			<td>{{$record->participants_qty}}</td>
		</tr>
		<tr>
			<th>Charge</th>
			<td>{{$record->charge}}</td>
		</tr>

            </tbody>
        </table>
    </div>
</div>
