<table class="table table-bordered table-striped">
    <thead>
    <tr>
    		<th>Coursename </th>
		<th>Skills </th>
		<th>Tools </th>
		<th>Material </th>
		<th>Charge </th>
		<th>Duration </th>
		<th>Max Participants </th>
		<th>Min Participants </th>
		<th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)
    <tr>	 	<td> {{$record->coursename }} </td>
	 	<td> {{$record->skills }} </td>
	 	<td> {{$record->tools }} </td>
	 	<td> {{$record->material }} </td>
	 	<td> {{$record->charge }} </td>
	 	<td> {{$record->duration }} </td>
	 	<td> {{$record->max_participants }} </td>
	 	<td> {{$record->min_participants }} </td>
	<td><a class="btn btn-secondary" href="{{route('courses.show',$record->id)}}">
    <span class="fa fa-eye"></span>
</a><a class="btn btn-secondary" href="{{route('courses.edit',$record->id)}}">
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