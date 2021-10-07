@extends('front.layout.main')
@section('content')
<style>
    .contact-content { background: #fff; }.contactSend{float: right;}.contact-form form{padding: 12% 1% 1% 1%;}.form-group {padding: 10px;}
</style>
    <main>
        <section class="blog-author-header">
            <div class="container">
                <div class="row">
                    <div class="faq-text text-center">
                        <h3>Contact Us</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-content">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-5 pb-5">




                        <div class="container contact-form">
                            <form method="POSt" action="/contact-form">
                                @csrf
                               <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" value="" />
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea name="msg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary contactSend">Send Message </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                </div>


















                        
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection