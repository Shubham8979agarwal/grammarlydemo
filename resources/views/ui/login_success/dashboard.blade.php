@include('ui.login_success.common.header')
<!-- Page Wrapper -->
<div id="wrapper">
   @include('ui.login_success.common.menu')
   <!-- Begin Page Content -->
   <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
         @if (session('delete_success'))
          <div class="alert alert-success">
             {{ session('delete_success') }}
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
          </div>
         @endif
      </div>
      <!-- Content Row -->
      <div class="row">
         <!-- Earnings (Monthly) Card Example -->
         <div class="col-xl-2 col-md-6 mb-4">
            <a href="{{ route('create-document') }}">
            <div class="card shadow h-100 py-2">
               <div class="card-body">
                  <div class="row no-gutters align-items-center">
                     <div class="col-auto">
                        <i class="fas fa-file text-gray-300" style="color:#0d8065!important"></i> &nbsp; New
                     </div>
                  </div>
               </div>
            </div>
           </a>
         </div>
         <!-- getting saved documents --->
         @if(count($savedocument)>0)
         @foreach($savedocument as $sd)
         <div class="col-xl-2 col-md-6 mb-4">
            <a href="#">
            <div class="card shadow h-100 py-2">
               <div class="card-body">
                  {{ substr(strip_tags($sd->documentdesc), 0, 38) }}
                  <div class="row no-gutters align-items-center">
                     <div class="col-auto mt-2">
                        <a href="edit-document/{{ $sd->documentid }}">
                           <i class="fas fa-edit text-gray-300" style="color:#0d8065!important"></i> &nbsp;</a>

                        <a onclick="return confirm('Are you sure?')" href="deletedocument/{{ $sd->documentid }}"><i class="fas fa-trash text-gray-300" style="color:#0d8065!important"></i> &nbsp;</a>
                     </div>
                  </div>
               </div>
            </div>
           </a>
         </div>
         @endforeach
         @endif
      </div>
   </div>
   <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@include('ui.login_success.common.footer')