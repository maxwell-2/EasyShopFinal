<<<<<<< HEAD
@extends("homeafter")
=======
@extends("homeconnexion")
>>>>>>> 7182a1c (site e-commerce easyShop final)
@section('title','EasyShop- Nous contacter')

@section("content")
   
<div class="container-fluid">
<<<<<<< HEAD
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Nous contacter</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
=======
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4" style="text-align:center"><span class="bg-secondary pr-3">Nous contacter</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5" style="margin:auto">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form name="sentMessage"  id="contactForm" novalidate="novalidate">
>>>>>>> 7182a1c (site e-commerce easyShop final)
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Votre nom"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Votre email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
<<<<<<< HEAD
                            <input type="text" class="form-control" id="subject" placeholder="Objet"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
=======
>>>>>>> 7182a1c (site e-commerce easyShop final)
                            <textarea class="form-control" rows="8" id="message" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Envoyer Message</button>
                        </div>
                    </form>
                </div>
            </div>
<<<<<<< HEAD
            <div class="col-lg-5 mb-5">
                <div class="bg-light p-30 mb-30">
                    <iframe style="width: 100%; height: 250px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="bg-light p-30 mb-3">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Gbegamey, Cotonou, Bénin</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>ketikouam@gmail.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+229 54140878</p>
                </div>
            </div>
=======
>>>>>>> 7182a1c (site e-commerce easyShop final)
        </div>
    </div>

@endsection