<form action="{{isset($route)?$route:route('courses.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="coursename">Coursename</label>
        <input type="text" class="form-control {{ $errors->has('coursename') ? ' is-invalid' : '' }}" name="coursename" id="coursename" value="{{old('coursename',$model->coursename)}}" placeholder="" maxlength="50" required="required" >
          @if($errors->has('coursename'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('coursename') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="skills">Skills</label>
        <input type="text" class="form-control {{ $errors->has('skills') ? ' is-invalid' : '' }}" name="skills" id="skills" value="{{old('skills',$model->skills)}}" placeholder="" maxlength="250" >
          @if($errors->has('skills'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('skills') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="tools">Tools</label>
        <input type="text" class="form-control {{ $errors->has('tools') ? ' is-invalid' : '' }}" name="tools" id="tools" value="{{old('tools',$model->tools)}}" placeholder="" maxlength="250" >
          @if($errors->has('tools'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('tools') }}</strong>
    </div>
  @endif 
    </div>

    <div class="form-group">
        <label for="material">Material</label>
        <input type="text" class="form-control {{ $errors->has('material') ? ' is-invalid' : '' }}" name="material" id="material" value="{{old('material',$model->material)}}" placeholder="" maxlength="250" >
          @if($errors->has('material'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('material') }}</strong>
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

<div class="form-check">
    <input class="form-check-input {{ $errors->has('duration') ? ' is-invalid' : '' }}" type="checkbox" value="1"  name="duration"
           id="duration">
    <label class="form-check-label" for="duration">
        Duration
    </label>
      @if($errors->has('duration'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('duration') }}</strong>
    </div>
  @endif
</div>

<div class="form-check">
    <input class="form-check-input {{ $errors->has('max_participants') ? ' is-invalid' : '' }}" type="checkbox" value="1"  name="max_participants"
           id="max_participants">
    <label class="form-check-label" for="max_participants">
        Max Participants
    </label>
      @if($errors->has('max_participants'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('max_participants') }}</strong>
    </div>
  @endif
</div>

<div class="form-check">
    <input class="form-check-input {{ $errors->has('min_participants') ? ' is-invalid' : '' }}" type="checkbox" value="1"  name="min_participants"
           id="min_participants">
    <label class="form-check-label" for="min_participants">
        Min Participants
    </label>
      @if($errors->has('min_participants'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('min_participants') }}</strong>
    </div>
  @endif
</div>


    <div class="form-group text-right ">
        <input type="reset" class="btn btn-default" value="Clear"/>
        <input type="submit" class="btn btn-primary" value="Save"/>

    </div>
</form>