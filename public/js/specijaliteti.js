$(document).ready(function () {
   $('#first').click(function () {
        if($(this).html() == 'Saznajte vise')
        {
            $(this).html('Zatvori');
        }
        else
        {
            ($(this).html('Saznajte vise'));
        }
        $('.first').slideToggle(1000);
   });

    $('#secend').click(function () {
        if($(this).html() == 'Saznajte vise')
        {
            $(this).html('Zatvori');
        }
        else
        {
            ($(this).html('Saznajte vise'));
        }
        $('.secend').slideToggle(1000);
    });

    $('#third').click(function () {
        if($(this).html() == 'Saznajte vise')
        {
            $(this).html('Zatvori');
        }
        else
        {
            ($(this).html('Saznajte vise'));
        }
        $('.third').slideToggle(1000);
    });

    $('#last').click(function () {
        if($(this).html() == 'Saznajte vise')
        {
            $(this).html('Zatvori');
        }
        else
        {
            ($(this).html('Saznajte vise'));
        }
        $('.last').slideToggle(1000);
    });
});