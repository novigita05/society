@extends('master')

@section('content')

<div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <strong>Create</strong> Announcement</div>
                  <div class="card-body">
                    <form class="form-horizontal" 
                    action="{{ route('announcement.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Judul</label>
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
                        <label class="col-md-3 col-form-label" for="textarea-input">Deskripsi</label>
                        <div class="col-md-9 form-group has-feedback{{ $errors->has('description') ? ' has-error' : ''}}">
                          <textarea class="form-control" value="{{old('description')}}" name="description" rows="9" placeholder="Description.." autocomplete="off"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Tempat</label>
                        <div class="col-md-9 form-group has-feedback{{ $errors->has('place') ? ' has-error' : ''}}">
                          <input class="form-control" type="text" name="place" value="{{old('place')}}" placeholder="Tempat" autocomplete="off">
                          @if ($errors->has('place'))
                            <span class="help-block">
                              <p>{{ $errors->first('place')}}</p>
                            </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="date">Tanggal</label>
                        <div class="col-md-9">
                          <input class="form-control" type="date" name="date" autocomplete="off" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Waktu</label>
                        <div class="col-md-9 form-group has-feedback{{ $errors->has('time') ? ' has-error' : ''}}">
                          <input class="form-control" type="text" name="time" value="{{old('time')}}" placeholder="Waktu" autocomplete="off">
                          @if ($errors->has('time'))
                            <span class="help-block">
                              <p>{{ $errors->first('time')}}</p>
                            </span>
                          @endif
                        </div>
                      </div>
                      <div class="card-footer">
                      <button class="btn btn-sm btn-primary" type="submit">
                      <i class="fa fa-dot-circle-o" ></i> Send</button>
                      <a  href="{{ route('announcement.index') }}" class="btn btn-sm btn-danger" type="reset">Batal</a>
                      </div>
                    </form>
                  </div>
</div>
@endsection