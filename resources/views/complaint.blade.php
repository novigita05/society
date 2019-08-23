@extends('master')

@section('content')

<div class="row">
  @foreach($complaint as $complaint)
  <B>{{ $complaint->type }}</B>
  <p>{{ $complaint->content}}</p>
  <p>{{ $complaint->created_at }}</p>
  <form action="{{route('complaint.destroy', $complaint->idComplaint)}}" method="post">
                                    {{csrf_field()}}
				                    {{ method_field('DELETE') }}
                                        <a class="btn btn-sm btn-primary" href="{{route('complaint.edit', $complaint->idComplaint)}}">Update</a>
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are You Sure Want To Delete This Data?')">Hapus</button>
  </form>
  @endforeach

</div>

@endsection