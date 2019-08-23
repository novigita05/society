@extends('master')

@section('content')

<div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <strong>Create</strong> Complaint</div>
                  <div class="card-body">
                  <form class="form-horizontal" action="{{ route('complaint.store') }}" method="POST">
                    {{ csrf_field() }}
                  <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="type">Type</label>
                        <div class="col-md-9">
                          <select class="form-control" name="type" autocomplete="off" required>
                            <option value="0">Please Select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                          </select>
                        </div>
                      </div>
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
                      <i class="fa fa-dot-circle-o" ></i> Send</button>
                      <a  href="{{ route('complaint.index') }}" class="btn btn-sm btn-danger" type="reset">Batal</a>
                      </div>
                    </form>
                  </div>
            </div>
@endsection