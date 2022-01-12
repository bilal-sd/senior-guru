<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <title>Senior Guru</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/fontawsome.min.css')}}" />
    <link rel="icon" href="{{asset('assets/frontend/images/fav.png')}}" type="image/gif" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/slick.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/slick-theme.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/common.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/header.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/footer.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/login.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/responsive.css')}}" />
    <style>
        #full-stars-example-two {
        /* use display:inline-flex to prevent whitespace issues. alternatively, you can put all the children of .rating-group on a single line */
        /* make hover effect work properly in IE */
        /* hide radio inputs */
        /* hide 'none' input from screenreaders */
        /* set icon padding and size */
        /* set default star color */
        /* if any input is checked, make its following siblings grey */
        /* make all stars orange on rating group hover */
        /* make hovered input's following siblings grey on hover */
        }
        #full-stars-example-two .rating-group {
        display: inline-flex;
        }
        #full-stars-example-two .rating__icon {
        pointer-events: none;
        }
        #full-stars-example-two .rating__input {
        position: absolute !important;
        left: -9999px !important;
        }
        #full-stars-example-two .rating__input--none {
        display: none;
        }
        #full-stars-example-two .rating__label {
        cursor: pointer;
        padding: 0 0.1em;
        font-size: 2rem;
        }
        #full-stars-example-two .rating__icon--star {
        color: orange;
        }
        #full-stars-example-two .rating__input:checked ~ .rating__label .rating__icon--star {
        color: #ddd;
        }
        #full-stars-example-two .rating-group:hover .rating__label .rating__icon--star {
        color: orange;
        }
        #full-stars-example-two .rating__input:hover ~ .rating__label .rating__icon--star {
        color: #ddd;
        }
    </style>
</head>
<body>
