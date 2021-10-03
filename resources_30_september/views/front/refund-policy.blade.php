@extends('front.layout.main')
@section('content')
    <main>
        <section class="blog-author-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center blog-author-name">
                        <h3>100% No Questions Asked Refund Policy</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="refund-policy-page">
            <div class="container">
                <div class="row">
                    <div class="col-12 refund-main-contant pb-5">
                        <div class="refund-policy-here">
                            {!! $data->content !!}            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection