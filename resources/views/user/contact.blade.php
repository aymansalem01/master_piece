@extends('user.layout.layout')
@section('content')
    <section>
        <div class="contact-us section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6  align-self-center">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>We’re Here to Help – Reach Out Anytime!</h2>
                            <p>Have questions or need assistance? Our team is ready to support you. Feel free to contact us
                                for any inquiries about courses, subscriptions, or technical support.</p>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="contact-us-content">
                            <form id="contact-form" action="" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <input type="name" name="name" id="name" placeholder="Your Name..."
                                                autocomplete="on" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                                placeholder="Your E-mail..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="orange-button">Send Message
                                                Now</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
