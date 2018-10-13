<!doctype html>
<html class="no-js" lang="en">
{{--Head--}}
@include('includes.head')

<body>

{{--Nav--}}
@include('includes.nav')


<div class="inner-banner">
    <img src="{{asset('images/pozadina.jpg')}}" alt="About Us"> </div>

<div class="content-sec inner-sec">
    <div class="row">
        <div class="clearfix"></div>

        <div class="large-6 medium-6 small-12 columns faq">
            <div class="large-12 columns">
                <h2>Vecera za 2 osobe<br/>(30,00€ po osobi)</h2>
            </div>
            @if($menis)
                @foreach($menis as $meni)
                    @if($meni->za_dve_osobe == 1)
                        <p>{{$meni->sadrzaj}}</p>
                    @endif
                @endforeach
        </div>

        <div class="large-6 medium-6 small-12 columns faq">
            <div class="large-12 columns">
                <h2>Vecera za 4 osobe<br/>(40,00€ po osobi)</h2>
            </div>
                @foreach($menis as $meni)
                    @if($meni->za_cetiri_osobe == 1)
                        <p>{{$meni->sadrzaj}}</p>
                    @endif
                @endforeach
        </div>

        <div class="clearfix"></div>

        <div class="large-6 medium-6 small-12 columns faq">
             <div class="large-12 columns">
                <h2>Predjelo</h2>
             </div>
                @foreach($menis as $meni)
                    @if($meni->category->name == "Predjelo")
                        <p>{{$meni->naslov}} {{$meni->sadrzaj}}<span class="pull-right">...{{$meni->cena}},00&euro;</span></p>
                    @endif
                @endforeach
        </div>

        <div class="large-6 medium-6 small-12 columns faq">
            <div class="large-12 columns">
                <h2>Supe</h2>
            </div>
                @foreach($menis as $meni)
                    @if($meni->category->name == "Supe")
                        <p>{{$meni->naslov}} {{$meni->sadrzaj}}<span class="pull-right">...{{$meni->cena}},00&euro;</span></p>
                    @endif
                @endforeach
        </div>

        <div class="large-6 medium-6 small-12 columns faq">
            <div class="large-12 columns">
                <h2>Salate</h2>
            </div>
                @foreach($menis as $meni)
                    @if($meni->category->name == "Salate")
                        <p>{{$meni->naslov}} {{$meni->sadrzaj}}<span class="pull-right">...{{$meni->cena}},00&euro;</span></p>
                    @endif
                @endforeach
        </div>

        <div class="large-6 medium-6 small-12 columns faq">
            <div class="large-12 columns">
                <h2>Tajlandska kuhinja</h2>
            </div>
                @foreach($menis as $meni)
                    @if($meni->category->name == "Tajlandska kuhinja")
                        <p>{{$meni->naslov}} {{$meni->sadrzaj}}<span class="pull-right">...{{$meni->cena}},00&euro;</span></p>
                    @endif
                @endforeach
            <div class="large-12 columns">
                <h3>Gore navedena jela se sluze sa kuvanim pirincom</h3>
            </div>
                @foreach($menis as $meni)
                    @if($meni->category->name == "Tajlandska kuhinja" && $meni->sa_pirincem == 1)
                        <p>{{$meni->naslov}} {{$meni->sadrzaj}}<span class="pull-right">...{{$meni->cena}},00&euro;</span></p>
                    @endif
                @endforeach
        </div>

        <div class="large-6 medium-6 small-12 columns faq">
            <div class="large-12 columns">
                <h2>Desert</h2>
            </div>
                @foreach($menis as $meni)
                    @if($meni->category->name == "Desert")
                        <p>{{$meni->naslov}} {{$meni->sadrzaj}}<span class="pull-right">...{{$meni->cena}},00&euro;</span></p>
                    @endif
                @endforeach
        </div>

        <div class="large-6 medium-6 small-12 columns faq">
            <div class="large-12 columns">
                <h2>Kineska kuhinja</h2>
            </div>
                @foreach($menis as $meni)
                    @if($meni->sa_pirincem == 1)
                        <p>{{$meni->naslov}} {{$meni->sadrzaj}}<span class="pull-right">...{{$meni->cena}},00&euro;</span></p>
                    @endif
                @endforeach
            <div class="large-12 columns">
                <h3>Gore navedena jela se sluze sa kuvanim pirincom</h3>
            </div>
                @foreach($menis as $meni)
                    @if($meni->category->name == "Kineska kuhinja" && $meni->sa_pirincem == 0)
                        <p>{{$meni->naslov}} {{$meni->sadrzaj}}<span class="pull-right">...{{$meni->cena}},00&euro;</span></p>
                    @endif
                @endforeach
            @endif
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


</body>
</html>
