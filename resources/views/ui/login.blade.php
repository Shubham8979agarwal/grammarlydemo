@include('ui.common.header')
<div class="container d-flex justify-content-center align-items-center">
   <div class="card">
   	<h5 class="text-center mt-4">Login to Demo</h5>
      <div class="p-2 border-bottom d-flex align-items-center justify-content-center">
      	@if (session('register_success'))
	       <div class="alert alert-success">
	          {{ session('register_success') }}
	          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	             <span aria-hidden="true">&times;</span>
	       </div>
	    @endif
         @if (session('status_signin_failed'))
	       <div class="alert alert-danger">
	          {{ session('status_signin_failed') }}
	          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	             <span aria-hidden="true">&times;</span>
	       </div>
	    @endif
      </div>
      <form action="{{ route('make.login') }}" method="POST">
      @csrf
      <div class="p-3 px-4 py-4 border-bottom">
         <input type="email" class="form-control mb-2" placeholder="Email/Username" name="email">
         @error('email')
          <span class="text-danger">{{ $message }}</span>
         @enderror 
         <input type="password" class="form-control" placeholder="Password" name="password">
         @error('password')
          <span class="text-danger">{{ $message }}</span>
         @enderror
      	 <button class="btn btn-block continue white mt-2">Login</button>

         <!-- <div class="d-flex justify-content-center align-items-center mt-3 mb-3"> <span class="line"></span> <small class="px-2 line-text">OR</small> <span class="line"></span> </div>
         <button class="btn btn-danger btn-block continue facebook-button d-flex justify-content-start align-items-center"> <i class="fa fa-facebook ml-2"></i> <span class="ml-5 px-4">Continue with facebook</span> </button> <button class="btn btn-danger btn-block continue google-button d-flex justify-content-start align-items-center"> <i class="fa fa-google ml-2"></i> <span class="ml-5 px-4">Continue with Google</span> </button> --> 

      </div>
  	  </form>
      <div class="p-3 d-flex flex-row justify-content-center align-items-center member"> 
      	<span><b>Not a member?</b></span> 
      	<a href="{{ route('register') }}" class="text-decoration-none ml-2">Register Now</a>
      </div>
   </div>
</div>
@include('ui.common.footer')