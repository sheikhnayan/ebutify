@extends('admin.layout.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section id="main-content" class="content">
      <div class="container-fluid">
        <!-- Info table -->
        <div class="row">
          <div class="col-md-6 col-lg-6 freelancer-card-header">
            <h6>Our Creative Freelancer List</h6>
          </div>
          <div class="col-md-6 col-lg-6 freelancer-card-header">
            <a href="add-new-freelancer.html" class="btn my-2 my-sm-0 btn-primary float-right">Create New Freelancer</a>
          </div>
          <div class="col-md-6 col-lg-6 freelancer-card">
            <div class="card-deck">
              <div class="card">
                <div class="top-part text-center">
                  <img class="card-img-top" src="assets/img/card-bg.jpg" alt="Card image cap">
                  <img src="assets/img/avatar2.png" alt="User Avatar" class="img-circle freelancer-profile">
                  <h3 class="f-title">Engr. Md. Rezaul Islam</h3>
                  <h3 class="f-title">CEO & Founder</h3>
                </div>
                <div class="bottom-part">
                  <div class="card-body card-founder">
                    <dt>Education</dt>
                    <dd>B.Sc in Computer Science and Engineering from the Dhaka international University.</dd>
                    <dt>Location</dt>
                    <dd>Boalerdara, Nageswari, Kurigram- 5660.</dd>
                    <dt>Skills</dt>
                    <dd>Web Design & Development, Android Development and the eCom King</dd>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 freelancer-card">
            <div class="card-deck">
              <div class="card">
                <div class="top-part text-center">
                  <img class="card-img-top" src="assets/img/card-bg.jpg" alt="Card image cap">
                  <img src="assets/img/avatar2.png" alt="User Avatar" class="img-circle freelancer-profile">
                  <h3 class="f-title">Engr. Md. Rezaul Islam</h3>
                  <h3 class="f-title">CEO & Product Researcher</h3>
                </div>
                <div class="bottom-part">
                  <div class="card-body card-researcher">
                    <dd>Join Date: 01-04-2021</dd>
                    <dd>Email: example@gmail.com</dd>
                    <dd>Phone: +8801xxxxxxxxx</dd>
                    <dd>Address: Nageswari, Kurigram</dd>
                    <dd>Position: Chief Technology Officer</dd>
                    <dd>Registration No: #110</dd>
                    <div class="col text-center">
                      <button class="btn my-2 mx-1 my-sm-0 btn-primary" type="submit">Chat</button>
                      <button class="btn my-2 mx-1 my-sm-0 btn-primary" type="submit">Edit</button>
                      <button class="btn my-2 mx-1 my-sm-0 btn-primary" type="submit">Delete User</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 freelancer-card">
            <div class="card-deck">
              <div class="card">
                <div class="top-part text-center">
                  <img class="card-img-top" src="assets/img/card-bg.jpg" alt="Card image cap">
                  <img src="assets/img/avatar2.png" alt="User Avatar" class="img-circle freelancer-profile">
                  <h3 class="f-title">Engr. Md. Rezaul Islam</h3>
                  <h3 class="f-title">CEO & Product Researcher</h3>
                </div>
                <div class="bottom-part">
                  <div class="card-body card-researcher">
                    <dd>Join Date: 01-04-2021</dd>
                    <dd>Email: example@gmail.com</dd>
                    <dd>Phone: +8801xxxxxxxxx</dd>
                    <dd>Address: Nageswari, Kurigram</dd>
                    <dd>Position: Chief Technology Officer</dd>
                    <dd>Registration No: #110</dd>
                    <div class="col text-center">
                      <button class="btn my-2 mx-1 my-sm-0 btn-primary" type="submit">Chat</button>
                      <button class="btn my-2 mx-1 my-sm-0 btn-primary" type="submit">Edit</button>
                      <button class="btn my-2 mx-1 my-sm-0 btn-primary" type="submit">Delete User</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 freelancer-card">
            <div class="card-deck">
              <div class="card">
                <div class="top-part text-center">
                  <img class="card-img-top" src="assets/img/card-bg.jpg" alt="Card image cap">
                  <img src="assets/img/avatar2.png" alt="User Avatar" class="img-circle freelancer-profile">
                  <h3 class="f-title">Engr. Md. Rezaul Islam</h3>
                  <h3 class="f-title">CEO & Product Researcher</h3>
                </div>
                <div class="bottom-part">
                  <div class="card-body card-researcher">
                    <dd>Join Date: 01-04-2021</dd>
                    <dd>Email: example@gmail.com</dd>
                    <dd>Phone: +8801xxxxxxxxx</dd>
                    <dd>Address: Nageswari, Kurigram</dd>
                    <dd>Position: Chief Technology Officer</dd>
                    <dd>Registration No: #110</dd>
                    <div class="col text-center">
                      <button class="btn my-2 mx-1 my-sm-0 btn-primary" type="submit">Chat</button>
                      <button class="btn my-2 mx-1 my-sm-0 btn-primary" type="submit">Edit</button>
                      <button class="btn my-2 mx-1 my-sm-0 btn-primary" type="submit">Delete User</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection