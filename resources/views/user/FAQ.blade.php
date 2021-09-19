@extends('layoutsUser.user3')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <nav>
      <div class="nav nav-tabs nav-justified cpr-dashboard" id="nav-tab" role="tablist">
        <a class="nav-link active" href="/dashboard">Product Research Tool</a>
        <a class="nav-link " href="/service-dashboard">eButify Services</a>
      </div>
    </nav>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid p-0">
        <!-- Info boxes -->
        <div class="row faq-header px-3 py-2">
          <div class="col-12 d-flex justify-content-center mt-3">
            <h3 style="color: #fff;">Frequently Asked Questions</h3>
          </div>
          <div class="col-12">
            <div class="input-group my-2">
              <input type="text" class="form-control" placeholder="Type Product name or neach">
              <div class="input-group-append">
                <button class="btn faq-input-btn" type="button" id="#">Search</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->

        <div class="row collaps-body p-3 m-2">
          <div class="accordion" id="accordionFAQ">
            @foreach ($data as $item)
            <div class="card shadow">
              <div class="card-header" id="FAQOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne{{ $item->id }}" aria-expanded="false" aria-controls="collapseOne">
                    <i class="fas fa-angle-double-right"></i>
                    {{ $loop->iteration }}. {{ $item->faq_question }}
                  </button>
                </h2>
              </div>
          
              <div id="collapseOne{{ $item->id }}" class="collapse show" aria-labelledby="FAQOne" data-parent="#accordionFAQ">
                <div class="card-body">
                  {{ $item->faq_answer }}
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
@endsection

@section('js')
<script>
   $(document) .ready(function(){
    $('.select2').select2({
      width: '100%'
    });
  });
</script>
@endsection