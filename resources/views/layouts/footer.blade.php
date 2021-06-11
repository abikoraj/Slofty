<!-- Footer Section -->
<footer class="footer_section big_padding bg_navy">

    @php
        $profiles=App\Models\Profile::first();
    @endphp
    <div class="container">

        <div class="footer_detail">

            <ul class="footer_links text-center">
                @if ($profiles->facebook)
                <li>
                    <a class="anchor_style_default facebook wow zoomInDown" target="_blank"
                        href="{{ $profiles->facebook }}">
                        <i class="text-center fab fa-facebook-f "></i>
                    </a>
                </li>
                @endif
                @if ($profiles->twitter)
                <li>
                    <a class="anchor_style_default twitter wow zoomInDown" target="_blank"
                        href="{{ $profiles->twitter }}">
                        <i class="text-center fab fa-twitter "></i>
                    </a>
                </li>
                @endif
                @if ($profiles->instagram)
                <li>
                    <a class="anchor_style_default instagram wow zoomInDown" target="_blank"
                        href="{{ $profiles->instagram }}">
                        <i class="text-center fab fa-instagram "></i>
                    </a>
                </li>
                @endif
                @if ($profiles->linkedin)
                <li>
                    <a class="anchor_style_default linkedin wow zoomInDown" target="_blank"
                        href="{{ $profiles->linkedin }}">
                        <i class="text-center fab fa-linkedin-in "></i>
                    </a>
                </li>
                @endif
                @if ($profiles->pinterest)
                <li>
                    <a class="anchor_style_default pinterest wow zoomInDown" target="_blank"
                        href="{{ $profiles->pinterest }}">
                        <i class="text-center fab fa-pinterest "></i>
                    </a>
                </li>
                @endif
                @if ($profiles->youtube)
                <li>
                    <a class="anchor_style_default youtube wow zoomInDown" target="_blank"
                        href="{{ $profiles->youtube }}">
                        <i class="text-center fab fa-youtube "></i>
                    </a>
                </li>
                @endif

            </ul>

            <p class="text-center default_text open_sans white_color">&copy; <script>document.write(new Date().getFullYear());</script> {{ $profiles->name }}, All
                rights
                reserved. </p>

        </div>

    </div>

</footer>
<!-- /Footer Section -->
