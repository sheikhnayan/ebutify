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
            <a href="{{route('super/add-new-freelancer')}}" class="btn my-2 my-sm-0 btn-primary float-right">Create New Freelancer</a>
          </div>
          @foreach($freelancers as $freelancer)
          <div class="col-md-6 col-lg-6 freelancer-card">
            <div class="card-deck">
              <div class="card">
                <div class="top-part text-center">
                  <img class="card-img-top" src="{{asset('assets/img/card-bg.jpg')}}" alt="Card image cap">
                  <img src="{{asset('storage/'.$freelancer->profile_photo_path) ?? 'assets/img/avatar5.png'}}" alt="User Avatar" class="img-circle freelancer-profile">
                  <h3 class="f-title">{{$freelancer->name}}</h3>
                  <!-- <h3 class="f-title">CEO & Founder</h3> -->
                </div>
                <div class="bottom-part">
                  <div class="card-body card-founder">
                    <!-- <dt>Education</dt>
                    <dd>B.Sc in Computer Science and Engineering from the Dhaka international University.</dd> -->
                    <div class="row">
                      <div class="col-md-6">
                        <dt>Location</dt>
                        <dd>{{$freelancer->address}}</dd>
                      </div>
                      <div class="col-md-6">
                        <dt>Status</dt>
                        @if ($freelancer->status == 1)
                          <dd>
                            <a class="btn btn-danger" href="/super/freelancer/status/{{ $freelancer->id }}/deactivate">Deactivate</a>
                          </dd>
                        @else
                          <dd>
                            <a class="btn btn-success" href="/super/freelancer/status/{{ $freelancer->id }}/activate">Activate</a>
                          </dd>
                        @endif
                      </div>
                    </div>
<!--                     <dt>Skills</dt>
                    <dd>Web Design & Development, Android Development and the eCom King</dd> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach

<!--           <div class="col-md-6 col-lg-6 freelancer-card">
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
          </div> -->
          
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection