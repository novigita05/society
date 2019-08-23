@extends('master')

@section('content')

<div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <strong>Create</strong> Members</div>
                  <div class="card-body">
                    <form class="form-horizontal" 
                    action="{{ route('members.store') }}" method="POST">
                    {{ csrf_field() }}
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">NIK</label>
                        <div class="col-md-9 form-group has-feedback{{ $errors->has('nik') ? ' has-error' : ''}}">
                          <input class="form-control" type="text" name="nik" value="{{old('nik')}}" placeholder="NIK" autocomplete="off">
                          @if ($errors->has('nik'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('nik')}}</p>
                                    </span>
                                @endif
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">No.KK</label>
                        <div class="col-md-9 form-group has-feedback{{ $errors->has('no_kk') ? ' has-error' : ''}}">
                          <input class="form-control" type="text" name="no_kk" value="{{old('no_kk')}}" placeholder="NO.KK" autocomplete="off">
                          @if ($errors->has('no_kk'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('no_kk')}}</p>
                                    </span>
                                @endif
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Nama</label>
                        <div class="col-md-9 form-group has-feedback{{ $errors->has('name') ? ' has-error' : ''}}">
                          <input class="form-control" type="text" name="name" value="{{old('name')}}" placeholder="Nama" autocomplete="off">
                          @if ($errors->has('name'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('name')}}</p>
                                    </span>
                                @endif
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Tempat Lahir</label>
                        <div class="col-md-9 form-group has-feedback{{ $errors->has('place_of_birth') ? ' has-error' : ''}}">
                          <input class="form-control" type="text" name="place_of_birth" value="{{old('place_of_birth')}}" placeholder="Tempat Lahir" autocomplete="off">
                          @if ($errors->has('place_of_birth'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('place_of_birth')}}</p>
                                    </span>
                                @endif
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="date">Tanggal Lahir</label>
                        <div class="col-md-9">
                          <input class="form-control" type="date" name="date_of_birth" placeholder="Tanggal Lahir" autocomplete="off" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-md-9">
                          <select class="form-control" name="gender" autocomplete="off" required>
                            <option value="">--Pilih--</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Agama</label>
                        <div class="col-md-9">
                          <select class="form-control" name="religion" autocomplete="off" required>
                            <option value="">--Pilih--</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                          </select>
                        </div>
                      </div>
                       <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Pendidikan</label>
                        <div class="col-md-9 form-group has-feedback{{ $errors->has('education') ? ' has-error' : ''}}">
                          <input class="form-control" type="text" name="education" value="{{old('education')}}" placeholder="education" autocomplete="off">
                          @if ($errors->has('education'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('education')}}</p>
                                    </span>
                                @endif
                        </div>
                      </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Pekerjaan</label>
                        <div class="col-md-9 form-group has-feedback{{ $errors->has('work') ? ' has-error' : ''}}">
                          <input class="form-control" type="text" name="work" value="{{old('work')}}" placeholder="Pekerjaan" autocomplete="off">
                          @if ($errors->has('work'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('work')}}</p>
                                    </span>
                                @endif
                        </div>
                      </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label">Status Tinggal</label>
                        <div class="col-md-9">
                          <select class="form-control" name="residence_status" autocomplete="off" required>
                            <option value="">--Pilih--</option>
                            <option value="Tetap">Tetap</option>
                            <option value="Tidak Tetap">Tidak Tetap</option>
                          </select>
                        </div>
                      </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">No.Rumah</label>
                        <div class="col-md-9 form-group has-feedback{{ $errors->has('home_number') ? ' has-error' : ''}}">
                          <input class="form-control" type="text" name="home_number" value="{{old('home_number')}}" placeholder="No.rumah" autocomplete="off">
                          @if ($errors->has('home_number'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('home_number')}}</p>
                                    </span>
                                @endif
                        </div>
                      </div>
                      <div class="card-footer">
                      <button class="btn btn-sm btn-primary" type="submit">
                      <i class="fa fa-dot-circle-o" ></i> Send</button>
                      <a  href="{{ route('members.index') }}" class="btn btn-sm btn-danger" type="reset">Batal</a>
                      </div>
                    </form>
                  </div>
</div>
@endsection