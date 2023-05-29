<!-- About Section Start -->
<section class="about section" id="about">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>About Me</h2>
            </div>
        </div>
        <div class="row">
            <div class="about-content padd-15">
                <div class="row">
                    <div class="about-text padd-15">
                        <h3>I'm {{ $about ? $about->full_name : 'Zaman Javed' }} and
                            <span>{{ $about ? $about->designation : 'Web Developer' }}</span>
                        </h3>
                        <p>
                            {!! $about
                                ? $about->short_description
                                : 'I&#39;m a web designer with extensive experience for over 10 years. My expertise is to create and design website, graphic design, and many more...' !!}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="personal-info padd-15">
                        <div class="row">
                            <div class="info-item padd-15">
                                <p>Birthday :
                                    <span>{{ $about ? $about->birthday : '05 Nov, 1999' }}</span>
                                </p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Age : <span>{{ $about ? $about->age : '23' }}</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Website : <span>{{ $about ? $about->website_link : 'www.zamsh.org.com' }}</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Email : <span>{{ $about ? $about->email : 'zaman@zamsh.org' }}</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Degree : <span>{{ $about ? $about->degree : 'BScs' }}</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Phone : <span>+92 {{ $about ? $about->phone : '3065252024' }}</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>City : <span>{{ $about ? $about->city : 'Lahore, Pakistan' }}</span></p>
                            </div>
                            <div class="info-item padd-15">
                                <p>Freelance : <span>{{ $about ? $about->freelance : 'N/A' }}</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="buttons padd-15">
                                @if ($about)
                                    <a href="{{ asset('storage/cv_file/') }}/{{ $about->cv_file }}" class="btn"
                                        download>Download
                                        CV</a>
                                @else
                                    <a href="{{ asset('public-assets/cv_file.pdf') }}" class="btn" download>Download
                                        CV</a>
                                @endif
                                <a href="#contact" class="btn hire-me">Hire Me</a>
                            </div>
                        </div>
                    </div>
                    <div class="skills padd-15">
                        <div class="row">
                            @if (count($skills) != 0)
                                @foreach ($skills as $item)
                                    <div class="skills-item padd-15">
                                        <h5>{{ $item->skill_name }}</h5>
                                        <div class="progress">
                                            <div class="progress-in" style="width: {{ $item->progress }}%"></div>
                                            <div class="skill-percent">{{ $item->progress }}%</div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="skills-item padd-15">
                                    <h5>HTML</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 95%"></div>
                                        <div class="skill-percent">95%</div>
                                    </div>
                                </div>
                                <div class="skills-item padd-15">
                                    <h5>CSS</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 75%"></div>
                                        <div class="skill-percent">85%</div>
                                    </div>
                                </div>
                                <div class="skills-item padd-15">
                                    <h5>JS</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 65%"></div>
                                        <div class="skill-percent">85%</div>
                                    </div>
                                </div>
                                <div class="skills-item padd-15">
                                    <h5>PHP</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 80%"></div>
                                        <div class="skill-percent">80%</div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="education padd-15">
                        <h3 class="title">Education</h3>
                        <div class="row">
                            <div class="timeline-box padd-15">
                                <div class="timeline shadow-dark">
                                    @if (count($educations) != 0)
                                        @foreach ($educations as $item)
                                            <!-- Timeline item -->
                                            <div class="timeline-item">
                                                <div class="circle-dot"></div>
                                                <h3 class="timeline-date">
                                                    <i class="fa fa-calendar"></i>
                                                    @php
                                                        if ($item->end_date === 'Present') {
                                                            $end_date = 'Present';
                                                        } else {
                                                            $end_date = substr($item->end_date, 0, 4);
                                                        }
                                                    @endphp
                                                    {{ substr($item->start_date, 0, 4) }} -
                                                    {{ $end_date }}
                                                </h3>
                                                <h4 class="timeline-title">
                                                    {{ $item->exam_name }}
                                                </h4>
                                                <p class="timeline-text">
                                                    {{ $item->short_desc }}
                                                </p>
                                            </div>
                                        @endforeach
                                    @else
                                        <!-- Timeline item -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                                <i class="fa fa-calendar"></i> 2019 - 2023
                                            </h3>
                                            <h4 class="timeline-title">
                                                Bachelor in CSE
                                            </h4>
                                            <p class="timeline-text">
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Culpa eius sit praesentium
                                                labore perspiciatis deleniti et nobis alias quas
                                                nulla.
                                            </p>
                                        </div>
                                        <!-- Timeline item -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                                <i class="fa fa-calendar"></i> 2016 - 2018
                                            </h3>
                                            <h4 class="timeline-title">
                                                Higher Secondary
                                            </h4>
                                            <p class="timeline-text">
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Culpa eius sit praesentium
                                                labore perspiciatis deleniti et nobis alias quas
                                                nulla.
                                            </p>
                                        </div>
                                        <!-- Timeline item -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                                <i class="fa fa-calendar"></i> 2014 - 2016
                                            </h3>
                                            <h4 class="timeline-title">
                                                Secondary
                                            </h4>
                                            <p class="timeline-text">
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Culpa eius sit praesentium
                                                labore perspiciatis deleniti et nobis alias quas
                                                nulla.
                                            </p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="experience padd-15">
                        <h3 class="title">Experience</h3>
                        <div class="row">
                            <div class="timeline-box padd-15">
                                <div class="timeline shadow-dark">
                                    @if (count($experiences) != 0)
                                        @foreach ($experiences as $item)
                                            <!-- Timeline item -->
                                            <div class="timeline-item">
                                                <div class="circle-dot"></div>
                                                <h3 class="timeline-date">
                                                    <i class="fa fa-calendar"></i>
                                                    @php
                                                        if ($item->end_date === 'Present') {
                                                            $end_date = 'Present';
                                                        } else {
                                                            $end_date = substr($item->end_date, 0, 4);
                                                        }
                                                    @endphp
                                                    {{ substr($item->start_date, 0, 4) }} -
                                                    {{ $end_date }}
                                                </h3>
                                                <h4 class="timeline-title">
                                                    {{ $item->experience_name }}
                                                </h4>
                                                <p class="timeline-text">
                                                    {{ $item->short_desc }}
                                                </p>
                                            </div>
                                        @endforeach
                                    @else
                                        <!-- Timeline item -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                                <i class="fa fa-calendar"></i> 2023 - 2024
                                            </h3>
                                            <h4 class="timeline-title">
                                                Web Developer Intern
                                            </h4>
                                            <p class="timeline-text">
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Culpa eius sit praesentium
                                                labore perspiciatis deleniti et nobis alias quas
                                                nulla.
                                            </p>
                                        </div>
                                        <!-- Timeline item -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                                <i class="fa fa-calendar"></i> 2019 - 2023
                                            </h3>
                                            <h4 class="timeline-title">
                                                Web Design
                                            </h4>
                                            <p class="timeline-text">
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Culpa eius sit praesentium
                                                labore perspiciatis deleniti et nobis alias quas
                                                nulla.
                                            </p>
                                        </div>
                                        <!-- Timeline item -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                                <i class="fa fa-calendar"></i> 2018 - 2022
                                            </h3>
                                            <h4 class="timeline-title">
                                                Wordpress Developer
                                            </h4>
                                            <p class="timeline-text">
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Culpa eius sit praesentium
                                                labore perspiciatis deleniti et nobis alias quas
                                                nulla.
                                            </p>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->
