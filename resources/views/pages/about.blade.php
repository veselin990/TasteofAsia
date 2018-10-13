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
        <div class="large-5 medium-5 small-12 columns">
            <div class="timeline-img">
                <img src="{{asset('images/staff.jpg')}}" alt="">
            </div>
        </div>
        <div class="large-7 medium-7 small-12 columns">
            <h2>O nama</h2>
            <p>Sa preko 40 godina iskustva u ugostiteljstvu, mi nastojimo da pružimo hranu odličnog ukusa koristeći najsvežije sastojke, autentična bilja i začine, pažljivo i sa puno ljubavi za vrijeme pripreme i kuvanja.</p>
            <p>Vlasnik restorana Goran i njegova supruga Bojana su znanje i iskustvo sticali tokom višegodišnjeg rada sa master šefom iz Hong Konga. Prvi restoran otvoren je u Budvi, 2013.godine. Iz godine u godinu sve je više zadovoljnih Podgoričana koji dolaze u Budvu, te su se zbog toga Goran i Bojana odlučili da otvore restoran u glavnom gradu Crne Gore.</p>
            <p>Ako ste ikada bili u Aziji, nadamo se da će Vam naša jela vratiti ta sećanja. Ako niste bili, nadamo se da će Vas iskustvo kod nas inspirisati da istražite ovaj dio svijeta.<br> Iznad svega, nadamo se da ćete uživati u malo „Ukusa Azije“.</p>
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
