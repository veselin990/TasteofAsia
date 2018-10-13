<!doctype html>
<html class="no-js" lang="en">
{{--Head--}}
@include('includes.head')
<body>

{{--Nav--}}

@include('includes.nav')

<!--slider-->
<div class="slider-sec">

    <div class="slider single-item">
        <div><img src="{{asset('images/slider2.jpg')}}" alt=" " /></div>
        <div><img src="{{asset('images/pozadina.jpg')}}" alt=" " /></div>
    </div>
    <div class="row">
        <div class="large-12 columns no-pad">
            <div class="banner-txt"><h1>TASTE OF ASIA<br /><small style="color: white">-THAI RESTAURANT-</small></h1>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('.single-item').slick();
    </script>
</div>

<!--Info-->

<div class="services-sec">
    <div class="row">
        <div class="large-4 medium-4 small-12 columns">
            <div class="txt-box1 text-center">
                <span><i class="far fa-clock"></i></span>
                <h3>Radno Vreme</h3>
                <p>Ponedeljak-Nedelja</p>
                <p>12:00 - 24:00</p>
            </div>
        </div>

        <div class="large-4 medium-4 small-12 columns">
            <div class="txt-box1 text-center">
                <span><i class="fas fa-phone"></i></span>
                <h3>Porudzbine</h3>
                <p>Budva</p>
                <p>+382/233-455-249</p>
                <p>Podgorica</p>
                <p>+382/020-763-332</p>
            </div>
        </div>

        <div class="large-4 medium-4 small-12 columns">
            <div class="txt-box1 text-center">
                <span><i class="fas fa-car"></i></span>
                <h3>Besplatna dostava</h3>
                <p>Minimum za dostavu</p>
                <p>30,00&euro;</p>
            </div>
        </div>

    </div>
</div>

<!--O nama-->
<div class="content-sec">
    <div class="row">
        <div class="large-12 columns text-center">
            <h2>O Nama</h2>
            <p>Dobro dosli u "Taste of Asia" (Ukus Azije)! Azija je dom bogatog kulinarskog pejzaza sa ponecim za svakoga od slatkog, slanog,ljutom, kiselog do mirisnog,ukljucujuci i kombinacije navedenog.Nas meni kombinuje ove arome sa orginalnim jelima sa Tajlanda, Kine, Hong Konga, Indonezije i Vijetnama izmedju ostalog. </p>
            <a href="{{url('about')}}" class="button round grey">Saznajte vise &rarr;</a>
        </div></div>
</div>


<!--Specijaliteti-->

