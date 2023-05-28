<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset("assetEndUser/lib/easing/easing.min.js")}}"></script>
<script src="{{asset("assetEndUser/lib/owlcarousel/owl.carousel.min.js")}}"></script>

<!-- Contact Javascript File -->
<script src="{{asset("assetEndUser/mail/jqBootstrapValidation.min.js")}}"></script>
<script src="{{asset("assetEndUser/mail/contact.js")}}"></script>

<!-- Template Javascript -->
<script src="{{asset("assetEndUser/js/main.js")}}"></script>
<script src="{{asset("assetEndUser/js/search.js")}}"></script>
<script src=" {{asset('assetEndUser/js/search.js')}}"></script>
<script>
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".addCart").submit(function (e){
        e.preventDefault();
        var formData = $(".addCart").serialize();
        $.ajax({
            url:"{{route('endUser.cart')}}",
            type:"POST",
            data:formData,
            success:function (dataBack){
                // $(".count").prepend(dataBack);
                console.log(dataBack)

            }
        });
    });


    $(".addFav").submit(function (e){
        e.preventDefault();
        var formData = $(".addFav").serialize();
        $.ajax({
            url:"{{route('endUser.storeFav')}}",
            type:"POST",
            data:formData,
            success:function (dataBack){
                // $(".count").prepend(dataBack);
                console.log(dataBack)

            }
        });
    });
</script>
@include('sweetalert::alert')
@stack('js')
