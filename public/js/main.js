$(document).ready(function(){
    $('.js-slider').fotorama({
        nav: "thumbs",
        width: '100%',
        maxwidth: 1120,
        thumbwidth: 100,
        thumbheight: 60
    });
    $('.js-popup-open').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
                // $('.popup-input[data-name=ask_phone]').mask('+7 (000) 000-00-00')
            }
        },
        midClick: true
    });
    $('.portfolio').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery:{enabled:true},
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
                // $('.popup-input[data-name=ask_phone]').mask('+7 (000) 000-00-00')
            }
        },
        midClick: true
    });
    $('#phone, #f_phone').mask('+7 (000) 00-00-000');
    var prev_last_id = 0;
    $(window).on('scroll', function () {
        var scrollPos =  $(window).scrollTop();
        var block = $('.portfolio__wrap:last');
        var blockPos =  block.offset().top;


        if( scrollPos >=  blockPos ){
            var last_id = $('.portfolio-last').data('last');
            if(prev_last_id != last_id){
                prev_last_id = last_id;
                var deffer =  $.ajax(
                    {
                        type: 'POST',
                        url: '/works/new',
                        dataType: 'json',
                        data: {
                            last_id: last_id
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    }
                );
                deffer.success(function (data) {
                    if(!data.error){
                        $('.portfolio-last').data('last', data.last);
                        $('.portfolio').append(data.html);
                        $('.portfolio__wrap:last').fadeIn(500)
                    }
                });
            }
        }
    })
    
});