<div class="services-sec">
    <div class="row">
        <div class="large-12 columns"><h2>Preporuka restorana</h2></div>
        <div class="large-3 medium-3 small-12 columns">
            <div class="img-box"><img src="{{asset('images/meal21s.jpg')}}" alt="Pad Thai"></div>
            <div class="txt-box text-center">
                @if($specijalitetis)
                    @foreach($specijalitetis as $specijaliteti)
                        @if($specijaliteti->naslov == 'Pad Thai')
                            <h3>{{$specijaliteti->naslov}}</h3>
                            <p>{{ strlen($specijaliteti->sadrzaj) > 100 ? substr($specijaliteti->sadrzaj,0,100) : $specijaliteti->sadrzaj}}</p>
                        @endif
                    @endforeach
                @endif
                <div class="first">
                    @if($specijalitetis)
                        @foreach($specijalitetis as $specijaliteti)
                            @if($specijaliteti->naslov == 'Pad Thai')
                                <p>{{ strlen($specijaliteti->sadrzaj) > 100 ? substr($specijaliteti->sadrzaj,0,100) : $specijaliteti->sadrzaj}}</p>
                            @endif
                        @endforeach
                    @endif
                </div>
                <button class="button radius" id="first">Saznajte vise</button>
            </div>
        </div>

        <div class="large-3 medium-3 small-12 columns">
            <div class="img-box"><img src="{{asset('images/meal18.jpg')}}" alt="Zeleni Kari"></div>
            <div class="txt-box text-center">
                @if($specijalitetis)
                    @foreach($specijalitetis as $specijaliteti)
                        @if($specijaliteti->naslov == 'Zeleni Kari')
                            <h3>{{$specijaliteti->naslov}}</h3>
                            <p>{{ strlen($specijaliteti->sadrzaj) > 100 ? substr($specijaliteti->sadrzaj,0,100) : $specijaliteti->sadrzaj}}</p>
                        @endif
                    @endforeach
                @endif
                <div class="secend">
                    @if($specijalitetis)
                        @foreach($specijalitetis as $specijaliteti)
                            @if($specijaliteti->naslov == 'Zeleni Kari')
                                <p>{{substr($specijaliteti->sadrzaj,100,strlen($specijaliteti->sadrzaj))}}</p>
                            @endif
                        @endforeach
                    @endif
                </div>
                <button class="button radius" id="secend">Saznajte vise</button>
            </div>
        </div>

        <div class="large-3 medium-3 small-12 columns">
            <div class="img-box"><img src="{{asset('images/meal9-spec.jpg')}}" alt="Phanang Gai"></div>
            <div class="txt-box text-center">
                @if($specijalitetis)
                    @foreach($specijalitetis as $specijaliteti)
                        @if($specijaliteti->naslov == 'Phanang Gai')
                            <h3>{{$specijaliteti->naslov}}</h3>
                            <p>{{ strlen($specijaliteti->sadrzaj) > 100 ? substr($specijaliteti->sadrzaj,0,100) : $specijaliteti->sadrzaj}}</p>
                        @endif
                    @endforeach
                @endif
                <div class="third">
                    @if($specijalitetis)
                        @foreach($specijalitetis as $specijaliteti)
                            @if($specijaliteti->naslov == 'Phanang Gai')
                                <p>{!!substr($specijaliteti->sadrzaj,100,strlen($specijaliteti->sadrzaj))!!}</p>
                            @endif
                        @endforeach
                    @endif
                </div>
                <button class="button radius" id="third">Saznajte vise</button>
            </div>
        </div>

        <div class="large-3 medium-3 small-12 columns">
            <div class="img-box"><img src="{{asset('images/Tom_yum_kung.jpeg')}}" alt="Tom Yum Kung"></div>
            <div class="txt-box text-center">
                @if($specijalitetis)
                    @foreach($specijalitetis as $specijaliteti)
                        @if($specijaliteti->naslov == 'Tom Yum Kung')
                            <h3>{{$specijaliteti->naslov}}</h3>
                            <p>{{ strlen($specijaliteti->sadrzaj) > 100 ? substr($specijaliteti->sadrzaj,0,100) : $specijaliteti->sadrzaj}}</p>
                        @endif
                    @endforeach
                @endif
                <div class="last">
                    @if($specijalitetis)
                        @foreach($specijalitetis as $specijaliteti)
                            @if($specijaliteti->naslov == 'Tom Yum Kung')
                                <p>{!!substr($specijaliteti->sadrzaj,100,strlen($specijaliteti->sadrzaj))!!}</p>
                            @endif
                        @endforeach
                    @endif
                </div>
                <button class="button radius" id="last">Saznajte vise</button>
            </div>
        </div>

    </div>
</div>

