@extends('master')

@section('content')

<div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <a class="btn btn-sm btn-primary" href="{{url('/announcement/create')}}">Tambah</a>
                  </div>
                  <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                      <thead>
                        <tr>
                          <th>Judul</th>
                          <th>Deskripsi</th>
                          <th>Tempat</th>
                          <th>Tanggal</th>
                          <th>Waktu</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($announcement as $anc)
                        <tr>
                          <td>{{ $anc->title }}</td>
                          <td>{{ $anc->description }}</td>
                          <td>{{ $anc->place }}</td>
                          <td>{{ $anc->date }}</td>
                          <td>{{ $anc->time }}</td>
                          <td>
                            <form action="{{route('announcement.destroy', $anc->idAnnouncement)}}" method="post">
                                    {{csrf_field()}}
                            {{ method_field('DELETE') }}
                                        <a class="btn btn-sm btn-primary" href="{{route('announcement.edit', $anc->idAnnouncement)}}">Update</a>
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are You Sure Want To Delete This Data?')">Hapus</button>
  </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
@endsection