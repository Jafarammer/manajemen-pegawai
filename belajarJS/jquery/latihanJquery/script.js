$(document).ready(function() {
    $('.box').css({
        background : 'lightblue',
        width : '24rem',
        height : '24rem',
        boxShadow : '0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22)',
        position : 'absolute',
        top : '50%',
        left : '50%',
        transform: 'translate(-50%, -50%)',
        padding : '4rem 2rem',
        borderRadius : '10px'
    });
    $('.label-box').css({
        marginRight : '2rem',
        color : 'salmon',
        fontWeight : 'bold'
    });
    $('.input-box').css({
        padding : '12px',
        width : '65%',
        border : 'none',
        borderRadius: '10px',
        outlineColor : 'salmon',
        marginBottom : '15px'
    });
    $('.btn-coba').click(function() {
        $('.box').css({
            background : 'red'
        });
    });

    $('.input-box').mouseenter(function() {
        $(this).css({
            padding : '18px'
        })
    });

    $('.input-box').mouseleave(function() {
        $(this).css({
            padding : '12px'
        });
    });

    $('#nama').keyup(function() {
        $('#pesan').text($(this).val());
    });

    $('.toggle').click(function() {
        $('.box').fadeToggle(2000);
    });

    $('.slide-toggle').click(function() {
        $('.box').slideToggle(2000);
    })

})