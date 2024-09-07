@extends('template.index')
@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">


            <div class="carousel-item active">
                <img src="{{ asset('images/organiser-rando.jpg') }}"alt="">
                <div class="carousel-container">
                    <h2>Welcome to Path Finder Pro Randonne</h2>
                    <p>Discover breathtaking hiking trails and adventures with Randonne. Our platform connects you
                        with the best hiking experiences, whether you're seeking mountain treks, coastal walks,
                        forest paths, or desert expeditions. Explore, book, and embark on unforgettable journeys
                        that bring you closer to nature. Whether you're a seasoned hiker or a beginner, Randonne is
                        your gateway to the world's most stunning landscapes.</p>
                    <a href="#featured-services" class="btn-get-started">Get Started</a>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="{{ asset('images/blog_packlisteskihochtour_header.jpg') }}" alt="">
                <div class="carousel-container">
                    <h2> Bienvenido a Path Finder Pro Randonne</h2>
                    <p> Descubre impresionantes rutas de senderismo y aventuras con Randonne. Nuestra plataforma te
                        conecta con las mejores experiencias de senderismo, ya sea que busques travesías montañosas,
                        paseos costeros, senderos forestales o expediciones por el desierto. Explora, reserva y
                        embárcate en viajes inolvidables que te acercarán a la naturaleza. Ya seas un senderista
                        experimentado o un principiante, Randonne es tu puerta de entrada a los paisajes más
                        asombrosos del mundo. </p>
                    <a href="#featured-services" class="btn-get-started">Get Started</a>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="{{ asset('images/tour-du-mont-blanc.1613537.w430.jpg') }}" alt="">
                <div class="carousel-container">
                    <h2>Willkommen bei Path Finder Pro</h2>
                    <p>Entdecke atemberaubende Wanderwege und Abenteuer mit Randonne. Unsere Plattform verbindet
                        dich mit den besten Wanderelebnissen, egal ob du nach Bergtouren, Küstenwanderungen,
                        Waldwegen oder Wüstenexpeditionen suchst. Erkunde, buche und begib dich auf unvergessliche
                        Reisen, die dich der Natur näherbringen. Ob du ein erfahrener Wanderer oder ein Anfänger
                        bist, Randonne ist dein Tor zu den beeindruckendsten Landschaften der Welt.</p>

                    <a href="#featured-services" class="btn-get-started">Get Started</a>
                </div>
            </div><!-- End Carousel Item -->

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators">
                <li data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#hero-carousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#hero-carousel" data-bs-slide-to="2"></li>
            </ol>

        </div>

    </section><!-- /Hero Section -->
    <!-- Clients Section -->
    <section id="clients" class="clients section">
        <div class="container">
            <h1 class="text-center my-5" >Nos Sponsors</h1>
            <div class="row gy-4">

                <div class="col-xl-2 col-md-3 col-6">
                    <div class="card client-card">
                        <img src="{{ asset('assets/img/clients/client-1.png') }}" class="card-img-top img-fluid"
                            alt="Client 1">
                    </div><!-- End Client Card -->
                </div>

                <div class="col-xl-2 col-md-3 col-6">
                    <div class="card client-card">
                        <img src="{{ asset('assets/img/clients/client-2.png') }}" class="card-img-top img-fluid"
                            alt="Client 2">
                    </div><!-- End Client Card -->
                </div>

                <div class="col-xl-2 col-md-3 col-6">
                    <div class="card client-card">
                        <img src="{{ asset('assets/img/clients/client-3.png') }}" class="card-img-top img-fluid"
                            alt="Client 3">
                    </div><!-- End Client Card -->
                </div>

                <div class="col-xl-2 col-md-3 col-6">
                    <div class="card client-card">
                        <img src="{{ asset('assets/img/clients/client-4.png') }}" class="card-img-top img-fluid"
                            alt="Client 4">
                    </div><!-- End Client Card -->
                </div>

                <div class="col-xl-2 col-md-3 col-6">
                    <div class="card client-card">
                        <img src="{{ asset('assets/img/clients/client-5.png') }}" class="card-img-top img-fluid"
                            alt="Client 5">
                    </div><!-- End Client Card -->
                </div>

                <div class="col-xl-2 col-md-3 col-6">
                    <div class="card client-card">
                        <img src="{{ asset('assets/img/clients/client-6.png') }}" class="card-img-top img-fluid"
                            alt="Client 6">
                    </div><!-- End Client Card -->
                </div>

            </div>
        </div>

    </section><!-- /Clients Section -->

    <!-- Services Section -->
    <h1 class="text-center my-5" > les plus belles randonnées du monde</h1>
    <section id="services" class="services section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item d-flex position-relative h-100">

                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Sentier des Appalaches - États-Unis</a></h4>
                            <p class="description">Le Sentier des Appalaches, avec ses 3 500 km de chemins à travers les Appalaches, est un véritable test d'endurance et de volonté. En traversant 14 États, de la Géorgie au Maine, ce sentier expose les randonneurs à une variété incroyable de faune et de flore, des ours noirs dans les Great Smoky Mountains aux érables colorés de la Nouvelle-Angleterre en Automne. Les traversées de rivières, les ascensions de sommets et les rencontres avec des communautés accueillantes en font plus qu'une simple randonnée : c'est une plongée dans l'âme de l'Amérique. Les abris ponctuant le parcours offrent des lieux de rencontre pour partager expériences et histoires, renforçant le sentiment de communauté parmi les randonneurs.</p>
                            <img src="{{ asset('images/360_F_186391222_Pm6bwFWKd2ODsFxs0KIPvgMgqzIi6plM.webp') }}" class="img-fluid" alt="">
                        </div>

                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item d-flex position-relative h-100">

                        <div>
                            <h4 class="title"><a href="#" class="stretched-link"> Chemin de l'Inca - Pérou</a></h4>
                            <p class="description">Le Chemin de l'Inca n'est pas seulement une randonnée ; c'est un voyage dans le temps. Sur 43 km, les randonneurs découvrent des ruines incas cachées, des tunnels et des ponts en pierre avant d'atteindre le point culminant, le mystique Machu Picchu. La traversée de la Porte du Soleil au lever du jour, avec la première vue sur la citadelle, est un moment magique. La faune andine, les orchidées exotiques et les montagnes couvertes de brume rendent chaque pas vers l'ancienne cité une découverte en soi.

                            </p>
                            <img src="{{ asset('images/360_F_220884694_JrwAhfqb8eLuM1mLPRmV0rANfwtSlc2u.webp') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item d-flex position-relative h-100">

                        <div>
                            <h4 class="title"><a href="#" class="stretched-link"> Camp de base de l’Everest - Népal</a></h4>
                            <p class="description">Atteindre le camp de base de l'Everest à 5 364 mètres est une quête de grandeur, offrant des vues inoubliables sur les plus hauts sommets du monde. Le chemin est jalonné de monastères bouddhistes, de ponts suspendus et de glaciers, offrant une fenêtre sur la culture sherpa. L'air raréfié et le décor grandiose soulignent la force et la persévérance nécessaires pour cette aventure. Les lodges en chemin offrent un repos bien mérité et une chance de se connecter avec d'autres randonneurs du monde entier.

                            </p>
                            <img src="{{ asset('images/360_F_454890914_rSDdtr8WyNpVH1m9gPbfdHvUJorRPY4i.webp') }}" class="img-fluid" alt="">


                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item d-flex position-relative h-100">


                        <div>
                            <h4 class="title"><a href="#" class="stretched-link"> Tour du Mont-Blanc - France, Italie, Suisse</a></h4>
                            <p class="description">Le Tour du Mont-Blanc est une exploration de trois cultures européennes à travers des paysages alpins époustouflants. Sur 170 km, les randonneurs traversent des cols montagneux, longent des glaciers et découvrent des alpages fleuris. Les refuges en chemin offrent une hospitalité chaleureuse et des spécialités locales, de la fondue suisse aux tartes aux myrtilles françaises. L'observation des chamois, marmottes et aigles rend chaque jour unique, et les vues sur le Mont-Blanc sont simplement inégalées.

                            </p>
                            <img src="{{ asset('images/360_F_682930557_hxHZZvbGTPPsWBYCNPonSkOXRHjUFqEL.webp') }}" class="img-fluid" alt="">

                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item d-flex position-relative h-100">

                        <div>
                            <h4 class="title"><a href="#" class="stretched-link"> Sentier de la Côte Sud-Ouest - Royaume-Uni</a></h4>
                            <p class="description">Le Sentier de la Côte Sud-Ouest invite à un périple côtier sur 1 014 km, révélant des falaises dramatiques, des plages secrètes et une histoire maritime riche. De la légendaire King Arthur's Seat aux vestiges de l'âge du fer et des mines d'étain, chaque pas est un cours d'histoire naturelle et humaine. Les randonneurs sont souvent accueillis par des phoques curieux et peuvent admirer une variété d'oiseaux de mer, enrichissant leur expérience de la faune britannique.

                            </p>
                            <img src="{{ asset('images/360_F_93459534_1ZNYSEs4sVrzgKDgdN1xcYKQOtvxjI6a (2).webp') }}" class="img-fluid" alt="">

                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item d-flex position-relative h-100">

                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">GR20 - Corse, France</a></h4>
                            <p class="description">Le GR20 en Corse est une véritable confrontation avec les éléments de la nature. Étalé sur 180 kilomètres, ce parcours montagneux dévoile des lacs d'eau cristalline nichés en altitude, d'anciennes forêts de pins laricio et d'imposantes crêtes de granite. En bravant ces terrains ardus, les randonneurs sont récompensés par des panoramas époustouflants et une immersion profonde dans le maquis corse. Les nuits passées en bivouac sous un ciel étoilé offrent des instants de paix loin du tumulte du quotidien, tandis que les rencontres occasionnelles avec des sangliers ou des mouflons enrichissent cette aventure exceptionnelle.</p>
                            <img src="{{ asset('images/360_F_549224663_MLuRt8pd89evDsnpEJTNEY7f5EqWYq4q.webp') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Our needs</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-product">Card</li>
                    <li data-filter=".filter-branding">Web</li>
                </ul><!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="{{ asset('images/carte-randonnee-helloways.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p></p>
                            <a href="{{ asset('images/carte-randonnee-helloways.jpg') }}" title="App 1"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="{{ asset('images/New-Product-Pop-up-Portable-Backpacking-Tent-3-Seconds-Instant-Tent-Lightweight-Automatic.webp') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 1</h4>
                            <p> 3-Second Pop-Up Hiking Tent - Portable, Instant, Lightweight Automatic Tent</p>
                            <a href="{{ asset('images/New-Product-Pop-up-Portable-Backpacking-Tent-3-Seconds-Instant-Tent-Lightweight-Automatic.webp') }}"title="Product 1"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="{{ asset('images/istockphoto-1358569473-612x612.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 1</h4>
                            <p></p>
                            <a href="{{ asset('images/istockphoto-1358569473-612x612.jpg') }}" title="Branding 1"
                                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="{{ asset('images/db63dcf2-5de0-46cb-adb2-f9f6bbad4494.__CR0,25,970,600_PT0_SX970_V1___.jpg') }}"class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p></p>
                            <a href="{{ asset('images/db63dcf2-5de0-46cb-adb2-f9f6bbad4494.__CR0,25,970,600_PT0_SX970_V1___.jpg') }}" title="App 2"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="{{ asset('images/product-zoom-352462-01.webp') }}"class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 2</h4>
                            <p>hiking poles</p>
                            <a href="{{ asset('images/product-zoom-352462-01.webp') }}" title="Product 2"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src="{{ asset('images/téléchargement (3).jpeg') }}" class="img-fluid" alt="" width="400">
                        <div class="portfolio-info">
                            <h4>Branding 2</h4>
                            <p></p>
                            <a href="{{ asset('images/téléchargement (3).jpeg') }}"title="Branding 2"
                                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <img src="{{ asset('images/71Ivj2I5NrL._AC_SL1500_.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 3</h4>
                            <p>90L Hiking Backpack with Rain Cover, Lightweight Camping Backpack for Hiking, Climbing, Camping, and Touring - Frameless</p>
                            <a href="{{ asset('images/71Ivj2I5NrL._AC_SL1500_.jpg') }}" title="Product 3"
                                data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <img src="{{ asset('images/images (4).jpeg') }}" class="img-fluid" alt="" width="400">
                        <div class="portfolio-info">
                            <h4>Product 4</h4>
                            <p></p>
                            <a href="{{ asset('images/images (4).jpeg') }}"title="Product 4"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <img src= "{{ asset('images/téléchargement.jpeg') }}"class="img-fluid" alt="" width="410">
                        <div class="portfolio-info">
                            <h4>Branding 3</h4>
                            <p></p>
                            <a href="{{ asset('images/téléchargement.jpeg') }}" title="Branding 2"
                                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>

    </section><!-- /Portfolio Section -->
@endsection
