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
                        <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search for names here... " aria-label="Recipient's username">
                    </div>
                    <div class="col-12 col-sm-auto pl-sm-0">
                    </div>
                    <div class="col-12 col-sm-auto pl-sm-0">
                        <a href="/super/faq/create" class="btn my-2 my-sm-0 btn-primary">Add New FAQ</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Info table -->
        <div class="row mr-2">
          <div class="col-12 product-table bg-white pl-0 pr-0 ml-2 shadow-sm">
                        @if (session('errors'))
                          <div class="alert alert-danger">
                              <ul>
                                      <li>{{ $errors }}</li>
                              </ul>
                          </div>
                          @endif
                          @if (session('status'))
                              <div class="alert alert-success">
                                  {{ session('status') }}
                              </div>
                          @endif
            <table class="bg-white table table-hover table-bordered table-responsive">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>FAQ Question</th>
                  <th>FAQ Answer</th>
                  <th width="100">Action</th>
                </tr>
              </thead>
              <tbody id="myTable">
                <?php $i=1 ?>
                @foreach($data as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td> {{ $item->faq_question }}</td>
                  <td>{{ $item->faq_answer }}</td>
                  <td>
                    <a href="/super/faq/edit/{{ $item->id }}" class="btn btn-primary">Edit</a>
                    <a href="/super/faq/delete/{{ $item->id }}" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>  

            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center">
              </ul>
            </nav>
      
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

@section('js')
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@endsection