<!--Enterijer - Galerija-->
<div class="services-sec">
    <div class="row">
        <h2>Taste of Asia&nbsp;|&nbsp;<span class="h2-gallery">Enterijer</span></h2>
            <div class="col-6 col-md-4">
                <a href="{{asset('images/Enterijer1.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Enterijer" class="gallery">
                    <img src="{{asset('images/Enterijer1-gallery.jpg')}}" >
                </a>
                <a href="{{asset('images/enterijer2.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Enterijer" class="gallery">
                    <img src="{{asset('images/enterijer2-gallery.jpg')}}" >
                </a>
                <a href="{{asset('images/enterijer3.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Enterijer" class="gallery">
                    <img src="{{asset('images/enterijer3-gallery.jpg')}}" >
                </a>
                <a href="{{asset('images/enterijer4.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Enterijer" class="gallery">
                    <img src="{{asset('images/enterijer4-gallery.jpg')}}" >
                </a>
                <a href="{{asset('images/enterijer6.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Enterijer" class="gallery">
                    <img src="{{asset('images/enterijer6-gallery.jpg')}}" >
                </a>
                <a href="{{asset('images/enterijer7.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Enterijer" class="gallery">
                    <img src="{{asset('images/Enterijer7-gallery.jpg')}}" >
                </a>
                <a href="{{asset('images/enterijer8.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Enterijer" class="gallery">
                    <img src="{{asset('images/enterijer8-gallery.jpg')}}" >
                </a>
                <a href="{{asset('images/enterijer9.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Enterijer" class="gallery">
                    <img src="{{asset('images/enterijer9-gallery.jpg')}}" >
                </a>
                <a href="{{asset('images/enterijer11.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Enterijer" class="gallery">
                    <img src="{{asset('images/enterijer11-gallery.jpg')}}" >
                </a>
                <a href="{{asset('images/enterijer12.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Enterijer" class="gallery">
                    <img src="{{asset('images/enterijer12-gallery.jpg')}}" >
                </a>
                <a href="{{asset('images/enterijer13.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Enterijer" class="gallery">
                    <img src="{{asset('images/enterijer13-gallery.jpg')}}" >
                </a>
                <a href="{{asset('images/enterijer14.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Enterijer" class="gallery">
                    <img src="{{asset('images/enterijer14-gallery.jpg')}}" >
                </a>
                <a href="{{asset('images/enterijer15.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Enterijer" class="gallery">
                    <img src="{{asset('images/enterijer15-gallery.jpg')}}" >
                </a>
            </div>
    </div>
</div>

<!--Hrana - Galerija-->
<div class="services-sec">
    <div class="row">
        <h2>Taste of Asia&nbsp;|&nbsp;<span class="h2-gallery">Hrana</span></h2>
        <div class="col-6 col-md-4">
            <a href="{{asset('images/meal1.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Hrana" class="gallery">
                <img src="{{asset('images/meal1-gallery.jpg')}}" >
            </a>
            <a href="{{asset('images/meal2.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Hrana" class="gallery">
                <img src="{{asset('images/meal2-gallery.jpg')}}" >
            </a>
            <a href="{{asset('images/meal3.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Hrana" class="gallery">
                <img src="{{asset('images/meal3-gallery.jpg')}}" >
            </a>
            <a href="{{asset('images/meal4.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Hrana" class="gallery">
                <img src="{{asset('images/meal4-gallery.jpg')}}" >
            </a>
            <a href="{{asset('images/meal6.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Hrana" class="gallery">
                <img src="{{asset('images/meal6-gallery.jpg')}}" >
            </a>
            <a href="{{asset('images/meal7.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Hrana" class="gallery">
                <img src="{{asset('images/meal7-gallery.jpg')}}" >
            </a>
            <a href="{{asset('images/meal8.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Hrana" class="gallery">
                <img src="{{asset('images/meal8-gallery.jpg')}}" >
            </a>
            <a href="{{asset('images/meal9.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Hrana" class="gallery">
                <img src="{{asset('images/meal9-gallery.jpg')}}" >
            </a>
            <a href="{{asset('images/meal10.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Hrana" class="gallery">
                <img src="{{asset('images/meal10-gallery.jpg')}}" >
            </a>
            <a href="{{asset('images/meal11.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Hrana" class="gallery">
                <img src="{{asset('images/meal11-gallery.jpg')}}" >
            </a>
            <a href="{{asset('images/meal12.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Hrana" class="gallery">
                <img src="{{asset('images/meal12-gallery.jpg')}}" >
            </a>
            <a href="{{asset('images/meal13.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Hrana" class="gallery">
                <img src="{{asset('images/meal13-gallery.jpg')}}" >
            </a>
            <a href="{{asset('images/meal14.jpg')}}" data-lightbox="{{asset('images/Enterijer1-gallery.jpg')}}" data-title="Hrana" class="gallery">
                <img src="{{asset('images/meal14-gallery.jpg')}}" >
            </a>
        </div>
    </div>
</div>
{{--Footer--}}
@include('includes.footer')

<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
<script type="text/javascript" src="js/all.js"></script>
<script type="text/javascript" src="slick/slick.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js-gallery/lightbox.js"></script>
<script type="text/javascript" src="js/specijaliteti.js"></script>

</body>
</html>
