@extends('master')

@section('content')

<div class="row">
  @foreach($announcement as $anc)
  <p>{{ $anc->description}}</p>
  <form action="{{route('announcement.destroy', $anc->idAnnouncement)}}" method="post">
                                    {{csrf_field()}}
				                    {{ method_field('DELETE') }}
                                        <a class="btn btn-sm btn-primary" href="{{route('announcement.edit', $anc->idAnnouncement)}}">Update</a>
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are You Sure Want To Delete This Data?')">Hapus</button>
  </form>
  @endforeach

</div>

@endsection