<!-- <div class="home-promote">
    <div class="home-text">
        <img src="/images/kv-text.png" class="img-responsive" alt="Our story">
    </div>
    
</div> -->

<div class="home-page">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-current="true"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-current="true"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="../public/images/slider/inception_movie_poster_banner.jpg" class="d-block w-100" alt="..." width="1100px" height="440px" overflow= "hidden">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="../public/images/slider/The Avengers-Banner.jpg" class="d-block w-100" alt="..." width="1100px" height="440px" overflow= "hidden">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="../public/images/slider/The-Finest-Hours-Banner.jpg" class="d-block w-100" alt="..." width="1100px" height="440px" overflow= "hidden">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <div class="home-block">
            <div class="row gy-5">
                <div class="col-md-12 col-lg-6">
                    <div>
                        <img src="../public/images/home/home-1.png" />
                    </div>
                    <h3>Home sweet home</h3>
                    <p>
                        Our site aime to provide the ultimate home theater experience for those who wants to enjoy 
                        movies in the comfort of their own home, especially with friends and family.
                        By using our service, film geek can watch all of their favourite shows without any extra fees
                        from the cinema or disturbance from other movie watcher while still enjoy the optimal quality
                        of the film as the director intended.<br><br>
                    </p>
                </div>
                <div class="col-md-12 col-lg-6 home-poster">
                    <!-- <img class="home-image" src="/images/poster/poster-1.jpg" />
                    <img class="home-image" src="/images/poster/poster-2.jpg" /> -->
                    <img class="home-image" src="../public/images/poster/Home-Theater.jpg" />
                </div>
            </div>
        </div>
        <div class="home-block">
            <div class="row gy-5">
                <div class="col-md-12 col-lg-6 home-poster">
                    <!-- <img class="home-image" src="/images/poster/poster-4.png" />
                    <img class="home-image" src="/images/poster/poster-3.png" /> -->
                    <img class="home-image" src="../public/images/poster/film-warehouse.jpg" />

                </div>
                <div class="col-md-12 col-lg-6">
                    <div>
                        <img src="../public/images/home/home-2.png" />
                    </div>
                    <h3>Unlimited movies, TV shows, and more</h3>
                    <p>
                        We boast warehouse level of libraries for our users media consumption, everything from movies, TV shows, documentaries, etc.
                        Containing shows from all of your favourite streaming services such as Netflix, Hulu, Disney+, HBO, etc.<br><br>
                    </p>
                </div>
            </div>
        </div>
        <div class="home-block">
            <div class="row  gy-5">
                <div class="col-md-12 col-lg-6">
                    <div>
                        <img src="../public/images/home/home-3.png" />
                    </div>
                    <h3>Anywhere, anytime, anyplace </h3>
                    <p>
                        Download your purchased films and watch them on any device, anywhere and any time you want.
                        With our service being subscription-free, even after your account is deleted or you unsubscribe
                        your favourite shows are still available to enjoy.<br><br>
                    </p>
                </div>
                <div class="col-md-12 col-lg-6 home-poster">
                    <!-- <img class="home-image" src="/images/poster/poster-5.png" />
                    <img class="home-image" src="/images/poster/poster-6.png" /> -->
                    <img class="home-image" src="../public/images/poster/download-film.jpg" />
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="home-video" class="home-video">
                    <iframe id="topVideo" class="video-play mb_YTVPlayer" frameborder="0" allowfullscreen="1"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        title="YouTube video player"
                        src="https://www.youtube.com/embed/y9BBhIALOf4?mute=1&loop=1&playlist=y9BBhIALOf4&autoplay=1&controls=0&amp;rel=0&amp;disablekb=0&amp;modestbranding=1&amp;showinfo=0&amp;preload=true&amp;playsinline=1&amp;iv_load_policy=3&amp;enablejsapi=1&amp;origin=http%3A%2F%2Fcaztus.vn&amp;widgetid=1"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function setHeight() {
    var topVideo = document.getElementById('topVideo');
    var homeVideoImage = document.getElementById('home-video-image');
    var homeVideo = document.getElementById('home-video');

    var width = topVideo.offsetWidth;
    document.getElementById('topVideo').style.height = 0.56 * (width);
    document.getElementById('home-video').style.height = 0.56 * (width);
    document.getElementById('home-video-image').style.height = homeVideoImage.offsetWidth / 1.38;



    document.getElementById('home-video-image').style.left = (topVideo.offsetWidth / 2) - (homeVideoImage.offsetWidth /
        2);
    document.getElementById('home-video-image').style.top = (topVideo.offsetHeight / 2) - (homeVideoImage.offsetHeight /
        2);
}

setHeight();
</script>