@extends('layouts.freelancer-layout')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mt-3">
              <span class="info-box-icon bg-info"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Product Added</span>
                <span class="info-box-number">{{$productAdded}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <!-- <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mt-3 mb-3">
              <span class="info-box-icon bg-success"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Project Complete</span>
                <span class="info-box-number">10</span>
              </div>
              /.info-box-content
            </div>
            /.info-box
          </div> -->
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <!-- <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mt-3 mb-3">
              <span class="info-box-icon bg-danger"><i class="fas fa-user-friends"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Running Project</span>
                <span class="info-box-number">3</span>
              </div>
              /.info-box-content
            </div>
             /.info-box 
          </div> 
          /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection