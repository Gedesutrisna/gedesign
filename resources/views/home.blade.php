@extends('layouts.main')
@section('container')
    <section class="hero">
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="row gap-large gap-md gap-sm-n">
                <div class="col-7 col-sm-12" data-aos="fade-right">
                    <div class="hero-left">
                        <h1 class="title-hero" data-aos="fade-up" data-aos-delay="400">
                            Design Your Digital Future with 
                            <span class="highlight-gedesign">Gedesign</span>
                        </h1>
                        <p class="text" data-aos="fade-up" data-aos-delay="600">
                            Start your journey towards becoming a professional developer. Enhance your skills, expand your knowledge, and unlock new opportunities in the ever-evolving tech industry.
                        </p>
                        <div class="d-flex gap">
                            <a href="#portfolio" data-aos="fade-up" data-aos-delay="700">
                                <button class="btn btn-a">Build Now</button>
                            </a>
                            <a href="#aboutus" data-aos="fade-up" data-aos-delay="800">
                                <button class="btn btn-b">Explore Gedesign</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-5 d-sm-none" data-aos="fade-left" >
                    <div class="mb-md-2 moving-up-down">
                        <img src="/assets/hero-image.webp" alt="hero-image">
                    </div>
                </div>                
            </div>
        </div>
    </section>    
    <section class="aboutus" id="aboutus">
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="row gap-large gap-sm-n">
                <div class="col-5 col-sm-12" data-aos="fade-right">
                    <div class="mb">
                        <img src="/assets/about-image.webp" alt="about-image">
                    </div>
                </div>
                <div class="col-7 col-sm-12" data-aos="fade-left">
                    <div class="">
                        <h1 class="title" data-aos="fade-up" data-aos-delay="400">
                            What Drives <span class="highlight-gedesign">Gedesign</span>?
                        </h1>
                        <p class="text" data-aos="fade-up" data-aos-delay="600">At Gedesign, we are driven by a passion for creating meaningful digital experiences. Our mission is to help businesses reach new heights online by delivering tailored web solutions. With a focus on creativity, innovation, and customer satisfaction, we ensure each project aligns perfectly with our clients’ goals.</p>
                        <div class="d-flex gap mb">
                            <a href="#portfolio" data-aos="fade-up" data-aos-delay="700">
                                <button class="btn btn-a">Build Now</button>
                            </a>
                            <a href="#aboutus" data-aos="fade-up" data-aos-delay="800">
                                <button class="btn btn-b">Explore Gedesign</button>
                            </a>
                        </div>
                        <div class="h-line" data-aos="fade-up" data-aos-delay="800"></div>
                        <div class="grid grid-4 grid-sm-2 w-full" data-aos="fade-up" data-aos-delay="800">
                            <div class="text-center">
                                <h2 class="title-custom mb-0 counter" data-target="27">0</h2>
                                <p class="text">Projects Completed</p>
                            </div>
                            <div class="text-center">
                                <h2 class="title-custom mb-0 counter" data-target="14">0</h2>
                                <p class="text">Team Members</p>
                            </div>
                            <div class="text-center">
                                <h2 class="title-custom mb-0 counter" data-target="50">0</h2>
                                <p class="text">Websites Delivered</p>
                            </div>
                            <div class="text-center">
                                <h2 class="title-custom mb-0 counter" data-target="10">0</h2>
                                <p class="text">Happy Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service" id="service">
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="row row-sm gap gap-sm-n">
                <div class="col-7 col-sm-12">
                    <div>
                        <h1 class="title" data-aos="fade-up" data-aos-delay="400">
                            Explore <span class="highlight-gedesign">Gedesign</span> Solutions
                        </h1>
                        <p class="text" data-aos="fade-up" data-aos-delay="600">
                            At Gedesign, we provide a range of services to elevate your digital presence and create impactful websites tailored to your needs.
                        </p>
                        <div class="grid grid-2 w-full">
                            @foreach ($services as $service)
                            <div class="card" data-aos="fade-up" data-aos-delay="800">
                                <div class="d-flex d-sm-block align-center gap mb mb-sm">
                                    <div class="mb-sm">
                                        <div class="icon">
                                            <img src="/assets/checklist.webp" alt="check">
                                        </div>
                                    </div>
                                    <h4 class="card-title">{{ $service->name }}</h4>
                                </div>
                                <p class="card-text">{{ $service->description }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-5 col-sm-12" data-aos="fade-left">
                    <div class="mb-sm-2">
                        <img src="/assets/service-image.webp" alt="service-image">
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <section class="portfolio" id="portfolio">
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="row mb">
                <div class="col-7 col-sm-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="">
                        <h1 class="title mb-0 mb-sm">Discover <span class="highlight-gedesign">Gedesign</span> Work</h1>
                    </div>
                </div>
                <div class="col-4 col-sm-12" data-aos="fade-up" data-aos-delay="600">
                    <div class="">
                        <p class="text mb-0">Our portfolio showcases Gedesign bringing ideas to life for businesses and brands, one website at a time.</p>
                    </div>
                </div>
            </div>
            <div class="row gap-medium gap-md-small gap-sm-small">
                <div class="col-6 col-sm-12" data-aos="fade-right" data-aos-delay="400">
                    <div class="">
                        <div class="card">
                            <a href="{{ $portfolioMain->url }}">
                                <div class="">
                                    <img src="{{ asset('images/'.$portfolioMain->image) }}" alt="portfolios-image" class="card-img-main mb">
                                    <div class="card-body">
                                        <div class="d-flex between align-center mb">
                                            <div class="tag">{{ $portfolioMain->tag->name }}</div>
                                            <p class="card-text mb-0">Published on {{ $portfolioMain->created_at->format('d M Y') }}</p>
                                        </div>
                                        <h3 class="card-title-large mb-2">{{ $portfolioMain->title }}</h3>
                                        <p class="card-text text-clip mb">{{ $portfolioMain->description }}</p>
                                        <button class="btn btn-b w-full">See more</button>    
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-12">
                    <div class="d-flex flex-col gap-medium gap-md-small gap-sm-small">
                        @foreach ($portfolios as $portfolio)
                        <div class="card" data-aos="fade-up" data-aos-delay="400">
                            <a href="{{ $portfolio->url }}">
                                <div class="d-flex gap-medium">
                                    <div class="card-body">
                                        <div class="d-flex between align-center mb-3 mb-sm-2">
                                            <div class="tag tag-small">{{ $portfolio->tag->name }}</div>
                                            <p class="card-text mb-0">{{ $portfolio->created_at->format('d M Y') }}</p>
                                        </div>
                                        <h5 class="card-title-medium mb-2">{{ $portfolio->title }}</h5>
                                        <p class="card-text text-clip">{{ $portfolio->description }}</p>
                                    </div>
                                    <img src="{{ asset('images/'.$portfolio->image) }}" alt="portfolios-image" class="card-img d-sm-none">
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <section class="testimoni" id="testimoni">
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="row mb">
                <div class="col-7 col-sm-12">
                    <div>
                        <h1 class="title mb-0 mb-sm" data-aos="fade-up" data-aos-delay="400"><span class="highlight-gedesign">Gedesign</span> Client Stories</h1>
                    </div>
                </div>
                <div class="col-4 col-sm-12">
                    <div>
                        <p class="text mb-0" data-aos="fade-up" data-aos-delay="500">
                            Each testimonial reflects our commitment to quality, creativity, and impactful results.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="800">
                <div class="col-12">
                    <div class="w-full">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach ($testimonials as $testimonial)
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="mb-sm mb">
                                            <div class="icon">
                                                <img src="/assets/dots.webp" alt="check">
                                            </div>
                                        </div>
                                        <p class="card-text mb">
                                            "{{ $testimonial->feedback }}"
                                        </p>
                                        <h4 class="card-title">{{ $testimonial->name }}</h4>
                                        <p class="card-text">{{ $testimonial->job }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <section class="FAQs" id="faq">
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="row end row-sm gap-large gap-sm-n">
                <div class="col-7 col-sm-12">
                    <div>
                        <h1 class="title" data-aos="fade-up" data-aos-delay="400">
                            <span class="highlight-gedesign">Gedesign</span> Support & FAQs
                        </h1>
                        <p class="text" data-aos="fade-up" data-aos-delay="600">
                            Have questions about our services, process, or timelines? We’ve compiled a list of frequently asked questions to help you understand what working with Gedesign entails.
                        </p>
                        <div class="faq-container">
                            @foreach ($faqs as $index => $faq)
                                <div class="card faq {{ $index === 1 ? 'active' : '' }}" data-aos="fade-up" data-aos-delay="600">
                                    <div class="d-flex between">
                                        <h4 class="card-title faq-question">{{ $faq->question }}</h4>
                                        <i class='bx bx-chevron-down'></i>
                                    </div>
                                    <p class="card-text faq-answer">{{ $faq->answer }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-5 col-sm-12" data-aos="fade-left">
                    <div class="mb mt">
                        <img src="/assets/faq-image.webp" alt="faq-image">
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <section class="banner" id="banner">
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="container-b">
                <div class="row center text-center">
                    <div class="col-12" data-aos="zoom-in" data-aos-delay="300">
                        <div>
                            <h1 class="title white mb-3 mb-sm-2">
                                Start Building Your Custom Website with 
                                <span class="highlight-gedesign white">Gedesign</span> Reach Out Today
                            </h1>
                            <div class=""data-aos="fade-up" data-aos-delay="500">
                                <a href="#portfolio">
                                    <button class="btn btn-c">Build Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <section class="blog" id="blog">
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="row mb">
                <div class="col-7 col-sm-12" data-aos="fade-right" data-aos-delay="300">
                    <h1 class="title mb-0 mb-sm">
                        <span class="highlight-gedesign">Gedesign</span> Insights & Inspiration
                    </h1>
                </div>
                <div class="col-4 col-sm-12" data-aos="fade-left" data-aos-delay="400">
                    <p class="text mb-0">Our blog is a space for sharing practical advice, tutorials, and industry updates to help you stay ahead in web design and development.</p>
                </div>
            </div>
            <div class="row mb">
                <div class="col-12 d-md-none d-sm-none">
                    <div class="grid grid-3 w-full">
                        @foreach ($blogs as $blog)
                        <div class="card" data-aos="fade-up" data-aos-delay="500">
                            <img src="{{ asset('images/'.$blog->image) }}" alt="image-blog" class="card-img-blog mb">
                            <div class="card-body">
                                <div class="d-flex between align-center mb">
                                    <div class="tag tag-small">{{ $blog->tag->name }}</div>
                                    <p class="card-text mb-0">{{ $blog->created_at->format('d M Y') }}</p>
                                </div>
                                <h3 class="card-title-large mb-2">{{ $blog->title }}</h3>
                                <p class="card-text">{{ $blog->description }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Swiper for Responsive Design -->
                <div class="col-12 d-none d-md-block d-sm-block" data-aos="fade-up" data-aos-delay="800">
                    <div class="w-full">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach ($blogs as $blog)
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="500">
                                    <div class="card" data-aos="fade-up" data-aos-delay="500">
                                        <img src="{{ asset('images/'.$blog->image) }}" alt="image-blog" class="card-img-blog mb">
                                        <div class="card-body">
                                            <div class="d-flex between align-center mb">
                                                <div class="tag tag-small">Web Design</div>
                                                <p class="card-text mb-0">13 May 2024</p>
                                            </div>
                                            <h3 class="card-title-large mb-2">{{ $blog->title }}</h3>
                                            <p class="card-text">{{ $blog->description }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center" data-aos="fade-up" data-aos-delay="600">
                <div class="col-12">
                    <a href="#programs" class="text">
                        <button class="btn btn-a">Explore More</button>
                    </a>
                </div>
            </div>
        </div>
    </section>    
@endsection