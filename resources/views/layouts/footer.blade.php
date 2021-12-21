<!-- include jquery jquery-3.6.0-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap js  -->
<script type="text/javascript" src="{{asset('assets/frontend/js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/frontend/js/main.js')}}"></script>

<script>
    $(document).ready(function() {
        $('.slick-carousel').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true
        });
    });

    function navCat() {
        var html = "";
        jQuery.ajax({
            url: '{{ url('/ParentNav') }}',
            type: 'GET',
            dataType: 'JSON',
            success: function(data) {
                $.each(data, function(index, value) {
                    html += '<li class="nav-item"><a class="nav-link" href="/category/' + value['slug'] + '">' + value['name'] + '</a></li>';
                });
                html += '<li class="nav-item"><a class="nav-link" href="/login" class="sign-in"><img src="{{asset('assets/frontend/images/enter.svg')}}" class="sign-icon">Sign in</a></li>';
                $("#category").html(html);
            }
        });
    }
    navCat();
</script>
