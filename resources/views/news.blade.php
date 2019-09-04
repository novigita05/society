@extends('master')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
       <a class="btn btn-sm btn-primary" href="{{url('/news/create')}}">Tambah Berita</a>
      </div>
      <div class="card-body">
        <table class="table table-responsive-sm table-bordered table-striped table-sm">
          <thead>
            <tr>
              <th>Judul</th>
              <th>Isi</th>
              <th>Tanggal dibuat</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($news as $news)
            <tr>
              <td>{{ $news->title }}</td>
              <td>{{ $news->content }}</td>
              <td>{{ $news->created_at }}</td>
              <td>
                <form action="{{route('news.destroy', $news->idNews)}}" method="post">
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                    <a class="btn btn-sm btn-primary" href="{{route('news.edit', $news->idNews)}}">Update</a>
                    <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are You Sure Want To Delete This Data?')">Hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection