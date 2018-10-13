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
        <div class="large-12 columns">
            <h2>Imate pitanje?</h2>
            <p>Budite slobodni da nas kontaktirate!</p>
        </div>
        <div class="clearfix"></div>

        <div class="large-12 columns">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif
        </div>


        <form action="{{url('/contactform')}}" class="frm" method="post">
        {{csrf_field()}}
            <div class="large-6 medium-6 small-12 columns">
                <input name="name" id="name" placeholder="Ime" type="text" class="radius">
            </div>
            <div class="large-6 medium-6 small-12 columns">
                <input name="email" id="email" placeholder="Email" type="text" class="radius">
            </div>
            <div class="large-6 medium-6 small-12 columns">
                <input name="number" id="number" placeholder="Telefon" type="text" class="radius">
            </div>
            <div class="large-6 medium-6 small-12 columns">
                <input name="subject" id="subject" placeholder="Tema" type="text" class="radius">
            </div>
            <div class="large-12 columns">
                <textarea name="message" id="message" placeholder="Vasa poruka" class="radius"></textarea>
            </div>
            <div class="large-12 columns">
                <input name="submit" type="submit" value="Posaljite poruku" class="button round">
            </div>
        </form>

    </div>
    <div class="row">
        @include('errors.error')
    </div>
</div>

<div class="content-sec inner-sec">
    <div class="row">
        <div class="large-6 columns">
            <h2>Taste of Asia - <span>Budva</span></h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2951.4558687135795!2d18.835720465879483!3d42.29013732919153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134dd49ea40a9f89%3A0x489f4c091b6c156d!2sTaste+of+Asia+-+Thai+restaurant!5e0!3m2!1ssr!2srs!4v1523805004672" width="520" height="200" frameborder="0" style="border:0; max-width: 100%" allowfullscreen></iframe>

            <p class="contact-paragraf">Adresa: Popa Jola Zeca BB</p>
            <p class="contact-paragraf">Telefon: +382233455249</p>
            <p class="contact-paragraf">Email: gdjoric@yahoo.com</p>
            <p class="contact-paragraf">Radno vreme: 12:00-24:00h</p>
        </div>

        <div class="large-6 columns">
            <h2>Taste of Asia - <span>Podgorica</span></h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2944.312535387448!2d19.2460506!3d42.4423659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134deb2ff4d8cf39%3A0x80bbb55d7273a28b!2sThai+restaurant+Taste+of+Asia!5e0!3m2!1ssr!2srs!4v1523805208660" width="520" height="200" frameborder="0" style="border:0;max-width: 100%" allowfullscreen></iframe>

            <p class="contact-paragraf">Adresa: Rimski trg 13</p>
            <p class="contact-paragraf">Telefon: +020763332</p>
            <p class="contact-paragraf">Email: gdjoric@yahoo.com</p>
            <p class="contact-paragraf">Radno vreme: 12:00-24:00h</p>
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
