<!-- Customer Review Slider -->
<section class="customer_feedback_section big_padding text-center" id="reviews">

    <div class="container">

        <div class="feedaback_inner">
            <h2 class="default_section_heading text-center white_color">

                <span class="font_200">
                    Client
                </span>
                Testimonials
            </h2>

            <hr class="default_divider default_divider_white default_divider_big">

            <div class="swiper-container customer_feedback_slider white_pagination">

                <div class="swiper-wrapper">

                    @foreach (App\Models\Testimonial::all() as $testimony)
                    <div class="swiper-slide">

                        <p class="customer_feedback_text white_color open_sans default_text font_200">
                            {{ $testimony->message }}
                        </p>

                        <p class="customer_feedback_name white_color open_sans default_small_heading font_600">
                            {{ $testimony->name }} - {{ $testimony->designation }}
                        </p>

                    </div>
                    @endforeach
                </div>



                <div class="swiper-pagination"></div>



                <div class="swiper-button-next fa fa-angle-right hidden-sm hidden-xs"></div>

                <div class="swiper-button-prev fa fa-angle-left hidden-sm hidden-xs"></div>

            </div>

        </div>

    </div>

</section>
<!-- /Customer Review Slider -->
