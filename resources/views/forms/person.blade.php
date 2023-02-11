<form action="{{isset($route)?$route:route('persons.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
    <div class="form-group">
    <label for="salutationID">SalutationID</label>
    <select class="form-control {{ $errors->has('salutationID') ? ' is-invalid' : '' }}" name="salutationID" id="salutationID">
        @if(isset($salutations))
@foreach ($salutations as $data)
<option value="{{$data->id}}" {{$data->id==$model->salutationID?'selected':''}}>{{$data->id}}</option>
@endforeach
@endif

    </select>
      @if($errors->has('salutationID'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('salutationID') }}</strong>
    </div>
  @endif
</div>

    <div class="form-group">
        <label for="lastname">Lastname</label>
        <input type="text" class="form-control {{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" id="lastname" value="{{old('lastname',$model->lastname)}}" placeholder="" maxlength="50" required="required" >
          @if($errors->has('lastname'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('lastname') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" value="{{old('name',$model->name)}}" placeholder="" maxlength="50" required="required" >
          @if($errors->has('name'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('name') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="organisation">Organisation</label>
        <input type="text" class="form-control {{ $errors->has('organisation') ? ' is-invalid' : '' }}" name="organisation" id="organisation" value="{{old('organisation',$model->organisation)}}" placeholder="" maxlength="100" >
          @if($errors->has('organisation'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('organisation') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="street">Street</label>
        <input type="text" class="form-control {{ $errors->has('street') ? ' is-invalid' : '' }}" name="street" id="street" value="{{old('street',$model->street)}}" placeholder="" maxlength="50" required="required" >
          @if($errors->has('street'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('street') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="ZIP_code">ZIP Code</label>
        <input type="text" class="form-control {{ $errors->has('ZIP_code') ? ' is-invalid' : '' }}" name="ZIP_code" id="ZIP_code" value="{{old('ZIP_code',$model->ZIP_code)}}" placeholder="" maxlength="10" required="required" >
          @if($errors->has('ZIP_code'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('ZIP_code') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control {{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" id="city" value="{{old('city',$model->city)}}" placeholder="" maxlength="50" required="required" >
          @if($errors->has('city'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('city') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="comment">Comment</label>
        <input type="text" class="form-control {{ $errors->has('comment') ? ' is-invalid' : '' }}" name="comment" id="comment" value="{{old('comment',$model->comment)}}" placeholder="" maxlength="255" >
          @if($errors->has('comment'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('comment') }}</strong>
    </div>
  @endif 
    </div>

<div class="form-group">
    <label for="customer_since">Customer Since</label>
    <div class="input-group">
        <input type="date" class="form-control {{ $errors->has('customer_since') ? ' is-invalid' : '' }}" name="customer_since" id="customer_since"
               value="{{old('customer_since',$model->customer_since)}}"
               placeholder="" required="required" >
        <div class="input-group-addon">
            <label for="customer_since" class="fa fa-calendar">
            </label>
        </div>
    </div>
      @if($errors->has('customer_since'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('customer_since') }}</strong>
    </div>
  @endif
</div>

<div class="form-group">
    <label for="supplier_since">Supplier Since</label>
    <div class="input-group">
        <input type="date" class="form-control {{ $errors->has('supplier_since') ? ' is-invalid' : '' }}" name="supplier_since" id="supplier_since"
               value="{{old('supplier_since',$model->supplier_since)}}"
               placeholder="" required="required" >
        <div class="input-group-addon">
            <label for="supplier_since" class="fa fa-calendar">
            </label>
        </div>
    </div>
      @if($errors->has('supplier_since'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('supplier_since') }}</strong>
    </div>
  @endif
</div>

<div class="form-group">
    <label for="instructor_since">Instructor Since</label>
    <div class="input-group">
        <input type="date" class="form-control {{ $errors->has('instructor_since') ? ' is-invalid' : '' }}" name="instructor_since" id="instructor_since"
               value="{{old('instructor_since',$model->instructor_since)}}"
               placeholder="" required="required" >
        <div class="input-group-addon">
            <label for="instructor_since" class="fa fa-calendar">
            </label>
        </div>
    </div>
      @if($errors->has('instructor_since'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('instructor_since') }}</strong>
    </div>
  @endif
</div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>