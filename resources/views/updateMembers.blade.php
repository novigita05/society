@extends('master')

@section('content')

<div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <strong>Update</strong> News</div>
                  <div class="card-body">
                  	@foreach($members as $members)
                    <form class="form-horizontal" 
                    action="{{ route('members.update', $members->idMembers) }}" method="POST">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">NIK</label>
                        <div class="col-md-9">
                          <input class="form-control" type="text" name="nik" value="{{ $members->nik }}" autocomplete="off" required>
                            <div class="validate"></div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">NO.KK</label>
                        <div class="col-md-9">
                          <input class="form-control" type="text" name="no_kk" value="{{ $members->no_kk }}" autocomplete="off" required>
                            <div class="validate"></div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Nama</label>
                        <div class="col-md-9">
                          <input class="form-control" type="text" name="name" value="{{ $members->name }}" autocomplete="off" required>
                            <div class="validate"></div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-md-9">
                          <select class="form-control" name="gender" autocomplete="off" required>
                            <option value="{{ $members->gender}}" >{{ $members->gender}}</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                        </div>
                      </div>
                       <div class="form-group row">
                        <label class="col-md-3 col-form-label">Agama</label>
                        <div class="col-md-9">
                          <select class="form-control" name="religion" autocomplete="off" required>
                            <option value="{{ $members->religion}}">{{ $members->religion}}</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Pendidikan</label>
                        <div class="col-md-9">
                          <input class="form-control" type="text" name="education" value="{{ $members->education }}" autocomplete="off" required>
                            <div class="validate"></div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Pekerjaan</label>
                        <div class="col-md-9">
                          <input class="form-control" type="text" name="work" value="{{ $members->work }}" autocomplete="off" required>
                            <div class="validate"></div>
                        </div>
                      </div>
                       <div class="form-group row">
                        <label class="col-md-3 col-form-label">Status Tinggal</label>
                        <div class="col-md-9">
                          <select class="form-control" name="residence_status" autocomplete="off" required>
                            <option value="{{ $members->residence_status}}" >{{ $members->residence_status}}</option>
                            <option value="Tetap">Tetap</option>
                            <option value="Tidak Tetap">Tidak Tetap</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">No.Rumah</label>
                        <div class="col-md-9">
                          <input class="form-control" type="text" name="home_number" value="{{ $members->home_number }}" autocomplete="off" required>
                            <div class="validate"></div>
                        </div>
                      </div>
                      <div class="card-footer">
                      <button class="btn btn-sm btn-primary" type="submit">
                      <i class="fa fa-dot-circle-o" ></i> Update</button>
                      <a  href="{{ route('members.index') }}" class="btn btn-sm btn-danger" type="reset">Batal</a>
                      </div>
                    </form>
                    @endforeach
                  </div>
</div>
@endsection