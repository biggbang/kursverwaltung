<div class="card card-default">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-9">
                <a href="{{route('courses.show',$record->id)}}"> {{$record->id}}</a>
            </div>
            <div class="col-sm-3 text-right">
                <div class="btn-group">
                    <a class="btn btn-secondary" href="{{route('courses.edit',$record->id)}}">
    <span class="fa fa-pencil"></span>
</a>
                    <form onsubmit="return confirm('Are you sure you want to delete?')"
      action="{{route('courses.destroy',$record->id)}}"
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
			<th>Coursename</th>
			<td>{{$record->coursename}}</td>
		</tr>
		<tr>
			<th>Skills</th>
			<td>{{$record->skills}}</td>
		</tr>
		<tr>
			<th>Tools</th>
			<td>{{$record->tools}}</td>
		</tr>
		<tr>
			<th>Material</th>
			<td>{{$record->material}}</td>
		</tr>
		<tr>
			<th>Charge</th>
			<td>{{$record->charge}}</td>
		</tr>
		<tr>
			<th>Duration</th>
			<td>{{$record->duration}}</td>
		</tr>
		<tr>
			<th>Max Participants</th>
			<td>{{$record->max_participants}}</td>
		</tr>
		<tr>
			<th>Min Participants</th>
			<td>{{$record->min_participants}}</td>
		</tr>

            </tbody>
        </table>
    </div>
</div>
