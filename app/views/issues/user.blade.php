
@extends ('layouts.adminMaster')

@section('content')

	
	<article> 
		<pre>
		
		@foreach($user as $u)
			{


			<li>{{$u->username}}</li>
		}
			@endforeach
		
		
	</article>
	
	<p>{{ link_to('/issues/', 'Go Back') }}</p>

@stop