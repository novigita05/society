@extends('master')

@section('content')

<div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <strong>Update</strong> Announcement</div>
                  <div class="card-body">
                  	@foreach($announcement as $anc)
                    <form class="form-horizontal" 
                    action="{{ route('announcement.update', $anc->idAnnouncement) }}" method="POST">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Judul</label>
                        <div class="col-md-9">
                          <input class="form-control" type="text" name="title" value="{{ $anc->title }}" autocomplete="off" required>
                            <div class="validate"></div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textarea-input">Deskripsi</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="description" rows="9" autocomplete="off" required>{{ $anc->description }}
                          </textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Tempat</label>
                        <div class="col-md-9">
                          <input class="form-control" type="text" name="place" value="{{ $anc->place }}" autocomplete="off" required>
                            <div class="validate"></div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Tanggal</label>
                        <div class="col-md-9">
                          <input class="form-control" type="date" name="date" value="{{ $anc->date }}" autocomplete="off" required>
                            <div class="validate"></div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Waktu</label>
                        <div class="col-md-9">
                          <input class="form-control" type="text" name="time" value="{{ $anc->time }}" autocomplete="off" required>
                            <div class="validate"></div>
                        </div>
                      </div>
                      <div class="card-footer">
                      <button class="btn btn-sm btn-primary" type="submit">
                      <i class="fa fa-dot-circle-o" ></i> Update</button>
                      <a  href="{{ route('announcement.index') }}" class="btn btn-sm btn-danger" type="reset">Batal</a>
                      </div>
                    </form>
                    @endforeach
                  </div>
</div>
@endsection