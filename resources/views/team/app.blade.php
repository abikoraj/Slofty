<!-- Team Section -->
<section class="team_section big_padding text-center " id="team">

    <div class="container">
        <p class="raleway default_small_heading blue_color font_200">Let's Meet</p>
        <div class="col-md-12">
            <h2 class="default_section_heading text-center">
                <span class="font_200">Our </span> Creative <span class="font_200"> Team</span>

            </h2>

            <hr class="default_divider default_divider_blue default_divider_big">

            <div class="swiper-container team_slider">

                <div class="swiper-wrapper">
                    @foreach (App\Models\Team::all() as $teams)
                    <div class="swiper-slide">
                        <div class="team_detail wow slideInLeft">
                            <div class="team_detail_inner">
                                <img src="{{ asset($teams->image) }}" alt="team_img">
                            </div>
                            <h3 class="small_heading_navy default_small_heading navy_blue text-center raleway font_400">
                                {{ $teams->name }} </h3>
                            <p class="default_text text-center open_sans">{{ $teams->post }}</p>
                            <ul class="team_members_list">
                                <li>
                                    <a href="{{ $teams->linkedin }}" target="_blank"
                                        class="team_members_icons anchor_none_style google_team">
                                        <i class="fab fa-linkedin-in team_members_icon_inner" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $teams->facebook }}" class="team_members_icons anchor_none_style facebook_team">
                                        <i class="fab fa-facebook-f team_members_icon_inner" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $teams->twitter }}" class="team_members_icons anchor_none_style twiiter_team">
                                        <i class="fab fa-twitter team_members_icon_inner" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>

</section>
<!-- Team Section -->
