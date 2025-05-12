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
                                       <li> <a class="dropdown-item" href="{{route('our-team')}}">Our Team</a></li>
                                            <li><a class="dropdown-item" href="{{route('team-member')}}">Principal's Message</a></li>
                                            <li><a class="dropdown-item" href="{{route('team-member')}}">Deputy Principal’s Message</a></li>
                                             <li><a class="dropdown-item" href="{{route('media')}}">Our Pillars</a></li>
                                                 <li> <a  class="dropdown-item" href="#">Facilities</a></li>
                                                <li><a class="dropdown-item" href="{{route('our-facilities')}}">Success Stories</a></li>
                                            </li>



                                    <li><a class="dropdown-item" href="{{route('about-us')}}">Christian Life Community</a></li>

                                </ul>
                            </li>
                            <li class="nav-item mega-menu dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Departments</a>
                                <div class="dropdown-menu fade-down">
                                    <div class="mega-content">
                                        <div class="container-fluid">
                                            <div class="row">

                                                <div class="col-12 col-sm-4 col-md-3">
                                                    <h5>Academic Department</h5>
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
                                                    <h5>Non Academic Department</h5>
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
                                                    <h5>Our Programs</h5>
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
                                                  <div class="col-12 col-sm-4 col-md-3">
                                                    <h5>Our Clubs</h5>
                                                    <div class="menu-about">
                                                        <a href="#" class="menu-about-logo"><img
                                                                src="assets/img/logo/logo-light.png" alt=""></a>

                                                            <ul class="mega-menu-item">
                                                        <li><a class="dropdown-item" href="academic-single.html">Art And
                                                                Design</a></li>

                                                        <li><a class="dropdown-item" href="academic-single.html">Biology
                                                                And Conservation</a></li>
                                                        <li><a class="dropdown-item" href="academic-single.html">Science
                                                                And Engineering</a></li>
                                                    </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Admissions</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="scholarship.html">Admission Policy</a></li>

                                    <li><a class="dropdown-item" href="{{route('join-us')}}">Scholarships</a></li>

                                    <li><a class="dropdown-item" href="tuition-fee.html">Fees Paying Students</a></li>
                                    <li><a class="dropdown-item" href="{{route('support-us')}}">How to Apply</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('updates')}}" data-bs-toggle="dropdown">Media Centre</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="{{route('updates')}}">News & Updates</a></li>
                                    <li><a class="dropdown-item" href="{{route('events')}}">Events</a></li>
                                    <li><a class="dropdown-item" href="{{route('updates-single')}}">Gallery</a></li>
                                    <li><a class="dropdown-item" href="{{route('success-stories')}}">Downloads</a></li>
                                </ul>
                            </li>
                               <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('updates')}}" data-bs-toggle="dropdown">School Portals</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="{{route('updates')}}">Student Portal</a></li>
                                    <li><a class="dropdown-item" href="{{route('events')}}">Staff Portal</a></li>
                                    <li><a class="dropdown-item" href="{{route('events')}}">Webmails</a></li>
                                </ul>
                            </li>
                      </ul>
                        <div class="nav-right">
                            <div class="search-btn">
                                <button type="button" class="nav-right-link search-box-outer"><i
                                        class="far fa-search"></i></button>
                            </div>
                         <div class="nav-item dropdown">
                               <div class="nav-right-btn mt-2 nav-link dropdown">
                                <a href="{{route('support-us')}}" class="theme-btn"><span
                                        class="fal fa-pencil"></span>Support Us</a>
                                         <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="{{route('updates')}}">Donate</a></li>
                                    <li><a class="dropdown-item" href="{{route('events')}}">Projects</a></li>
                                    <li><a class="dropdown-item" href="{{route('events')}}">Volunteer your Services</a></li>
                                    <li><a class="dropdown-item" href="{{route('events')}}">Careers</a></li>
                                </ul>
                            </div>
                         </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
