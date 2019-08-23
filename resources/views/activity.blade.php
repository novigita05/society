@extends('master')

@section('content')

<div class="row">
  @foreach($activity as $act)
  <B>{{ $act->type_activity }}</B>
  <p>{{ $act->description}}</p>
  <p>{{ $act->date }}</p>
  <p>{{ $act->location }}</p>
  <form action="{{route('activity.destroy', $act->idActivity)}}" method="post">
                                    {{csrf_field()}}
				                    {{ method_field('DELETE') }}
                                        <a class="btn btn-sm btn-primary" href="{{route('activity.edit', $act->idActivity)}}">Update</a>
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are You Sure Want To Delete This Data?')">Hapus</button>
  </form>
  @endforeach

</div>

@endsection