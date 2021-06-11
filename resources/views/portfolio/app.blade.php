<!-- Portfolio Section -->
<section class="portfolio_section big_padding" style="padding-bottom: 0;" id="work">

    <div class="container">
        <p class="default_small_heading raleway text-center blue_color font_200">Creative Portfolio</p>
        <h2 class="default_section_heading text-center">
            <span class="font_200"> Our </span>
            Awesome
            <span class="font_200">Work</span>
        </h2>
        <hr class="default_divider default_divider_blue default_divider_big">
    </div>

    <div class="cube_fullwidth_style_portfolio">
        <div id="js-filters-mosaic-flat" class="cbp-l-filters-buttonCenter open_sans">
            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item open_sans button bg_before_pink">
                All
                <div class="cbp-filter-counter"></div>
            </div>
            @foreach (App\Models\Tag::all() as $tags)

            <div data-filter=".{{ $tags->name }}" class="cbp-filter-item open_sans button bg_before_pink">
                {{ $tags->name }}

                <div class="cbp-filter-counter"></div>
            </div>
            @endforeach
        </div>
        <div id="js-grid-mosaic-flat" class="cbp cbp-l-grid-mosaic-flat">
            @foreach (App\Models\Portfolio::all() as $galary)
            <div class="cbp-item {{ $galary->tags['name'] }} photography">
                <a href="{{ asset($galary->image) }}" class="cbp-caption cbp-lightbox"
                    data-title="{{ $galary->caption }}<br>by {{ App\Models\Profile::first()->name }}">
                    <div class="cbp-caption-defaultWrap">
                        <img src="{{ asset($galary->image) }}" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignCenter">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">{{ $galary->caption }}</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- /Portfolio Section -->
