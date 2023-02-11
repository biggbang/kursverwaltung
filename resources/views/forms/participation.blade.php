<form action="{{isset($route)?$route:route('participations.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="comment">Comment</label>
        <input type="text" class="form-control {{ $errors->has('comment') ? ' is-invalid' : '' }}" name="comment" id="comment" value="{{old('comment',$model->comment)}}" placeholder="" maxlength="250" >
          @if($errors->has('comment'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('comment') }}</strong>
    </div>
  @endif 
    </div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>