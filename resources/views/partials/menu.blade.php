    <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container position-relative">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/logo/logo.png" alt="logo">
                    </a>
                    <div class="mobile-menu-right">
                        <div class="search-btn">
                            <button type="button" class="nav-right-link search-box-outer"><i
                                    class="far fa-search"></i></button>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item dropdown">
                                </ul>
                            </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About Us</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="{{route('about-us')}}">About Us</a></li>
                                    <li><a class="dropdown-item" href="{{route('about-us')}}">Christian Life Community</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Our Team</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('events')}}">The Principle</a></li>
                                            <li><a class="dropdown-item" href="{{route('event')}}">The Deputy Principle</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Sucess Stories</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('success-stories')}}">Success Stories</a></li>
                                            <li><a class="dropdown-item" href="{{route('success-story')}}">Success Story</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Teachers</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('our-team')}}">Teachers</a></li>
                                            <li><a class="dropdown-item" href="{{route('team-member')}}">Teachers Single</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="{{route('media')}}">Our Pillars</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
                                        <ul class="dropdown-menu">
                                            </li>
                                        </ul>
                                    <li><a class="dropdown-item" href="{{route('faqs')}}">Faq</a></li>
                                    <li><a class="dropdown-item" href="testimonial.html">Testimonials</a></li>
                                    <li><a class="dropdown-item" href="404.html">404 Error</a></li>
                                    <li><a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li class="nav-item mega-menu dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Departments</a>
                                <div class="dropdown-menu fade-down">
                                    <div class="mega-content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12 col-sm-4 col-md-3">
                                                    <h5>About Us</h5>
                                                    <div class="menu-about">
                                                        <a href="#" class="menu-about-logo"><img
                                                                src="assets/img/logo/logo-light.png" alt=""></a>
                                                        <p>We are many variations of passages available but the majority
                                                            have suffered alteration in some form by injected humour
                                                            words injected humour believable.</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4 col-md-3">
                                                    <h5>Academic</h5>
                                                    <ul class="mega-menu-item">
                                                        <li><a class="dropdown-item" href="academic-single.html">Art And
                                                                Design</a></li>
                                                        <li><a class="dropdown-item" href="academic-single.html">Acting
                                                                And Drama</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="academic-single.html">Accounting And Finance</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="academic-single.html">Biology
                                                                And Conservation</a></li>
                                                        <li><a class="dropdown-item" href="academic-single.html">Science
                                                                And Engineering</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-sm-4 col-md-3">
                                                    <h5>Non Academic</h5>
                                                    <ul class="mega-menu-item">
                                                        <li><a class="dropdown-item"
                                                                href="academic-single.html">Software Systems</a></li>
                                                        <li><a class="dropdown-item" href="academic-single.html">Human
                                                                Resource</a></li>
                                                        <li><a class="dropdown-item" href="academic-single.html">Health
                                                                Administration</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="academic-single.html">Biochemistry</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="academic-single.html">Computer Science</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-3">
                                                    <h5>Programs</h5>
                                                    <ul class="mega-menu-item">
                                                        <li><a class="dropdown-item" href="{{route('departments')}}">Academics
                                                                Department</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="{{route('department')}}">Academic Department
                                                                Single</a></li>
                                                        <li><a class="dropdown-item" href="faculty.html">Our Faculty</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="faculty-single.html">Faculty
                                                                Single</a></li>
                                                        <li><a class="dropdown-item" href="{{ route('contact') }}">Contact With
                                                                Us</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Admissions</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="{{route('join-us')}}">How To Apply</a></li>
                                    <li class="dropdown-submenu">
                                        <ul class="dropdown-menu">
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Our Facilities</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('our-facilities')}}">Facilities</a></li>
                                            <li><a class="dropdown-item" href="{{route('facility')}}">Facility Single</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <ul class="dropdown-menu">
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Our Clubs</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('our-clubs')}}">Our Clubs</a></li>
                                            <li><a class="dropdown-item" href="{{route('club')}}">Club Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="tuition-fee.html">Tuition Fees</a></li>
                                    <li><a class="dropdown-item" href="alumni.html">Alumni</a></li>
                                    <li><a class="dropdown-item" href="scholarship.html">Scholarships</a></li>
                                    <li><a class="dropdown-item" href="{{route('support-us')}}">Support Us</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('updates')}}" data-bs-toggle="dropdown">Updates</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="{{route('updates')}}">Updates</a></li>
                                    <li><a class="dropdown-item" href="{{route('events')}}">Events</a></li>
                                    <li><a class="dropdown-item" href="{{route('updates-single')}}">Careers</a></li>
                                </ul>
                            </li>
                               <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('updates')}}" data-bs-toggle="dropdown">Media</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="{{route('updates')}}">Updates</a></li>
                                    <li><a class="dropdown-item" href="{{route('events')}}">Events</a></li>
                                </ul>
                            </li>
                      </ul>
                        <div class="nav-right">
                            <div class="search-btn">
                                <button type="button" class="nav-right-link search-box-outer"><i
                                        class="far fa-search"></i></button>
                            </div>
                            <div class="nav-right-btn mt-2">
                                <a href="application-form.html" class="theme-btn"><span
                                        class="fal fa-pencil"></span>Support Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
