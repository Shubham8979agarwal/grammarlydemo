@include('ui.login_success.common.header')
<!-- Page Wrapper -->
<div id="wrapper">
   @include('ui.login_success.common.menu')
   <!-- Begin Page Content -->
   <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      </div>
      <!-- Content Row -->
      <div class="row">
         <!-- Earnings (Monthly) Card Example -->
         <div class="col-xl-2 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
               <div class="card-body">
                  <div class="row no-gutters align-items-center">
                     <div class="col-auto">
                        <i class="fas fa-file fa-2x text-gray-300"></i> &nbsp; New
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@include('ui.login_success.common.footer')