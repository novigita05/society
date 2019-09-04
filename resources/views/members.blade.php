@extends('master')

@section('content')

<div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <a class="btn btn-sm btn-primary" href="{{url('/members/create')}}">Tambah Warga</a>
                  </div>
                  <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                      <thead>
                        <tr>
                          <th>NIK</th>
                          <th>NO KK</th>
                          <th>Nama</th>
                          <th>Foto</th>
                          <th>Tempat Lahir</th>
                          <th>Tanggal Lahir</th>
                          <th>Jenis Kelamin</th>
                          <th>Agama</th>
                          <th>Pendidikan</th>
                          <th>Pekerjaan</th>
                          <th>Status Tinggal</th>
                          <th>NO Rumah</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($members as $members)
                        <tr>
                          <td>{{ $members->nik }}</td>
                          <td>{{ $members->no_kk }}</td>
                          <td>{{ $members->name }}</td>
                          <td><img src="{{ url('uploads/images/'.$members->images) }}" style="width: 150px; height: 150px;"> </td>
                          <td>{{ $members->place_of_birth }}</td>
                          <td>{{ $members->date_of_birth }}</td>
                          <td>{{ $members->gender }}</td>
                          <td>{{ $members->religion }}</td>
                          <td>{{ $members->education }}</td>
                          <td>{{ $members->work }}</td>
                          <td>{{ $members->residence_status }}</td>
                          <td>{{ $members->home_number }}</td>
                          <td>
                            <form action="{{route('members.destroy', $members->idMembers)}}" method="post">
                                    {{csrf_field()}}
                            {{ method_field('DELETE') }}
                                        <a class="btn btn-sm btn-primary" href="{{route('members.edit', $members->idMembers)}}">Update</a>
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are You Sure Want To Delete This Data?')">Hapus</button>
  </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
@endsection