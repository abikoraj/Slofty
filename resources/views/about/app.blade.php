<!-- About Heading Section -->
<section class="combined_skills_section big_padding" id="skill_section">
    @php
        $item=App\Models\About::first();
    @endphp
    <h2 class="d-none">jd</h2>
    <section class="skill_section">
        <div class="container">
            <div class="skill_section_inner">
                <p class="default_text raleway text-center default_small_heading blue_color font_200">{{ $item->subHeading }}</p>
                <h2 class="default_section_heading text-center">
                    <span class="font_200">Our</span>
                    Awesome
                    <span class="font_200">
                        {{ $item->heading }}
                    </span>
                </h2>
                <hr class="default_divider default_divider_blue default_divider_big">
            </div>
        </div>
    </section>

    <!-- /Skill Section -->

    <section class="circle_pie_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="expertise_section_inner">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="expertise_block text-center margin_after_tab wow slideInLeft">
                                    <h3 class="small_heading_navy text-center raleway h3_pink font_400"><span
                                            class="font_600 pink_color">01.</span> {{ $item->title1 }}</h3>
                                    <p class="default_text text-center open_sans default_text_light">
                                        {{ $item->description1 }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="expertise_block text-center margin_after_tab wow slideInLeft">
                                    <h3 class="small_heading_navy text-center raleway h3_pink font_400"><span
                                            class="font_600 pink_color">02.</span> {{ $item->title2 }}</h3>
                                    <p class="default_text text-center open_sans default_text_light">
                                        {{ $item->description2 }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="expertise_block text-center margin_after_tab wow slideInLeft">
                                    <h3 class="small_heading_navy text-center raleway h3_pink font_400"><span
                                            class="font_600 pink_color">03.</span> {{ $item->title3 }}</h3>
                                    <p class="default_text text-center open_sans default_text_light">
                                        {{ $item->description3 }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- /Circel Js Skill Section -->
@include('about.skill.app')
@include('about.counter.app')
