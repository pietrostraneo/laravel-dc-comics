<footer>

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-6 d-flex flex-wrap">

                    @foreach ($footer as $item)
                        <div>
                            <h3>{{ $item['title'] }}</h3>
                            <ul class="list-unstyled">
                                @foreach ($item['navlink'] as $link)
                                    <li>{{ $link }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach

                    <p>All site Content TM and &copy; 2020 DC Entertainment, unless otherwise <span
                            class="quicklink">noted
                            here</span>. All rights reserved.</p>
                    <p><a href="/">Cookies Settings</a></p>

                </div>
                <div class="col-6 bglogo"></div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 justify-content-between d-flex">
                    <button class="btn btn-outline-primary">SIGN UP NOW!</button>
                    <div class="socials d-flex gap-3 align-items-center">
                        <h4>FOLLOW US</h4>
                        @foreach ($socials as $item)
                            <img src="{{ Vite::asset($item['logo']) }}" alt="{{ $item['site'] }}" class="img-fluid">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
