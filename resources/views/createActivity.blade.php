@extends('master')

@section('content')

<div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <strong>Create</strong> Activity</div>
                  <div class="card-body">
                  <form class="form-horizontal" action="{{ route('activity.store') }}" method="POST">
                    {{ csrf_field() }}
                     <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="type_activity">Type</label>
                        <div class="col-md-9">
                          <select class="form-control" name="type_activity" autocomplete="off" required>
                            <option value="0">Please Select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textarea-input">Description</label>
                        <div class="col-md-9 form-group has-feedback{{ $errors->has('description') ? ' has-error' : ''}}">
                          <textarea class="form-control" value="{{old('description')}}" name="description" rows="9" placeholder="Description..."></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="date">Date</label>
                        <div class="col-md-9">
                          <input class="form-control" type="datetime-local" name="date" placeholder="date" autocomplete="off" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textarea-input">Location</label>
                        <div class="col-md-9 form-group has-feedback{{ $errors->has('location') ? ' has-error' : ''}}">
                          <input class="form-control" type="textarea-input" name="location" placeholder="Location" autocomplete="off">
                          @if ($errors->has('location'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('location')}}</p>
                                    </span>
                                @endif
                        </div>
                      </div>
                      <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit">
                      <i class="fa fa-dot-circle-o"></i> Send</button>
                    <button class="btn btn-sm btn-danger" type="reset">
                      <i class="fa fa-ban"></i> Reset</button>
                  </div>
                </div>
                    </form>
                  </div>
                  
            </div>
@endsection