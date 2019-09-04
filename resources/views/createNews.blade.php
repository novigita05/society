@extends('master')

@section('content')

<div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <strong>Create</strong> News</div>
                  <div class="card-body">
                    <form class="form-horizontal" 
                    action="{{ route('news.store') }}" method="POST">
                    {{ csrf_field() }}
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Title</label>
                        <div class="col-md-9 form-group has-feedback{{ $errors->has('title') ? ' has-error' : ''}}">
                          <input class="form-control" type="text" name="title" value="{{old('title')}}" placeholder="Title" autocomplete="off">
                          @if ($errors->has('title'))
                            <span class="help-block">
                              <p>{{ $errors->first('title')}}</p>
                            </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textarea-input">Content</label>
                        <div class="col-md-9 form-group has-feedback{{ $errors->has('content') ? ' has-error' : ''}}">
                          <textarea class="form-control" value="{{old('content')}}" name="content" rows="9" placeholder="Content.." autocomplete="off" required></textarea>
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
                      <i class="fa fa-dot-circle-o" ></i> Send</button>
                      <a  href="{{ route('news.index') }}" class="btn btn-sm btn-danger" type="reset">Batal</a>
                      </div>
                    </form>
                  </div>
</div>
@endsection