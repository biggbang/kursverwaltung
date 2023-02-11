<form action="{{isset($route)?$route:route('presentations.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" name="_method" value="{{isset($method)?$method:'POST'}}"/>
        <div class="form-group">
        <label for="event_name">Event Name</label>
        <input type="text" class="form-control {{ $errors->has('event_name') ? ' is-invalid' : '' }}" name="event_name" id="event_name" value="{{old('event_name',$model->event_name)}}" placeholder="" maxlength="50" required="required" >
          @if($errors->has('event_name'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('event_name') }}</strong>
    </div>
  @endif 
    </div>

<div class="form-group">
    <label for="start_date">Start Date</label>
    <div class="input-group">
        <input type="date" class="form-control {{ $errors->has('start_date') ? ' is-invalid' : '' }}" name="start_date" id="start_date"
               value="{{old('start_date',$model->start_date)}}"
               placeholder="" required="required" >
        <div class="input-group-addon">
            <label for="start_date" class="fa fa-calendar">
            </label>
        </div>
    </div>
      @if($errors->has('start_date'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('start_date') }}</strong>
    </div>
  @endif
</div>

<div class="form-group">
    <label for="end_date">End Date</label>
    <div class="input-group">
        <input type="date" class="form-control {{ $errors->has('end_date') ? ' is-invalid' : '' }}" name="end_date" id="end_date"
               value="{{old('end_date',$model->end_date)}}"
               placeholder="" required="required" >
        <div class="input-group-addon">
            <label for="end_date" class="fa fa-calendar">
            </label>
        </div>
    </div>
      @if($errors->has('end_date'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('end_date') }}</strong>
    </div>
  @endif
</div>

<div class="form-group">
    <label for="dailygrid_start">Dailygrid Start</label>
    <div class="input-group">
        <input type="time" class="form-control {{ $errors->has('dailygrid_start') ? ' is-invalid' : '' }}" name="dailygrid_start" id="dailygrid_start"
               value="{{old('dailygrid_start',$model->dailygrid_start)}}"
               placeholder="" required="required" >
        <div class="input-group-addon">
            <label for="dailygrid_start" class="fa fa-calendar">
            </label>
        </div>
    </div>
      @if($errors->has('dailygrid_start'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('dailygrid_start') }}</strong>
    </div>
  @endif
</div>

<div class="form-group">
    <label for="dailygrid_end">Dailygrid End</label>
    <div class="input-group">
        <input type="time" class="form-control {{ $errors->has('dailygrid_end') ? ' is-invalid' : '' }}" name="dailygrid_end" id="dailygrid_end"
               value="{{old('dailygrid_end',$model->dailygrid_end)}}"
               placeholder="" required="required" >
        <div class="input-group-addon">
            <label for="dailygrid_end" class="fa fa-calendar">
            </label>
        </div>
    </div>
      @if($errors->has('dailygrid_end'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('dailygrid_end') }}</strong>
    </div>
  @endif
</div>

<div class="form-group">
    <label for="starttime_firstday">Starttime Firstday</label>
    <div class="input-group">
        <input type="time" class="form-control {{ $errors->has('starttime_firstday') ? ' is-invalid' : '' }}" name="starttime_firstday" id="starttime_firstday"
               value="{{old('starttime_firstday',$model->starttime_firstday)}}"
               placeholder="" >
        <div class="input-group-addon">
            <label for="starttime_firstday" class="fa fa-calendar">
            </label>
        </div>
    </div>
      @if($errors->has('starttime_firstday'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('starttime_firstday') }}</strong>
    </div>
  @endif
</div>

<div class="form-group">
    <label for="endtime_lastday">Endtime Lastday</label>
    <div class="input-group">
        <input type="time" class="form-control {{ $errors->has('endtime_lastday') ? ' is-invalid' : '' }}" name="endtime_lastday" id="endtime_lastday"
               value="{{old('endtime_lastday',$model->endtime_lastday)}}"
               placeholder="" >
        <div class="input-group-addon">
            <label for="endtime_lastday" class="fa fa-calendar">
            </label>
        </div>
    </div>
      @if($errors->has('endtime_lastday'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('endtime_lastday') }}</strong>
    </div>
  @endif
</div>

<div class="form-check">
    <input class="form-check-input {{ $errors->has('participants_qty') ? ' is-invalid' : '' }}" type="checkbox" value="1"  name="participants_qty"
           id="participants_qty">
    <label class="form-check-label" for="participants_qty">
        Participants Qty
    </label>
      @if($errors->has('participants_qty'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('participants_qty') }}</strong>
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