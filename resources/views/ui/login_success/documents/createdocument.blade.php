@include('ui.login_success.common.header')
<div id="wrapper">
@include('ui.login_success.common.menu')
<div class="container-fluid">
	@if (session('save_success'))
	       <div class="alert alert-success">
	          {{ session('save_success') }}
	          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	             <span aria-hidden="true">&times;</span>
	       </div>
	@endif
	<form action="{{ route('savedocument') }}" method="POST" enctype="multipart/form-data">
    @csrf
	<input type="text" class="form-control mb-3" name="documentname" placeholder="Enter Document Title">	
	<textarea id="feed_description" class="form-control" rows="16" name="documentdesc" placeholder="Write Something ...">
	</textarea>
	@error('documentdesc')
	<span class="text-danger">{{ $message }}</span>
	@enderror
	<button class="btn btn-block continue white mt-2 mb-5">Save</button>	
	</form>
</div>
</div>
@include('ui.login_success.common.footer')