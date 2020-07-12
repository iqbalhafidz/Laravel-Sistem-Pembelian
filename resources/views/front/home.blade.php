@extends('layouts.front')
@section('conten')


    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
        <div class="container">

            {{-- <div class="row">

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                <img src="{{ asset('front/assets/img/clients/client-1.png')}}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset('front/assets/img/clients/client-2.png')}}" class="img-fluid" alt="">
            </div>

            </div> --}}

            <br><br>

        </div>
        </section><!-- End Clients Section -->
        
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-left">
            <h2>Produk</h2>
            {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">Jasco</li>
                <li data-filter=".filter-card">Baju Anak</li>
                <li data-filter=".filter-web">Baju Wanita</li>
                </ul>
            </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @if($data['pd']->count()>0)
                @foreach ($data['pd'] as $item)

                {{-- <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div> --}}
                
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app" >
                        <div class="portfolio-wrap" >
                            <img src="{{ $item->foto }}" class="img-fluid" class="img-thumbnail" alt="" style="width:400px" style="height: 350px">
                                <div class="portfolio-info">
                                {{-- <h4>{{ $item->nama}}</h4>
                                <p>{{ $item->keterangan}}</p> --}}
                                <div class="portfolio-links">
                                    <a href="{{ $item->foto }}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                                    {{-- <a href="#" title="More Details"><i class="bx bx-link"></i></a> --}}
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <h3 class="card-title">{{ $item->nama}}</h3>
                            <h6 class="card-text">{!! $item->keterangan !!}</h6>
                            <div class="product-price">
                                <h5>Rp. {{$item->harga}}  
                                <span style="text-decoration: line-through;" style="text-align: center">Rp. {{$item->diskon}}</span> </h5>
                            </div>
                        </div>

                    </div>  
                @endforeach
                @else

                <div class="col-lg-12 d-flex justify-content-center">
                    <h5> Tidak Ada Produk</h5>
                </div>


                @endif

                

                        {{-- //dari website tutorial
                        @forelse ($products as $row)
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="f_p_item">
                                        <div class="f_p_img">
                                            <img class="img-fluid" src="{{ asset('storage/products/' . $row->image) }}" alt="{{ $row->name }}">
                                            <div class="p_icon">
                                                <a href="{{ url('/product/' . $row->slug) }}">
                                                    <i class="lnr lnr-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="{{ url('/product/' . $row->slug) }}">
                                            <h4>{{ $row->name }}</h4>
                                        </a>
                                        <h5>Rp {{ number_format($row->price) }}</h5>
                                    </div>
                                </div>
                                @empty
                                @endforelse --}}

                
                </div>

           
           {{-- <div class="pagination" class="d-flex justify-content-center">
                <div data-tooltip="Tooltip 1" class="pagination__dot pagination__dot--active"></div>
                <div data-tooltip="Tooltip 2" class="pagination__dot" class="d-flex justify-content-center">{{ $data->links() }}</div> 
                 
                <div data-tooltip="Tooltip 3" class="pagination__dot">{{ $data->links() }}</div>
                <div data-tooltip="Tooltip 4" class="pagination__dot">{{ $data->links() }}</div>
                <div data-tooltip="Tooltip 5" class="pagination__dot">{{ $data->links() }}</div>  

            </div>  --}}
           
             <div class="d-flex justify-content-center"> {{ $data['pd']->links() }} </div>
            

        </div>
        
        </section><!-- End Portfolio Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
        <div class="container">

            <div class="row content">
                <div class="col-lg-6">
                    <div class="section-title" data-aos="fade-right">
                    <h2>Keunggulan</h2>
                    <p>.</p>
                    </div>
                </div>

             

            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">


                @if($data['unggulan']->count()>0)
                @foreach ($data['unggulan'] as $item)

                {{-- <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div> --}}
                
                    
                                                
                            <p class="card-text">{!!$item->keunggulan!!}</p>
                            

                    
                @endforeach
                @else


                <div class="col-lg-12 d-flex justify-content-center">
                    <h5> Keunggulan Belum Diisi</h5>
                </div>

                @endif
                    
                    {{-- {{ $data['unggulan']->keunggulan }} --}}
                    
                {{-- <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
                </p>
                <ul>
                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
                </ul>
                <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
                </p> --}}
            </div>
            </div>

        </div>
        </section><!-- End About Section -->


        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
        <div class="container">

            <div class="row counters">

            {{-- <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">232</span>
                <p>Clients</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">521</span>
                <p>Projects</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">1,463</span>
                <p>Hours Of Support</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">15</span>
                <p>Hard Workers</p>
            </div> --}}

            <br>

            </div>

        </div>
        </section><!-- End Counts Section -->


        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="row">
            <div class="col-lg-4">
                <div class="section-title" data-aos="fade-right">
                <h2>Testimoni</h2>
                <p>.</p>
                </div>
            </div>
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <div class="owl-carousel testimonials-carousel">

                    @if($data['testi']->count()>0)
                @foreach ($data['testi'] as $item)

                {{-- <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div> --}}
                
                    
                                                
                        <div class="testimonial-item">
                        <img src="{{ $item->gambar }}" class="testimonial-img" alt="">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {!!$item->keterangan!!}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>

                        {{-- <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4> --}}
                    </div>

                            

                    
                @endforeach
                @else


                <div class="col-lg-12 d-flex justify-content-center">
                    <h5> Testimoni Belum ditambahkan</h5>
                </div>

                @endif

                </div>
            </div>
            </div>

        </div>
        </section><!-- End Testimonials Section -->

        {{-- testi --}}

        {{-- <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="row">
            <div class="col-lg-4">
                <div class="section-title" data-aos="fade-right">
                <h2>Testimoni</h2>
                <p>.</p>
                </div>
            </div>
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <div class="owl-carousel testimonials-carousel">

                    @if($data['testi']->count()>0)
                @foreach ($data['testi'] as $item)          
                    
                                                
                        <div class="testimonial-item">
                        <img src="{{ $item->gambar }}" class="testimonial-img" alt="">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {!!$item->keterangan!!}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>


                    </div>

                            

                    
                @endforeach
                @else


                <div class="col-lg-12 d-flex justify-content-center">
                    <h5> Testimoni Belum ditambahkan</h5>
                </div>

                @endif

                </div>
            </div>
            </div>

        </div>
        </section>
        <!-- End Testimonials Section --> --}}


        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
        <div class="container">

            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title" data-aos="fade-right">
                    <h2>Bukti Transfer</h2>
                    <p>.</p>
                    </div>
                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <div class="owl-carousel testimonials-carousel">

                    @if($data['transfer']->count()>0)
                @foreach ($data['transfer'] as $item)

                {{-- <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div> --}}
                
                    
                                                
                        <div class="team-item">
                        <img src="{{ $item->gambar }}" class="team-img" alt="">
                        <p>
                            {{-- <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {!!$item->keterangan!!}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i> --}}
                        </p>

                        {{-- <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4> --}}
                    </div>

                            

                    
                @endforeach
                @else


                <div class="col-lg-12 d-flex justify-content-center">
                    <h5> Bukti Transfer Belum ditambahkan</h5>
                </div>

                @endif
            
                {{-- <div class="col-lg-8">
                    <div class="row">

                    <div class="col-lg-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pic"><img src="{{ asset('front/assets/img/team/team-1.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                            <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                            <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pic"><img src="{{ asset('front/assets/img/team/team-2.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                            <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                            <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member" data-aos="zoom-in" data-aos-delay="300">
                        <div class="pic"><img src="{{ asset('front/assets/img/team/team-3.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                            <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member" data-aos="zoom-in" data-aos-delay="400">
                        <div class="pic"><img src="{{ asset('front/assets/img/team/team-4.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                            <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                        </div>
                    </div>

                    </div>

                </div> --}}
            </div>

        </div>
        </section><!-- End Team Section -->


        {{-- <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
        <div class="container">

            <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
                <div class="content">
                <h3>Why Choose Bethany for your company website?</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                    Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
                </p>
                <div class="text-center">
                    <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
                </div>
            </div>
            <div class="col-lg-8 d-flex align-items-stretch">
                <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box mt-4 mt-xl-0">
                        <i class="bx bx-receipt"></i>
                        <h4>Corporis voluptates sit</h4>
                        <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                    </div>
                    </div>
                    <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box mt-4 mt-xl-0">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Ullamco laboris ladore pan</h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                    </div>
                    </div>
                    <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box mt-4 mt-xl-0">
                        <i class="bx bx-images"></i>
                        <h4>Labore consequatur</h4>
                        <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                    </div>
                    </div>
                </div>
                </div><!-- End .content-->
            </div>
            </div>

        </div>
        </section><!-- End Why Us Section --> --}}


        <!-- ======= Clients Section ======= -->
        <section id="clients2" class="clients2">
        <div class="container">
            <div class="section-title" data-aos="fade-right" data-aos="zoom-in">
                <br><br><br>

                <h2>Pemesanan</h2>
                <p> Untuk Pemesanan Jasko dan Informasi Jasko. Bisa Hubungi WhatsApp dibawah ini</p>

                @foreach ($data['info'] as $item)
                    <a href="{{$item->hp}}" class="btn-get-started scrollto">Chat WhatsApp klik disini</a>
                @endforeach
            </div>

                <br><br><br>

            {{-- <div class="row">

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
                <img src="{{ asset('front/assets/img/clients/client-1.png')}}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset('front/assets/img/clients/client-2.png')}}" class="img-fluid" alt="">
            </div>

            </div> --}}

        </div>
        </section><!-- End Clients Section -->

<!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
        <div class="container">

            <div class="row counters">

            {{-- <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">232</span>
                <p>Clients</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">521</span>
                <p>Projects</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">1,463</span>
                <p>Hours Of Support</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">15</span>
                <p>Hard Workers</p>
            </div> --}}

            <br>

            </div>

        </div>
        </section><!-- End Counts Section -->


        {{-- <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
        <div class="container">

            <div class="text-center" data-aos="zoom-in">
            <h3>Pemesanan</h3>
            <p> Untuk Pemesanan Jasko dan Informasi Jasko. Bisa Hubungi WhatsApp dibawah ini</p>
            <a class="cta-btn" href="#">Chat WhatsApp</a>
            </div>

        </div>
        </section><!-- End Cta Section --> --}}

        {{-- <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
        <div class="container">

            <div class="row">
            <div class="col-lg-4">
                <div class="section-title" data-aos="fade-right">
                <h2>Services</h2>
                <p>Magnam dolores commodi suscipit nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4><a href="">Lorem Ipsum</a></h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div>

                <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4><a href="">Sed ut perspiciatis</a></h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div>

                <div class="col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                    <h4><a href="">Magni Dolores</a></h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div>

                <div class="col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon"><i class="bx bx-world"></i></div>
                    <h4><a href="">Nemo Enim</a></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div>

                </div>
            </div>
            </div>

        </div>
        </section><!-- End Services Section --> --}}

                

        {{-- <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
        <div class="container">
            <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
            </div>

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
                <div class="info mt-4">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
                </div>
                <div class="row">
                <div class="col-lg-6 mt-4">
                    <div class="info">
                    <i class="icofont-envelope"></i>
                    <h4>Email:</h4>
                    <p>info@example.com</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info w-100 mt-4">
                    <i class="icofont-phone"></i>
                    <h4>Call:</h4>
                    <p>+1 5589 55488 55s</p>
                    </div>
                </div>
                </div>

                <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
                <div class="form-row">
                    <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>
            </div>
        </div>
        </section><!-- End Contact Section --> --}}

    </main><!-- End #main -->

@endsection
