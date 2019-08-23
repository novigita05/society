@extends('master')

@section('content')

<div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <strong>Create</strong> Posting</div>
                  <div class="card-body">
                  <form class="form-horizontal" action="{{ route('posting.store') }}" method="POST">
                    {{ csrf_field() }}
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textarea-input">Content</label>
                        <div class="col-md-9 form-group has-feedback{{ $errors->has('content') ? ' has-error' : ''}}">
                          <textarea class="form-control" value="{{old('content')}}" name="content" rows="9" placeholder="Content..."></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="date">Date</label>
                        <div class="col-md-9">
                          <input class="form-control" type="datetime-local" name="created_at" placeholder="date" autocomplete="off" required>
                        </div>
                      </div>
                      <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit">
                      <i class="fa fa-dot-circle-o"></i> Send</button>
                    <button class="btn btn-sm btn-danger" type="reset">
                      <i class="fa fa-ban"></i> Reset</button>
                  </div>
                    </form>
                  </div>
                </div>
            </div>
@endsection