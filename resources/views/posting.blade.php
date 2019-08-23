@extends('master')

@section('content')

<div class="row">
  @foreach($post as $post)
  <p>{{ $post->content}}</p>
  <p>{{ $post->created_at }}</p>
  <form action="{{route('posting.destroy', $post->idPost)}}" method="post">
                                    {{csrf_field()}}
				                    {{ method_field('DELETE') }}
                                        <a class="btn btn-sm btn-primary" href="{{route('posting.edit', $post->idPost)}}">Update</a>
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are You Sure Want To Delete This Data?')">Hapus</button>
  </form>
  @endforeach

</div>

@endsection