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
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script src=" {{asset('assetEndUser/js/search.js')}}"></script>
@include('sweetalert::alert')
@stack('js')
