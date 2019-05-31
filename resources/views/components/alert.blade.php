@foreach (['success', 'info', 'danger', 'warning'] as $x)
	@if (session()->has('alert_' . $x))
		@component('alert')
			@slot('alert_type')
				{{ $x }}
			@endslot
			@if (is_object(session()->get('alert_' . $x)))
				@foreach (json_decode(session()->get('alert_' . $x)) as $k => $v)
					@if (is_array($v))
							@foreach ($v as $k2 => $v2)
								{{ $v2 }}
							@endforeach
					@else
						{{ $v }}
					@endif
				@endforeach
			@else
				{!! session()->get('alert_' . $x) !!}
			@endif
		@endcomponent
	@endif
@endforeach