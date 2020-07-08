@if (Session::has('message'))
	<div class="mns alert alert-{{ Session::get('message')->alert }}">
		<b>{{ Session::get('message')->info }}</b> {{ Session::get('message')->titulo }}
		@if (isset(Session::get('message')->texto))
			<p>{{ Session::get('message')->texto }}</p>
		@endif
		@if (isset(Session::get('message')->error))
			<p>{{ Session::get('message')->error }}</p>
		@endif
	</div>
@endif

@if ($errors->any())
	<div class="mns alert alert-warning">
		{{ Html::ul($errors->all())}}
	</div>
@endif
