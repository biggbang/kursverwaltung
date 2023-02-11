<div class="card card-default">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-9">
                <a href="{{route('persons.show',$record->id)}}"> {{$record->id}}</a>
            </div>
            <div class="col-sm-3 text-right">
                <div class="btn-group">
                    <a class="btn btn-secondary" href="{{route('persons.edit',$record->id)}}">
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
</form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-block">
        <table class="table table-bordered table-striped">
            <tbody>
            		<tr>
			<th>SalutationID</th>
			<td>{{$record->salutationID}}</td>
		</tr>
		<tr>
			<th>Lastname</th>
			<td>{{$record->lastname}}</td>
		</tr>
		<tr>
			<th>Name</th>
			<td>{{$record->name}}</td>
		</tr>
		<tr>
			<th>Organisation</th>
			<td>{{$record->organisation}}</td>
		</tr>
		<tr>
			<th>Street</th>
			<td>{{$record->street}}</td>
		</tr>
		<tr>
			<th>ZIP Code</th>
			<td>{{$record->ZIP_code}}</td>
		</tr>
		<tr>
			<th>City</th>
			<td>{{$record->city}}</td>
		</tr>
		<tr>
			<th>Comment</th>
			<td>{{$record->comment}}</td>
		</tr>
		<tr>
			<th>Customer Since</th>
			<td>{{$record->customer_since}}</td>
		</tr>
		<tr>
			<th>Supplier Since</th>
			<td>{{$record->supplier_since}}</td>
		</tr>
		<tr>
			<th>Instructor Since</th>
			<td>{{$record->instructor_since}}</td>
		</tr>

            </tbody>
        </table>
    </div>
</div>
