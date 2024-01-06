@include('ui.login_success.common.header')
<div id="wrapper">
@include('ui.login_success.common.menu')
<div class="container-fluid">
	@if (session('update_success'))
	       <div class="alert alert-success">
	          {{ session('update_success') }}
	          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	             <span aria-hidden="true">&times;</span>
	       </div>
	@endif
	<form action="{{ route('update-document') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="documentid" value="{{ $editabledata[0][0]->documentid }}">
	<input type="text" class="form-control mb-3" name="documentname" value="{{ $editabledata[0][0]->documentname }}">
	<textarea id="feed_description" class="form-control" rows="16" name="documentdesc">	
		{{ $editabledata[0][0]->documentdesc }}
	</textarea>
	@error('documentdesc')
	<span class="text-danger">{{ $message }}</span>
	@enderror
	<button class="btn btn-block continue white mt-2 mb-5">Update</button>	
	</form>
</div>
</div>
@include('ui.login_success.common.footer')