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
                        <label class="col-md-3 col-form-label" for="textarea-input">Description</label>
                        <div class="col-md-9 form-group has-feedback{{ $errors->has('description') ? ' has-error' : ''}}">
                          <textarea class="form-control" value="{{old('description')}}" name="description" rows="9" placeholder="Description.." autocomplete="off"></textarea>
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