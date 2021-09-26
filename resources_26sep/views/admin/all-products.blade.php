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
                        <input type="text" name="search" id="search" value="Search Listed Product Here" placeholder="Search accounts, contracts and transactions" class="form-control">
                    </div>
                    <div class="col-12 col-sm-auto pl-sm-0">
                        <input type="button" name="commit" value="Search" class="btn btn-primary btn-block">
                    </div>
                    <div class="col-12 col-sm-auto pl-sm-0">
                        <button class="btn my-2 my-sm-0 btn-primary" type="submit">Add New Product</button>
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
                  <th>Image</th>
                  <th width="50">Product Name</th>
                  <th>Price</th>
                  <th>Cost</th>
                  <th>Profit</th>
                  <th>Order</th>
                  <th>Total Revinue</th>
                  <th>Date</th>
                  <th>Uploader Name</th>
                  <th width="100" colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>15</td>
                  <td><img class="tbl-img" src="assets/img/avatar.png"></td>
                  <td class="one-line-text">Train Horn For Truks</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>04-04-2021</td>
                  <td>Md.Rezaul Islam</td>
                  <td>
                    <a href="" class="btn btn-primary">Edit</a>
                  </td>
                  <td>
                    <a href="" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>14</td>
                  <td><img class="tbl-img" src="assets/img/avatar.png"></td>
                  <td>Train Horn For Truks</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>04-04-2021</td>
                  <td>Md.Rezaul Islam</td>
                  <td>
                    <a href="" class="btn btn-primary">Edit</a>
                  </td>
                  <td>
                    <a href="" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>13</td>
                  <td><img class="tbl-img" src="assets/img/avatar.png"></td>
                  <td>Train Horn For Truks</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>04-04-2021</td>
                  <td>Md.Rezaul Islam</td>
                  <td>
                    <a href="" class="btn btn-primary">Edit</a>
                  </td>
                  <td>
                    <a href="" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>12</td>
                  <td><img class="tbl-img" src="assets/img/avatar.png"></td>
                  <td>Train Horn For Truks</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>04-04-2021</td>
                  <td>Md.Rezaul Islam</td>
                  <td>
                    <a href="" class="btn btn-primary">Edit</a>
                  </td>
                  <td>
                    <a href="" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>11</td>
                  <td><img class="tbl-img" src="assets/img/avatar.png"></td>
                  <td>Train Horn For Truks</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>04-04-2021</td>
                  <td>Md.Rezaul Islam</td>
                  <td>
                    <a href="" class="btn btn-primary">Edit</a>
                  </td>
                  <td>
                    <a href="" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>10</td>
                  <td><img class="tbl-img" src="assets/img/avatar.png"></td>
                  <td>Train Horn For Truks</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>04-04-2021</td>
                  <td>Md.Rezaul Islam</td>
                  <td>
                    <a href="" class="btn btn-primary">Edit</a>
                  </td>
                  <td>
                    <a href="" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>09</td>
                  <td><img class="tbl-img" src="assets/img/avatar.png"></td>
                  <td>Train Horn For Truks</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>04-04-2021</td>
                  <td>Md.Rezaul Islam</td>
                  <td>
                    <a href="" class="btn btn-primary">Edit</a>
                  </td>
                  <td>
                    <a href="" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>08</td>
                  <td><img class="tbl-img" src="assets/img/avatar.png"></td>
                  <td>Train Horn For Truks</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>04-04-2021</td>
                  <td>Md.Rezaul Islam</td>
                  <td>
                    <a href="" class="btn btn-primary">Edit</a>
                  </td>
                  <td>
                    <a href="" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>07</td>
                  <td><img class="tbl-img" src="assets/img/avatar.png"></td>
                  <td>Train Horn For Truks</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>04-04-2021</td>
                  <td>Md.Rezaul Islam</td>
                  <td>
                    <a href="" class="btn btn-primary">Edit</a>
                  </td>
                  <td>
                    <a href="" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>06</td>
                  <td><img class="tbl-img" src="assets/img/avatar.png"></td>
                  <td>Train Horn For Truks</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>04-04-2021</td>
                  <td>Md.Rezaul Islam</td>
                  <td>
                    <a href="" class="btn btn-primary">Edit</a>
                  </td>
                  <td>
                    <a href="" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>05</td>
                  <td><img class="tbl-img" src="assets/img/avatar.png"></td>
                  <td>Train Horn For Truks</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>04-04-2021</td>
                  <td>Md.Rezaul Islam</td>
                  <td>
                    <a href="" class="btn btn-primary">Edit</a>
                  </td>
                  <td>
                    <a href="" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>04</td>
                  <td><img class="tbl-img" src="assets/img/avatar.png"></td>
                  <td>Train Horn For Truks</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>04-04-2021</td>
                  <td>Md.Rezaul Islam</td>
                  <td>
                    <a href="" class="btn btn-primary">Edit</a>
                  </td>
                  <td>
                    <a href="" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>03</td>
                  <td><img class="tbl-img" src="assets/img/avatar.png"></td>
                  <td>Train Horn For Truks</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>04-04-2021</td>
                  <td>Md.Rezaul Islam</td>
                  <td>
                    <a href="" class="btn btn-primary">Edit</a>
                  </td>
                  <td>
                    <a href="" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>02</td>
                  <td><img class="tbl-img" src="assets/img/avatar.png"></td>
                  <td>Train Horn For Truks</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>04-04-2021</td>
                  <td>Md.Rezaul Islam</td>
                  <td>
                    <a href="" class="btn btn-primary">Edit</a>
                  </td>
                  <td>
                    <a href="" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>01</td>
                  <td><img class="tbl-img" src="assets/img/avatar.png"></td>
                  <td>Train Horn For Truks</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>$59.99</td>
                  <td>04-04-2021</td>
                  <td>Md.Rezaul Islam</td>
                  <td>
                    <a href="" class="btn btn-primary">Edit</a>
                  </td>
                  <td>
                    <a href="" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
              </tbody>
            </table>  

            <nav aria-label="Page navigation">
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