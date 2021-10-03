@extends('front.layout.main')
@section('content')
    <main>
        <section class="blog-author-header">
            <div class="container">
                <div class="row">
                    <div class="faq-text text-center">
                        <h3>Frequently Asked Questions</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="faq-content">
            <div class="container">
                <div class="row">
                    <div class="col-12 faq-main-contant mb-5 pb-5">
                        <div class="faq-accordion">
                            <div class="accordion" id="accordionExample">
                                @foreach ($data as $item)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $item->id }}">
                                        <button class="accordion-button eb-faq-acc-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $item->id }}"
                                            aria-expanded="false" aria-controls="collapse{{ $item->id }}">
                                            {{ $loop->iteration }}. {{ $item->faq_question }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $item->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $item->id }}"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body faq-acc-body">
                                            <P>{{ $item->faq_answer }}</P>
                                        </div>
                                    </div>
                                </div>   
                                @endforeach  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection