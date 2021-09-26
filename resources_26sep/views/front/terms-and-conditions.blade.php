@extends('front.layout.main')
@section('content')
    <main>
        <section class="blog-author-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center blog-author-name">
                        <h3>Terms and Conditions</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="privacy-policy-content">
            <div class="container">
                <div class="row">
                    <div class="col-12 pp-main-contant pb-5">
                        <div class="privacy-policy-text">
                            {!! $data->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection