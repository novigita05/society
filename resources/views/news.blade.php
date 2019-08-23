@extends('master')

@section('content')

<div class="row">
  @foreach($news as $news)
  <B>{{ $news->title }}</B>
  <p>{{ $news->content}}</p>
  <p>{{ $news->created_at }}</p>
  <form action="{{route('news.destroy', $news->idNews)}}" method="post">
                                    {{csrf_field()}}
				                    {{ method_field('DELETE') }}
                                        <a class="btn btn-sm btn-primary" href="{{route('news.edit', $news->idNews)}}">Update</a>
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are You Sure Want To Delete This Data?')">Hapus</button>
  </form>
  @endforeach

</div>

@endsection