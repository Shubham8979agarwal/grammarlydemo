@include('ui.common.header')
<div class="container d-flex justify-content-center align-items-center">
   <div class="card">
      <div class="p-3 border-bottom d-flex align-items-center justify-content-center">
         <h5>Register to Demo</h5>
      </div>
      <form class="contactForm" action="{{ route('make.account') }}" method="POST">
      @csrf
      <div class="p-3 px-4 py-4 border-bottom">
         <input type="text" class="form-control mb-2" placeholder="Full Name" name="name" value="{{ old('name') }}">
         @error('name')
          <span class="text-danger">{{ $message }}</span>
         @enderror
         <input type="email" class="form-control mb-2" placeholder="Email/Username" name="email" value="{{ old('email') }}">
         @error('email')
          <span class="text-danger">{{ $message }}</span>
         @enderror
         <input type="password" class="form-control mb-2" placeholder="Password" name="password" value="{{ old('password') }}">
         @error('password')
          <span class="text-danger">{{ $message }}</span>
         @enderror
         <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" value="{{ old('confirm_password') }}">
         @error('confirm_password')
          <span class="text-danger">{{ $message }}</span>
         @enderror
         <button class="btn btn-block continue white mt-2">Register</button>

         <!-- <div class="d-flex justify-content-center align-items-center mt-3 mb-3"> <span class="line"></span> <small class="px-2 line-text">OR</small> <span class="line"></span> </div>
         <button class="btn btn-danger btn-block continue facebook-button d-flex justify-content-start align-items-center"> <i class="fa fa-facebook ml-2"></i> <span class="ml-5 px-4">Continue with facebook</span> </button> <button class="btn btn-danger btn-block continue google-button d-flex justify-content-start align-items-center"> <i class="fa fa-google ml-2"></i> <span class="ml-5 px-4">Continue with Google</span> </button> --> 

      </div>
      </form>
      <div class="p-3 d-flex flex-row justify-content-center align-items-center member"> 
         <span><b>Already have an account?</b></span> 
         <a href="{{ route('login') }}" class="text-decoration-none ml-2">Login here</a> 
      </div>
   </div>
</div>
@include('ui.common.footer')