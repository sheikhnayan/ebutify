
@extends('admin.layout.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section id="main-content" class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form class="row mb-3 mt-1">
                    <div class="col-12 col-sm pr-sm-0">
                        <input type="text" name="search" id="search" value="" placeholder="Search accounts, contracts and transactions" class="form-control">
                    </div>
                    <div class="col-12 col-sm-auto pl-sm-0">
                        <input type="button" name="commit" value="Search" class="btn btn-primary btn-block">
                    </div>
                </form>
            </div>
        </div>
        <!-- Info table -->
        <div class="row">
          <div class="col-12 ">

            <table class="bg-white table table-hover table-bordered table-responsive">
              <thead>
                <tr>
                  <th>ID</th>
                  <th width="200">Customer Name</th>
                  <th>Status</th>
                  <th>Subscription</th>
                  <th>Card Number</th>
                  <th width="150">Date</th>
                  <th width="200">Email</th>
                  <th width="150">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $item)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $item->name }}</td>
                  <td>Active</td>
                  <td>Monthly</td>
                  <td>****************{{ $item->card_last_four }}</td>
                  <td>{{ \Carbon\Carbon::parse($item->updated_at)->format('d-m-Y')}}</td>
                  <td>{{ $item->email }}</td>
                  
                  <td class="d-none">
                    <a href="" class="btn btn-primary">Edit</a>
                  </td>
                  <td>
                    <a href="/super/customer/edit/{{ $item->id }}" class="btn btn-primary">Edit</a> <br>
                    <br>
                    <a href="/super/customer/delete/{{ $item->id }}" onclick="return confirm('Are you sure to delete?');" class="btn btn-primary">Delete</a>
                  </td>
                </tr>  
                @endforeach             
              </tbody>
            </table>  

            {{ $data->links() }}

            {{-- <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-caret-left"></i></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="fas fa-caret-right"></i></a>
                </li>
              </ul>
            </nav> --}}

      
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection