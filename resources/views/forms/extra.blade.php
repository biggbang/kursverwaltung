<form action="{{isset($route)?$route:route('extras.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="item">Item</label>
        <input type="text" class="form-control {{ $errors->has('item') ? ' is-invalid' : '' }}" name="item" id="item" value="{{old('item',$model->item)}}" placeholder="" maxlength="100" required="required" >
          @if($errors->has('item'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('item') }}</strong>
    </div>
  @endif 
    </div>

<div class="form-group">
    <label for="date">Date</label>
    <div class="input-group">
        <input type="date" class="form-control {{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" id="date"
               value="{{old('date',$model->date)}}"
               placeholder="" >
        <div class="input-group-addon">
            <label for="date" class="fa fa-calendar">
            </label>
        </div>
    </div>
      @if($errors->has('date'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('date') }}</strong>
    </div>
  @endif
</div>

    <div class="form-group">
        <label for="charge">Charge</label>
        <input type="text" class="form-control {{ $errors->has('charge') ? ' is-invalid' : '' }}" name="charge" id="charge" value="{{old('charge',$model->charge)}}" placeholder="" required="required" >
          @if($errors->has('charge'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('charge') }}</strong>
    </div>
  @endif 
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>