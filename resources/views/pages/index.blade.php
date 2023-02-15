@extends("templates.model")
@section('title', 'Accueil')

@section("content")
 <!-- BANNER
        ================================================== -->
        <section class="top-position p-0 banner">
            <div class="container-fluid px-0">
                <div class="slider-fade1 owl-carousel owl-theme w-100">
                    <div class="item bg-img cover-background pt-6 pb-10 pt-sm-6 pb-sm-14 py-md-16 py-lg-20 py-xxl-24" data-overlay-dark="0" data-background="{{ asset('assets/images/banner/slide3.jpg') }}">
                        <div class="container pt-6 pt-md-0">
                            <div class="row align-items-center">
                                <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mb-1-9 mb-lg-0 py-6 position-relative">
                                    <span class="h5 text-secondary">Qui sommes-nous </span>
                                    <h1 class="display-17 display-sm-11 display-md-9 display-lg-8 display-xl-4 mb-3 title">Le Conseil Permanent de la Comptabilité au Congo</h1>
                                    <p class="lead w-95 w-md-90 w-lg-85 mb-2-2">Le CPCC est un organisme technique du Gouvernement Congolais créé par l’Ordonnance n°75-024 du 03 février 1975.</p>
                                    <a href="about.html" class="butn shadow-dark me-2 my-1 my-sm-0">
                                        <span>Voir en detail</span>
                                    </a>

                                    <a href="our-core-values.html" class="butn white text-secondary-hover shadow-dark my-1 my-sm-0">Nos formation</a>
                                    <div class="ani-left-right light-title text-dark opacity05 left alt-font">01</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item bg-img cover-background pt-6 pb-10 pt-sm-6 pb-sm-14 py-md-16 py-lg-20 py-xxl-24" data-overlay-dark="0" data-background="{{ asset('assets/images/banner/slide2.jpg') }}">
                        <div class="container pt-6 pt-md-0">
                            <div class="row align-items-center">
                                <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mb-1-9 mb-lg-0 py-6 position-relative">
                                    <span class="h5 text-secondary">Nous organisons</span>
                                    <h2 class="display-17 display-sm-11 display-md-9 display-lg-8 display-xl-4 mb-3 title">Des formations spécialisée en expertise comptable</h2>
                                    <p class="lead w-95 w-md-90 w-lg-85 mb-2-2">Cette formation professionnelle spécialisée en Expertise s’inscrit dans
                                         le cadre de l’une des attributions du CPCC citées ci-haut qui consiste à contribuer à la formation et au perfectionnement dans le domaine comptable.</p>
                                    <a href="about.html" class="butn shadow-dark me-2 my-1 my-sm-0">
                                        <span>Voir en detail</span>
                                    </a>
                                    <a href="our-core-values.html" class="butn white text-secondary-hover shadow-dark my-1 my-sm-0">Nos formation</a>
                                    <div class="ani-left-right light-title text-dark opacity05 left alt-font">02</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item bg-img cover-background pt-6 pb-10 pt-sm-6 pb-sm-14 py-md-16 py-lg-20 py-xxl-24" data-overlay-dark="0" data-background="{{ asset('assets/images/banner/slide.jpg') }}">
                        <div class="container pt-6 pt-md-0">
                            <div class="row align-items-center">
                                <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mb-1-9 mb-lg-0 py-6 position-relative">
                                    <span class="h5 text-secondary">Nos formateurs</span>
                                    <h2 class="display-17 display-sm-11 display-md-9 display-lg-8 display-xl-4 mb-3 title">Nos animateurs sont des experts comptable</h2>
                                    <p class="lead w-95 w-md-90 w-lg-85 mb-2-2">
                                        Des formateur telsque le Professeur William MBUYAMBA KALOMBAYI,
                                        Secrétaire Général du CPCC, Expert-Comptable et Réviseur Comptable IRE/IRC...
                                    </p>
                                    <a href="about.html" class="butn shadow-dark me-2 my-1 my-sm-0">
                                        <span>Voir plus</span>
                                    </a>
                                    <a href="our-core-values.html" class="butn white text-secondary-hover shadow-dark my-1 my-sm-0">Nos formation</a>
                                    <div class="ani-left-right light-title text-dark opacity05 left alt-font">03</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="triangle-shape top-15 right-10 z-index-9 d-none d-md-block"></div>
            <div class="square-shape top-25 left-5 z-index-9 d-none d-xl-block"></div>
            <div class="shape-five z-index-9 right-10 bottom-15"></div>
        </section>

        <!-- SERVICES
        ================================================== -->
        <section class="p-0 overflow-visible service-block">
            <div class="container">
                <div class="row mt-n1-9">
                    <div class="col-md-6 col-lg-4 mt-1-9">
                        <div class="card card-style1 h-100 primary-shadow">
                            <div class="card-body media p-1-6 p-sm-1-9">
                                <i class="icon-expand display-16"></i>
                                <div class="media-body ms-4">
                                    <h4 class="h5">Tax Advantages</h4>
                                    <p class="mb-0">Incorporate derivations, credits, rejections, and others.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-1-9">
                        <div class="card card-style1 h-100 primary-shadow">
                            <div class="card-body media p-1-6 p-sm-1-9">
                                <i class="icon-puzzle display-16"></i>
                                <div class="media-body ms-4">
                                    <h4 class="h5">Authorise Company</h4>
                                    <p class="mb-0">Support the common sense execution of lawful and real.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-1-9">
                        <div class="card card-style1 h-100 primary-shadow">
                            <div class="card-body media p-1-6 p-sm-1-9">
                                <i class="icon-shield display-16"></i>
                                <div class="media-body ms-4">
                                    <h4 class="h5">Finance Advices</h4>
                                    <p class="mb-0">Cost to postponing monetary choices out helpless ones.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUT
        ================================================== -->
        <section>
            <div class="container pt-lg-4">
                <div class="row align-items-xl-center about-style1">
                    <div class="col-lg-5 mb-6 mb-md-8 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                        <div class="position-relative">
                            <div class="position-relative overflow-hidden pe-xl-7 pe-md-5">
                                <img src="{{ asset('assets/images/partie/about-2.jpg') }}" class="position-relative pb-1-9 z-index-1 rounded" alt="...">
                            </div>
                            <div class="shadow-block py-4 pe-4 ps-5 bg-secondary rounded">
                                <i class="icon-trophy text-white opacity3"></i>
                                <p class="mb-0 text-uppercase font-weight-500 text-white alt-font lh-base"><span class="d-block font-weight-600 display-6 no-letter-spacing">+45</span> Ans <br>d'expériences</p>
                            </div>
                            <div class="ani-left-right light-title text-primary opacity1 left-n10 bottom-75 alt-font d-none d-lg-block">Apropos</div>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeIn" data-wow-delay="500ms">
                        <div class="ps-xl-4">
                            <div class="mb-1-9">
                                <h2 class="cd-headline clip display-20 display-md-18 font-weight-600">Ce qu’il faut savoir sur le CPCC <br>concernant :
                                    <span class="cd-words-wrapper p-0 text-primary d-block d-sm-inline-block d-md-block d-xl-inline-block">
                                        <b class="is-visible font-weight-600">Nos objectifs</b>
                                        <b class="font-weight-600">Notre mission</b>
                                        <b class="font-weight-600">Notre fonctionnement</b>
                                    </span>
                                </h2>
                            </div>
                            <p class="mb-1-9">Le Conseil Permanent de la Comptabilité au Congo « CPCC » est un organisme technique du Gouvernement Congolais créé par l’Ordonnance n°75-024 du 03 février 1975.
                                Après la mise en place du Plan Comptable Général Congolais, l’organisation et le fonctionnement du CPCC ont été profondément réformés par l’Ordonnance n° 78-164 du 21 avril 1978 qui, tout en le mettant sous la tutelle du Ministère ayant les finances dans ses attributions, lui a assigné comme objet :</p>

                                <ul class="list-style1 mb-0 text-dark">
                                <li><strong>La conception et la gestion du système comptable congolais;</strong></li>
                                <li><strong>l’organisation et le fonctionnement de la Centrale Nationale des Bilans;</strong></li>
                                <li><strong>la diffusion exclusive des imprimés du Plan Comptable Général Congolais.</strong></li>
                            </ul>
                            <div class="media border-top border-color-light-gray mt-1-9 pt-1-9 align-items-center">
                                <li class="d-none d-xl-inline-block">
                                    <a href="#" class="butn secondary medium text-white">En savoir plus</a>
                                </li>

                                <div class="media-body ms-4">
                                    <h4 class="h6">Professeur William
                                        MBUYAMBA KALOMBAYI</h4>
                                    <p class="mb-0">(Sécretaire Générale)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-five right-5 bottom-45 opacity3"></div>
        </section>

        <!-- COUNTER
        ================================================== -->
        <section class="p-0 wow fadeIn" data-wow-delay="100ms">
            <div class="container">
                <div class="right-container">
                    <div class="row position-relative z-index-9 align-items-center py-1-9 py-lg-0">
                        <div class="col-6 col-lg-3 d-none d-lg-block">
                            <img src="{{ asset('assets/images/partie/team.jpg') }}" alt="">
                        </div>
                        <div class="col-md-4 col-lg-3 offset-md-1 offset-lg-0 offset-xl-1 mb-1-9 mb-md-0 wow fadeInRight" data-wow-delay="100ms">
                            <div class="d-flex ps-4 ps-md-0">
                                <div class="flex-shrink-0">
                                    <i class="icon-map-pin display-14 text-white opacity3 mt-1"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3 class="h1 text-secondary"><span class="countup">78</span>+</h3>
                                    <span class="text-white text-uppercase letter-spacing-2">Branches</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 mb-1-9 mb-md-0 wow fadeInRight" data-wow-delay="200ms">
                            <div class="d-flex ps-4 ps-md-0">
                                <div class="flex-shrink-0">
                                    <i class="icon-hotairballoon display-14 text-white opacity3 mt-1"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3 class="h1 text-secondary"><span class="countup">3</span>K</h3>
                                    <span class="text-white text-uppercase letter-spacing-2">Employés</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-2 wow fadeInRight" data-wow-delay="300ms">
                            <div class="d-flex ps-4 ps-md-0">
                                <div class="flex-shrink-0">
                                    <i class="icon-globe display-14 text-white opacity3 mt-1"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3 class="h1 text-secondary"><span class="countup">16</span>+</h3>
                                    <span class="text-white text-uppercase letter-spacing-2">Provinces</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- WHY CHOOSE US
        ================================================== -->
        <section>
            <div class="container">
                <div class="row align-items-lg-center">
                    <div class="col-lg-6 mb-5 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                        <div class="pe-xl-8">
                            <div class="mb-1-9">
                                <h3 class="display-20 display-md-18 font-weight-600">
                                    La comptabilité au service de la bonne gouvernance
                                </h3>
                            </div>
                            <div id="accordion" class="accordion-style1">
                                <div class="card mb-3">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Ce qui est important à connaitre de cette formation spécialisée en expertise comptable
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            Cette formation professionnelle spécialisée en Expertise s’inscrit dans le cadre de l’une des attributions du CPCC citées ci-haut qui consiste à contribuer à la formation et au perfectionnement dans le domaine comptable.
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Quel est le contenu de cette formation spécialisée en expertise comptable ?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            Les modules retenus pour cette formation spécialisée sont les suivants :

                                            Etude approfondie des normes de l’IFAC ;

                                            Questions spéciales de finance d’entreprise et diagnostic financier ;

                                            Missions spéciales d’expertise comptable;

                                            Normes IFRS ;
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Qui sont animateurs de cette formation spécialisée en expertise comptable
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            Cette formation spécialisée sera animée par le Professeur William MBUYAMBA KALOMBAYI, Secrétaire Général du CPCC, Expert-Comptable et Réviseur Comptable IRE/IRC, Monsieur NZAILU Benjamin, Président de l’ONEC-RDC, Expert-Comptable et Réviseurs d’entreprises/IRC, Directeurs de la DGI, Professeurs d’Universités ainsi que les Directeurs, Réviseurs Comptables/IRC et Experts Comptables du CPCC.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 position-relative wow fadeIn" data-wow-delay="400ms">
                        <div class="row g-0 position-relative z-index-9">
                            <div class="col-sm-6">
                                <div class="d-block bg-primary px-3 px-sm-5 py-7 py-sm-8 py-lg-10 rounded-top position-relative overflow-hidden">
                                    <h4 class="mb-0 text-white">Formations spécialisée </h4>
                                    <i class="icon-genius text-white opacity3 mt-1 me-1-6 icon-lg right-bottom"></i>
                                </div>
                                <div class="mb-sm-5">
                                    <img src="{{ asset('assets/images/partie/formation.jpg') }}" alt="">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mt-1-9 mt-sm-5">
                                    <img src="{{ asset('assets/images/partie/formation2.jpg') }}" alt="">
                                </div>
                                <div class="d-block bg-secondary px-3 px-sm-5 py-7 py-sm-8 py-lg-10 rounded-bottom position-relative overflow-hidden">
                                    <h4 class="mb-0 text-white">Former par des experts</h4>
                                    <i class="icon-hotairballoon text-white opacity3 mt-1 me-1-6 icon-lg right-bottom"></i>
                                </div>
                            </div>

                        </div>
                        <div class="ani-left-right light-title text-secondary opacity1 right-n10 bottom-75 bottom-xl-70 alt-font d-none d-lg-block">Formations</div>
                    </div>
                </div>
            </div>
            <div class="square-shape-two left-5 bottom-45 d-none d-xl-block"></div>
        </section>

        <!-- SERVICES
        ================================================== -->
        <section class="bg-dark mx-lg-4 rounded-lg">
            <div class="container position-relative z-index-1">
                <div class="title-style1 white wow fadeIn" data-wow-delay="100ms">
                    <h2 class="h1 text-white">Nos formations</h2>
                    {{-- <span>Our Services</span> --}}
                </div>
                <div class="row mt-n1-9">
                    <div class="col-md-6 col-xl-3 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                        <div class="card card-style9 p-2-4">
                            <div class="card-body p-0">
                                <i class="icon-strategy mb-4 display-12"></i>
                                <h3 class="h5 mb-3"><a href="marketing-research.html">Marketing Research</a></h3>
                                <p>We offers plan and assemble managing for you from startups.</p>
                            </div>
                            <a href="marketing-research.html" class="text-uppercase read-more">Voir en detail</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mt-1-9 wow fadeIn" data-wow-delay="400ms">
                        <div class="card card-style9 p-2-4">
                            <div class="card-body p-0">
                                <i class="icon-bargraph mb-4 display-12"></i>
                                <h3 class="h5 mb-3"><a href="business-analysis.html">Business Analysis</a></h3>
                                <p>We offers plan and assemble managing for you from startups.</p>
                            </div>
                            <a href="business-analysis.html" class="text-uppercase read-more">Voir en detail</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mt-1-9 wow fadeIn" data-wow-delay="600ms">
                        <div class="card card-style9 p-2-4">
                            <div class="card-body p-0">
                                <i class="icon-document mb-4 display-12"></i>
                                <h3 class="h5 mb-3"><a href="investment-plan.html">Investment Plan</a></h3>
                                <p>We offers plan and assemble managing for you from startups.</p>
                            </div>
                            <a href="investment-plan.html" class="text-uppercase read-more">Voir en detail</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mt-1-9 wow fadeIn" data-wow-delay="800ms">
                        <div class="card card-style9 p-2-4">
                            <div class="card-body p-0">
                                <i class="icon-presentation mb-4 display-12"></i>
                                <h3 class="h5 mb-3"><a href="saving-investments.html">Saving Investments</a></h3>
                                <p>We offers plan and assemble managing for you from startups.</p>
                            </div>
                            <a href="saving-investments.html" class="text-uppercase read-more">Voir en detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="round-shape-one top-n10 left-90"></div>
            <div class="ani-left-right light-title text-white opacity1 left bottom-n10 bottom-xl-n15 alt-font d-none d-lg-block z-index-0 wow fadeIn" data-wow-delay="200ms">services</div>
        </section>

        <!-- TESTIMONIALS
        ================================================== -->
        <section>
            <div class="container position-relative z-index-1">

                <div class="title-style1 wow fadeIn" data-wow-delay="100ms">
                    <h2 class="h1">Love Your Customers</h2>
                    <span>Testimonials</span>
                </div>

                <div class="row justify-content-center wow fadeIn" data-wow-delay="200ms">
                    <div class="col-lg-7 text-center">
                        <div class="testimonial-style2 owl-carousel owl-theme" data-slider-id="1">
                            <div>
                                <i class="ti-quote-left display-10 text-primary mb-4 d-block"></i>
                                <p class="mb-1-9 display-28 display-md-26 display-lg-24">I don't know what else to say. I would gladly pay over 600 dollars for business. Keep up the excellent work. It's incredible. It's the perfect solution for our business.</p>
                                <h6 class="mb-0">Allena Jones</h6>
                                <span class="small">Real Estate Assessor</span>

                            </div>
                            <div>
                                <i class="ti-quote-left display-10 text-primary mb-3 d-block"></i>
                                <p class="mb-1-9 display-28 display-md-26 display-lg-24">I am really satisfied with my business. Your company is truly upstanding and is behind its product 100%. Thank you for making it painless, pleasant and most of all hassle free!</p>
                                <h6 class="mb-0">Gregi Ambrose</h6>
                                <span class="small">Languages Researcher</span>
                            </div>
                            <div>
                                <i class="ti-quote-left display-10 text-primary mb-3 d-block"></i>
                                <p class="mb-1-9 display-28 display-md-26 display-lg-24">Thanks to business, we've just launched our 5th website! Thank you so much for your help. I don't always clop, but when I do, it's because of business.</p>
                                <h6 class="mb-0">Jose Matsuda</h6>
                                <span class="small">Mystery Shopper</span>
                            </div>
                        </div>
                        <div class="owl-thumbs text-center mt-2-3" data-slider-id="1">
                            <button class="owl-thumb-item rounded-circle w-60px me-2"><img src="img/avatar/avatar-06.jpg" class="rounded-circle" alt="..."></button>
                            <button class="owl-thumb-item w-60px rounded-circle me-2"><img src="img/avatar/avatar-07.jpg" class="rounded-circle" alt="..."></button>
                            <button class="owl-thumb-item w-60px rounded-circle"><img src="img/avatar/avatar-08.jpg" class="rounded-circle" alt="..."></button>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="img/avatar/avatar-09.png" class="position-absolute bottom-15 left d-none d-lg-block rounded-circle wow fadeIn" data-wow-delay="200ms" alt="...">
                    <img src="img/avatar/avatar-11.png" class="position-absolute top-20 right d-none d-lg-block rounded-circle wow fadeIn" data-wow-delay="300ms" alt="...">
                    <img src="img/avatar/avatar-10.png" class="position-absolute left-15 top-10 d-none d-lg-block rounded-circle wow fadeIn" data-wow-delay="400ms" alt="...">
                </div>

            </div>
            <div class="ani-left-right light-title text-dark opacity05 right bottom-n15 alt-font d-none d-lg-block z-index-0">feedback</div>
        </section>

        <!-- CLIENTS
        ================================================== -->
        <section class="py-5 wow fadeIn bg-secondary mx-lg-6 rounded-lg" data-wow-delay="100ms" style="background: transparent!important">
            <div class="container-fluid px-sm-14">
                <div class="owl-carousel owl-theme client-style1 text-center">
                    <div class="image-wrapper">
                        <img class="hover-image" src="{{ asset('assets/images/partenaire/finace2.png') }}" alt="...">
                        <img class="main-image" src="{{ asset('assets/images/partenaire/finace2.png') }}" alt="...">
                    </div>
                    <div class="image-wrapper">
                        <img class="hover-image" src="{{ asset('assets/images/partenaire/part10.png') }}" alt="...">
                        <img class="main-image" src="{{ asset('assets/images/partenaire/part10.png') }}" alt="...">
                    </div>
                    <div class="image-wrapper">
                        <img class="hover-image" src="{{ asset('assets/images/partenaire/logo.png') }}" alt="...">
                        <img class="main-image" src="{{ asset('assets/images/partenaire/logo.png') }}" alt="...">
                    </div>
                    <div class="image-wrapper">
                        <img class="hover-image" src="{{ asset('assets/images/partenaire/logobcc2.png') }}" alt="...">
                        <img class="main-image" src="{{ asset('assets/images/partenaire/logobcc2.png') }}" alt="...">
                    </div>
                    {{-- <div class="image-wrapper">
                        <img class="hover-image" src="img/partner/13.png" alt="...">
                        <img class="main-image" src="img/partner/13.png" alt="...">
                    </div>
                    <div class="image-wrapper">
                        <img class="hover-image" src="img/partner/14.png" alt="...">
                        <img class="main-image" src="img/partner/14.png" alt="...">
                    </div>
                    <div class="image-wrapper">
                        <img class="hover-image" src="img/partner/15.png" alt="...">
                        <img class="main-image" src="img/partner/15.png" alt="...">
                    </div>
                    <div class="image-wrapper">
                        <img class="hover-image" src="img/partner/16.png" alt="...">
                        <img class="main-image" src="img/partner/16.png" alt="..."> --}}
                    </div>
                </div>
            </div>
        </section>

        <!-- BLOG
        ================================================== -->
        <section>
            <div class="container z-index-9 position-relative">

                <div class="title-style1 wow fadeIn" data-wow-delay="100ms">
                    <h2 class="h1">Nos ouvrages</h2>
                    {{-- <span>Our Blog</span> --}}
                </div>
                <div class="row g-xl-5 mt-n1-9">
                    <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="200ms">
                        <article class="card card-style2 h-100">
                            <div class="card-img position-relative">
                                <img src="{{ asset('assets/images/livres/blog-01.jpg') }}" class="card-img-top" alt="...">
                                <a href="#!" class="category rounded">business</a>
                            </div>
                            <div class="card-body p-2-0 p-xl-2-4">
                                <span class="text-secondary mb-2 d-block font-weight-500">June 10, 2021</span>
                                <h3 class="h5 mb-4"><a href="blog-post.html">ENTREPREUNARIAT</a></h3>
                                <a href="blog-post.html" class="font-weight-600">Voir en detail &#10230;</a>
                            </div>
                            <div class="card-footer bg-white px-2-0 px-xl-2-4 py-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><span class="font-weight-600">By: </span><a href="#!">Admin</a></div>
                                    <span>
                                        <i class="ti-comment-alt me-2"></i>02
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="400ms">
                        <article class="card card-style2 h-100">
                            <div class="card-img position-relative">
                                <img src="{{ asset('assets/images/livres/blog-02.jpg') }}" class="card-img-top" alt="...">
                                <a href="#!" class="category rounded">consulting</a>
                            </div>
                            <div class="card-body p-2-0 p-xl-2-4">
                                <span class="text-secondary mb-2 d-block font-weight-500">June 8, 2021</span>
                                <h3 class="h5 mb-4"><a href="blog-post.html">Ethique et déontologie du profetionnel comptable</a></h3>
                                <a href="blog-post.html" class="font-weight-600">Voir en detail &#10230;</a>
                            </div>
                            <div class="card-footer bg-white px-2-0 px-xl-2-4 py-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><span class="font-weight-600">By: </span><a href="#!">Admin</a></div>
                                    <span>
                                        <i class="ti-comment-alt me-2"></i>01
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="600ms">
                        <article class="card card-style2 h-100">
                            <div class="card-img position-relative">
                                <img src="{{ asset('assets/images/livres/blog-03.jpg') }}" class="card-img-top" alt="...">
                                <a href="#!" class="category rounded">finance</a>
                            </div>
                            <div class="card-body p-2-0 p-xl-2-4">
                                <span class="text-secondary mb-2 d-block font-weight-500">June 6, 2021</span>
                                <h3 class="h5 mb-4"><a href="blog-post.html">Comptabilité des societes</a></h3>
                                <a href="blog-post.html" class="font-weight-600">Voir en detail &#10230;</a>
                            </div>
                            <div class="card-footer bg-white px-2-0 px-xl-2-4 py-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div><span class="font-weight-600">By: </span><a href="#!">Admin</a></div>
                                    <span>
                                        <i class="ti-comment-alt me-2"></i>04
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="triangle-shape top-75 left-5 z-index-2 d-none d-xl-block"></div>
        </section>




@endsection
