$(document).ready(function (){
   $('#search').keyup(function (){
        var search = $('#search').val();
        if (search == "")
        {
            $('#memlist').html("");
            $('#result').head();
        }else {
            $.get("{{URL::to('search')}}",{search:search},function (data){
               $('#memlist').empty().html(data);
               $('#result').show();
            });
        }
   });
});
