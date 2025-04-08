@extends('user.layout.layout')
@section('content')
    <!-- ***** Header Area End ***** -->

    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-banner">
                        <div class="item item-1">
                            <div class="header-text">
                                <span class="category">Explore Our Courses</span>
                                <h2>Learning Made Simple with EduFusionX</h2>
                                <p>
                                    Join our expert-led courses and experience a seamless learning journey.
                                    Our teachers provide the best guidance to help you master new skills with ease.
                                </p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#">Request a Demo</a>
                                    </div>
                                    <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> Learn More About EduFusionX</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-2">
                            <div class="header-text">
                                <span class="category">Achieve Excellence</span>
                                <h2>Maximize Your Learning Potential</h2>
                                <p>
                                    Unlock your full potential with our innovative learning methods.
                                    Get the best results with structured lessons and hands-on practice.
                                </p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#">Request a Demo</a>
                                    </div>
                                    <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> How to Achieve the Best Results?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-3">
                            <div class="header-text">
                                <span class="category">Flexible Learning</span>
                                <h2>Learn Anytime, Anywhere</h2>
                                <p>
                                    Save time and learn at your own pace with our interactive online courses.
                                    Access high-quality education from the comfort of your home.
                                </p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#">Request a Demo</a>
                                    </div>
                                    <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> Discover Online Learning</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="assets/images/service-01.png" alt="Interactive Courses" />
                        </div>
                        <div class="main-content">
                            <h4>Interactive Courses</h4>
                            <p>
                                Explore a variety of structured educational courses designed to enhance your learning
                                experience with expert guidance.
                            </p>
                            <div class="main-button">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="assets/images/service-02.png" alt="Virtual Labs" />
                        </div>
                        <div class="main-content">
                            <h4>Virtual Labs</h4>
                            <p>
                                Experience hands-on learning through our immersive VR-powered labs, designed for real-world
                                practice in a safe environment.
                            </p>
                            <div class="main-button">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="assets/images/service-03.png" alt="Educational Games" />
                        </div>
                        <div class="main-content">
                            <h4>Educational Games</h4>
                            <p>
                                Enhance your learning through engaging and interactive games tailored to reinforce key
                                concepts from each lesson.
                            </p>
                            <div class="main-button">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How can you start your learning journey?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Simply register on our platform, choose your grade and subject, and access interactive
                                    lessons, virtual labs, and engaging educational content.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do teachers support your learning?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our platform connects you with expert teachers who provide high-quality video lessons,
                                    interactive exercises, and real-time support for your questions.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Why is EduFusionX the best educational platform?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We offer a complete learning experience with interactive lessons, educational games, VR
                                    labs, and direct support, making education more engaging and effective.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Do we provide full student support?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes! We provide 24/7 technical and educational support, along with a student-teacher
                                    community to help you reach your learning goals efficiently.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>About Us</h6>
                        <h2>Why is our platform the ultimate learning solution?</h2>
                        <p>
                            We offer a fully integrated learning experience with interactive content, virtual labs, direct
                            teacher support, and educational games—making your learning journey more effective and
                            enjoyable.
                        </p>
                        <div class="main-button">
                            <a href="#">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
