@extends('master')

@section('content')

<div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <strong>Update</strong> Posting</div>
                  <div class="card-body">
                  	@foreach($post as $post)
                    <form class="form-horizontal" 
                    action="{{ route('posting.update', $post->idPost) }}" method="POST">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textarea-input">Content</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="content" rows="9" autocomplete="off" required>{{ $post->content }}
                          </textarea>
                        </div>
                      </div>
                      <div class="card-footer">
                      <button class="btn btn-sm btn-primary" type="submit">
                      <i class="fa fa-dot-circle-o" ></i> Update</button>
                      <a  href="{{ route('posting.index') }}" class="btn btn-sm btn-danger" type="reset">Batal</a>
                      </div>
                    </form>
                    @endforeach
                  </div>
</div>
@endsection