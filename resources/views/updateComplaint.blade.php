@extends('master')

@section('content')

<div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <strong>Update</strong> Complaint</div>
                  <div class="card-body">
                    @foreach($complaint as $complaint)
                    <form class="form-horizontal" 
                    action="{{ route('complaint.update', $complaint->idComplaint) }}" method="POST">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Type</label>
                        <div class="col-md-9">
                          <select class="form-control" name="type"  value="{{ $complaint->type }}" autocomplete="off" required>
                            <option value="0">Please Select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textarea-input">Content</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="content" rows="9" autocomplete="off" required>{{ $complaint->content }}
                          </textarea>
                        </div>
                      </div>
                      <div class="card-footer">
                      <button class="btn btn-sm btn-primary" type="submit">
                      <i class="fa fa-dot-circle-o" ></i> Update</button>
                      <a  href="{{ route('complaint.index') }}" class="btn btn-sm btn-danger" type="reset">Batal</a>
                      </div>
                    </form>
                    @endforeach
                  </div>
</div>
@endsection