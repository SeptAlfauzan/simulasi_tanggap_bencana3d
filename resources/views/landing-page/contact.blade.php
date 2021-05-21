@extends('template.landing-page.template')
@section('title', 'Contact')
@section('contact', 'active')

<!-- Page Content-->
@section('content')
<!-- Page Content-->
<section class="py-5">
    <div class="container">
        <!-- Content Row-->
        <div class="row">
            <!-- Map Column-->
            <div class="col-lg-8 mb-4">
                <!-- Embedded Google Map-->
                <iframe style="width: 100%; height: 400px; border: 0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d431470.9788281384!2d112.2932405068449!3d-7.979612284202781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788281bdd08839%3A0xc915f268bffa831f!2sUniversitas%20Negeri%20Malang!5e0!3m2!1sid!2sid!4v1620494618092!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <!-- Contact Details Column-->
            <div class="col-lg-4 mb-4">
                <h3>Contact Details</h3>
                <p>
                    Malang
                    <br />
                    East Java
                    <br />
                </p>
                <p>
                    <abbr title="Phone">Phone</abbr>
                    : (123) 456-7890
                </p>
                <p>
                    <abbr title="Email">Email</abbr>
                    :
                    <a href="mailto:name@example.com">name@example.com</a>
                </p>
                <p>
                    <abbr title="Hours">Hours</abbr>
                    : Monday - Friday: 9:00 AM to 5:00 PM
                </p>
            </div>
        </div>
        <!-- Contact Form-->
        <!-- In order to set the email address and subject line for the contact form go to the assets/mail/contact_me.php file.-->

            <!-- <div class="wrap-contact2">
                <form class="contact2-form validate-form">
                    <h3 class="contact2-form-title">
                        Contact Us
                    <h3>

                    <div class="wrap-input2 validate-input" data-validate="Name is required">
                        <input class="input2" type="text" name="name">
                        <span class="focus-input2" data-placeholder="NAME"></span>
                    </div>

                    <div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input2" type="text" name="email">
                        <span class="focus-input2" data-placeholder="EMAIL"></span>
                    </div>

                    <div class="wrap-input2 validate-input" data-validate = "Message is required">
                        <textarea class="input2" name="message"></textarea>
                        <span class="focus-input2" data-placeholder="MESSAGE"></span>
                    </div>

                    <div class="container-contact2-form-btn">
                        <div class="wrap-contact2-form-btn">
                            <div class="contact2-form-bgbtn"></div>
                            <button class="contact2-form-btn">
                                Send Your Message
                            </button>
                        </div>
                    </div>
                </form>
            </div> -->
    </div>
</section>
@endsection