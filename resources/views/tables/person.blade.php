<table class="table table-bordered table-striped">
    <thead>
    <tr>
    		<th>SalutationID </th>
		<th>Lastname </th>
		<th>Name </th>
		<th>Organisation </th>
		<th>Street </th>
		<th>ZIP Code </th>
		<th>City </th>
		<th>Comment </th>
		<th>Customer Since </th>
		<th>Supplier Since </th>
		<th>Instructor Since </th>
		<th>&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    @foreach($records as $record)
    <tr>	 	<td> {{$record->salutationID }} </td>
	 	<td> {{$record->lastname }} </td>
	 	<td> {{$record->name }} </td>
	 	<td> {{$record->organisation }} </td>
	 	<td> {{$record->street }} </td>
	 	<td> {{$record->ZIP_code }} </td>
	 	<td> {{$record->city }} </td>
	 	<td> {{$record->comment }} </td>
	 	<td> {{$record->customer_since }} </td>
	 	<td> {{$record->supplier_since }} </td>
	 	<td> {{$record->instructor_since }} </td>
	<td><a class="btn btn-secondary" href="{{route('persons.show',$record->id)}}">
    <span class="fa fa-eye"></span>
</a><a class="btn btn-secondary" href="{{route('persons.edit',$record->id)}}">
    <span class="fa fa-pencil"></span>
</a>
<form onsubmit="return confirm('Are you sure you want to delete?')"
      action="{{route('persons.destroy',$record->id)}}"
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