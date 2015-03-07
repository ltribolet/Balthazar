@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset1">
			@if ($accounts->isEmpty())
				<p>You have no accounts! :(</p>
				<p>Go create them !</p>
			@else
				<h2>Your Accounts</h2>
				<table class="table table-striped">
					<thead>
					<tr>
						<th>Title</th>
						<th>Balance</th>
						<th>Created</th>
						<th>Actions</th>
					</tr>
					</thead>
					<tbody>
					@foreach($accounts as $account)
						<tr>
							<td>{{ $account->name }}</td>
							<td>{{ $account->balance }}</td>
							<td>{{ $account->created_at }}</td>
							<td>

							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			@endif
		</div>
	</div>
</div>
@endsection
