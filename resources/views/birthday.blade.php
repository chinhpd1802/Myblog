<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Birth Day</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Styles -->
    <style>
    @import url('//fonts.googleapis.com/css?family=Roboto:400,900');

    html,
    body {
        position: relative;
        font-size: 100%;
        width: 100vw;
        height: 100vh;
    }

    hr {
        outline: 0;
        border: 2px solid #fff;
        margin: 1rem 0;
    }

    body {
        background-color: #d0e1db;
        color: #fff;
        font-family: "Roboto", sans-serif;
        overflow: hidden;
    }

    h1 {
        margin: 0;
        line-height: 1;
    }

    h2 {
        margin: 0;
        line-height: 1;
    }

    h3 {
        margin: 0;
        line-height: 1;
    }

    h4 {
        margin: 0;
        line-height: 1;
    }

    h5 {
        margin: 0;
        line-height: 1;
    }

    h6 {
        margin: 0;
        line-height: 1;
    }

    a {
        text-decoration: none;
    }

    .text-container {
        position: absolute;
        top: 50%;
        left: 50%;
        -moz-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .text-container h1 {
        cursor: pointer;
        padding: 20px 20px;
        background-color: #d06f06;
        text-align: center;
        font-weight: 900;
        font-size: 4em;
        margin: 0;
        line-height: 1;
        opacity: 0;
        margin-bottom: 0.3em;
    }

    .text-container h2 {
        text-transform: uppercase;
        font-size: 2.5rem;
        margin: 0;
    }
    </style>
</head>

<body>
    <a href="{{route('home')}}" class="fa fa-chevron-circle-left">Back</a>
    <div class="text-container">
        <h1>Happy BirhDay</h1>
        <!-- <img src="{{URL::asset('image/54525375_2296448924012255_5220957378819653632_n.jpg')}}" alt="" width="90%"> -->
    </div>
    <audio controls autoplay hidden loop volume="0.1">
        <source src="{{URL::asset('image/music.mp3')}}" type="audio/mpeg">
    </audio>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/velocity/1.2.2/velocity.min.js"></script>
    <script>
    (function($) {
        var $html = $('html'),
            $h1 = $('h1'),
            colors = [
                '#fa6f5a',
            ],
            txt = ['<img src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/83491264_2551566041833874_4162764435942801408_n.jpg?_nc_cat=105&_nc_ohc=yrMEeo3B11IAX-tv6w7&_nc_ht=scontent.fhan2-4.fna&oh=cde14210e368ec033cb981632494e44c&oe=5EC720CB" alt="" width="100%">',
            '<img src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/54525375_2296448924012255_5220957378819653632_n.jpg?_nc_cat=100&_nc_ohc=Psw42rQ3fVoAX_J8ZeT&_nc_ht=scontent.fhan2-4.fna&oh=a0518f61e55589776c40437e17f2032c&oe=5EBEA524" alt="" width="90%">',
              '<img src="https://scontent.fhan2-3.fna.fbcdn.net/v/t31.0-8/s960x960/26198051_1973671146290036_2376035140256622589_o.jpg?_nc_cat=108&_nc_ohc=x5MPMVUMq0wAX8d6kWX&_nc_ht=scontent.fhan2-3.fna&oh=3b55f50a77c9a73c0eb9a007da9e6f9d&oe=5EC33C56" alt="" width="90%">',
              '<img src="https://scontent.fhan2-1.fna.fbcdn.net/v/t31.0-8/p720x720/12657951_1561325034191318_1053491073654603627_o.jpg?_nc_cat=106&_nc_ohc=WFSRLakjeJgAX-H8MSG&_nc_ht=scontent.fhan2-1.fna&_nc_tp=6&oh=f43f82d4a823f2a2517d25a9d82c3290&oe=5EBE7DBB" alt="" width="90%">',
              '<img src="https://scontent.fhan2-3.fna.fbcdn.net/v/t1.0-9/12346498_1532772433713245_8606245238526713707_n.jpg?_nc_cat=108&_nc_ohc=TDW6pZ2j3zcAX8-xe_a&_nc_ht=scontent.fhan2-3.fna&oh=79336dd35eaf25ac1341ec8a053adaf0&oe=5EC6ED7F" alt="" width="90%">',
              '<img src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-9/12063594_1511668479156974_1769059037292365152_n.jpg?_nc_cat=102&_nc_ohc=LWKzAJkP5nQAX9qDOfR&_nc_ht=scontent.fhan2-1.fna&oh=dc033a3b033ba782897069a416872303&oe=5ED46F0B" alt="" width="90%">',
                'Hey Hey (0^0)',

                'Hép - Pi - Bớt - Đây',
                'Wish you',

                'Higher ^^!',
                'Stronger',
                'And...',
                'Good Performance For The Year',
                '<span class="fa fa-4x fa-birthday-cake"></span><hr><h2>happy birthday</h2>',
                'Hết Rồi ',
                'One More',
                'Xem đến khi nào thoát ra thì thôi ><',
                'Nút Back ở góc trên tay trái'
            ],
            animate = function(it, direction) {
                var c = Math.floor((Math.random() * colors.length));
                var m = direction == "left" ? -1 : 1;
                $h1
                    .velocity({
                        opacity: 1,
                        translateY: [0, -2000],
                        translateX: [0, 0]
                    }, {
                        duration: 1200,
                        delay: 0,
                        easing: [150, 15],
                        begin: function(el) {
                            $h1.css({
                                'background-color': colors[it % colors.length]
                            });
                            $h1.html(txt[it]);
                        }
                    })
                    .velocity({
                        translateX: m * 1500
                    }, {
                        duration: 1000,
                        delay: 2500,
                        easing: [50, 14],
                        complete: function() {
                            animate(it == txt.length - 1 ? 0 : it + 1, direction == "left" ? "right" :
                                "left");
                        }
                    });
            }

        animate(0, "left");
    })(window.jQuery);
    </script>
</body>

</html>
