<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Vedyas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Custom Admin Theme Design" />
<meta name="csrf-token" content="{!! csrf_token() !!}" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
{!! Html::style('css/bootstrap.css') !!}
<!-- //bootstrap-css -->
<!-- Custom CSS -->
{!! HTML::style('css/style.css') !!}
<!-- font CSS -->
{!! HTML::style('https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic') !!}
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
{!! HTML::style('css/font.css') !!}
{!! HTML::style('css/font-awesome.css') !!}

<!-- //font-awesome icons -->
{!! HTML::script('js/jquery2.0.3.min.js') !!}
<script type="text/javascript">

 $("#sale_pri").on('keyup',function(){
    $(".zone_pr").val($(this).val());
});

$(document).ready(function(){

 fetch_product_name();

 function fetch_product_name(query = '')
 {
  
   $('.prod_name').val(query);
 }

 $(document).on('keyup', '.pro_name', function(){
     
  var query = $(this).val();
  fetch_product_name(query);
 });
});

    

$(document).ready(function(){
 fetch_product_data1();
 function fetch_product_data1(query = '') {
  $.ajax({
   url:"{{ route('live_product_1') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('#live_product_1').html(data.table_data);
   }
  })
 }
 $(document).on('keyup', '.live_product_1', function(){
  $("#live_product_1").show();    
  var query = $(this).val();
  fetch_product_data1(query);
 });
});


function getProduct_Code_1(val) {
    $.ajax({
        type: "GET",
        url: "{{ route('check_product_code') }}",
        data: {'code' : val},
        success: function(data){
            if(data.status == 'Fail'){
            } else{
                $(".new_product_id1").val(data.product_id);
                $(".product_name1").val(data.product_name);

                $(".product_sku1").val(data.product_sku);
                $(".product_price1").val(data.price);
            }
            $("#live_product_1").hide();   
        }
    });
}


$(document).ready(function(){
 fetch_product_data2();
 function fetch_product_data2(query = '') {
  $.ajax({
   url:"{{ route('live_product_2') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('#live_product_2').html(data.table_data);
   }
  })
 }
 $(document).on('keyup', '.live_product_2', function(){
  $("#live_product_2").show();    
  var query = $(this).val();
  fetch_product_data2(query);
 });
});

function getProduct_Code_2(val) {
    $.ajax({
        type: "GET",
        url: "{{ route('check_product_code_2') }}",
        data: {'code' : val},
        success: function(data){
            if(data.status == 'Fail'){
            } else{
                $(".new_product_id2").val(data.product_id);
                $(".product_name2").val(data.product_name);

                $(".product_sku2").val(data.product_sku);
                $(".product_price2").val(data.price);
            }
            $("#live_product_2").hide();   
        }
    });
}


$(document).ready(function(){
 fetch_product_data3();
 function fetch_product_data3(query = '') {
  $.ajax({
   url:"{{ route('live_product_3') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('#live_product_3').html(data.table_data);
   }
  })
 }
 $(document).on('keyup', '.live_product_3', function(){
  $("#live_product_3").show();    
  var query = $(this).val();
  fetch_product_data3(query);
 });
});

function getProduct_Code_3(val) {
    $.ajax({
        type: "GET",
        url: "{{ route('check_product_code_3') }}",
        data: {'code' : val},
        success: function(data){
            if(data.status == 'Fail'){
            } else{
                $(".new_product_id3").val(data.product_id);
                $(".product_name3").val(data.product_name);

                $(".product_sku3").val(data.product_sku);
                $(".product_price3").val(data.price);
            }
            $("#live_product_3").hide();   
        }
    });
}


$(document).ready(function(){
 fetch_product_data4();
 function fetch_product_data4(query = '') {
  $.ajax({
   url:"{{ route('live_product_4') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('#live_product_4').html(data.table_data);
   }
  })
 }
 $(document).on('keyup', '.live_product_4', function(){
  $("#live_product_4").show();    
  var query = $(this).val();
  fetch_product_data4(query);
 });
});

function getProduct_Code_4(val) {
    $.ajax({
        type: "GET",
        url: "{{ route('check_product_code_4') }}",
        data: {'code' : val},
        success: function(data){
            if(data.status == 'Fail'){
            } else{
                $(".new_product_id4").val(data.product_id);
                $(".product_name4").val(data.product_name);

                $(".product_sku4").val(data.product_sku);
                $(".product_price4").val(data.price);
            }
            $("#live_product_4").hide();   
        }
    });
}


$(document).ready(function(){
 fetch_product_data5();
 function fetch_product_data5(query = '') {
  $.ajax({
   url:"{{ route('live_product_5') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('#live_product_5').html(data.table_data);
   }
  })
 }
 $(document).on('keyup', '.live_product_5', function(){
  $("#live_product_5").show();    
  var query = $(this).val();
  fetch_product_data5(query);
 });
});

function getProduct_Code_5(val) {
    $.ajax({
        type: "GET",
        url: "{{ route('check_product_code_5') }}",
        data: {'code' : val},
        success: function(data){
            if(data.status == 'Fail'){
            } else{
                $(".new_product_id5").val(data.product_id);
                $(".product_name5").val(data.product_name);

                $(".product_sku5").val(data.product_sku);
                $(".product_price5").val(data.price);
            }
            $("#live_product_5").hide();   
        }
    });
}


$(document).ready(function(){
 fetch_product_data6();
 function fetch_product_data6(query = '') {
  $.ajax({
   url:"{{ route('live_product_6') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data) {
    $('#live_product_6').html(data.table_data);
   }
  })
 }
 $(document).on('keyup', '.live_product_6', function(){
  $("#live_product_6").show();    
  var query = $(this).val();
  fetch_product_data6(query);
 });
});


function getProduct_Code_6(val) {
    $.ajax({
        type: "GET",
        url: "{{ route('check_product_code_6') }}",
        data: {'code' : val},
        success: function(data){
            if(data.status == 'Fail'){
            } else{
                $(".new_product_id6").val(data.product_id);
                $(".product_name6").val(data.product_name);

                $(".product_sku6").val(data.product_sku);
                $(".product_price6").val(data.price);
            }
            $("#live_product_6").hide();   
        }
    });
}


$(document).ready(function(){
 fetch_product_data7();
 function fetch_product_data7(query = '') {
  $.ajax({
   url:"{{ route('live_product_7') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('#live_product_7').html(data.table_data);
   }
  })
 }
 $(document).on('keyup', '.live_product_7', function(){
  $("#live_product_7").show();    
  var query = $(this).val();
  fetch_product_data7(query);
 });
});

function getProduct_Code_7(val) {
    $.ajax({
        type: "GET",
        url: "{{ route('check_product_code_7') }}",
        data: {'code' : val},
        success: function(data){
            if(data.status == 'Fail'){
            } else{
                $(".new_product_id7").val(data.product_id);
                $(".product_name7").val(data.product_name);

                $(".product_sku7").val(data.product_sku);
                $(".product_price7").val(data.price);
            }
            $("#live_product_7").hide();   
        }
    });
}



$(document).ready(function(){
 fetch_product_data8();
 function fetch_product_data8(query = '') {
  $.ajax({
   url:"{{ route('live_product_8') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('#live_product_8').html(data.table_data);
   }
  })
 }
 $(document).on('keyup', '.live_product_8', function(){
  $("#live_product_8").show();    
  var query = $(this).val();
  fetch_product_data8(query);
 });
});

function getProduct_Code_8(val) {
    $.ajax({
        type: "GET",
        url: "{{ route('check_product_code_8') }}",
        data: {'code' : val},
        success: function(data){
            if(data.status == 'Fail'){
            } else{
                $(".new_product_id8").val(data.product_id);
                $(".product_name8").val(data.product_name);

                $(".product_sku8").val(data.product_sku);
                $(".product_price8").val(data.price);
            }
            $("#live_product_8").hide();   
        }
    });
}


$(document).ready(function(){
 fetch_product_data9();
 function fetch_product_data9(query = '') {
  $.ajax({
   url:"{{ route('live_product_9') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('#live_product_9').html(data.table_data);
   }
  })
 }
 $(document).on('keyup', '.live_product_9', function(){
  $("#live_product_9").show();    
  var query = $(this).val();
  fetch_product_data9(query);
 });
});

function getProduct_Code_9(val) {
    $.ajax({
        type: "GET",
        url: "{{ route('check_product_code_9') }}",
        data: {'code' : val},
        success: function(data){
            if(data.status == 'Fail'){
            } else{
                $(".new_product_id9").val(data.product_id);
                $(".product_name9").val(data.product_name);

                $(".product_sku9").val(data.product_sku);
                $(".product_price9").val(data.price);
            }
            $("#live_product_9").hide();   
        }
    });
}


$(document).ready(function(){
 fetch_product_data10();
 function fetch_product_data10(query = '') {
  $.ajax({
   url:"{{ route('live_product_10') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('#live_product_10').html(data.table_data);
   }
  })
 }
 $(document).on('keyup', '.live_product_10', function(){
  $("#live_product_10").show();    
  var query = $(this).val();
  fetch_product_data10(query);
 });
});

function getProduct_Code_10(val) {
    $.ajax({
        type: "GET",
        url: "{{ route('check_product_code_10') }}",
        data: {'code' : val},
        success: function(data){
            if(data.status == 'Fail'){
            } else{
                $(".new_product_id10").val(data.product_id);
                $(".product_name10").val(data.product_name);

                $(".product_sku10").val(data.product_sku);
                $(".product_price10").val(data.price);
            }
            $("#live_product_10").hide();   
        }
    });
}


$(document).ready(function(){
 fetch_product_data11();
 function fetch_product_data11(query = '') {
  $.ajax({
   url:"{{ route('live_product_11') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('#live_product_11').html(data.table_data);
   }
  })
 }
 $(document).on('keyup', '.live_product_11', function(){
  $("#live_product_11").show();    
  var query = $(this).val();
  fetch_product_data10(query);
 });
});

function getProduct_Code_11(val) {
    $.ajax({
        type: "GET",
        url: "{{ route('check_product_code_11') }}",
        data: {'code' : val},
        success: function(data){
            if(data.status == 'Fail'){
            } else{
                $(".new_product_id11").val(data.product_id);
                $(".product_name11").val(data.product_name);

                $(".product_sku11").val(data.product_sku);
                $(".product_price11").val(data.price);
            }
            $("#live_product_11").hide();   
        }
    });
}


</script>
{!! HTML::script('js/modernizr.js') !!}
{!! HTML::script('js/jquery.cookie.js') !!}
{!! HTML::script('js/screenfull.js') !!}

@yield('css')
    <script>
    $(function () {
        $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
        if (!screenfull.enabled) {
            return false;
        }            
        $('#toggle').click(function () {
            screenfull.toggle($('#container')[0]);
        }); 
    });
    </script>
<!-- charts -->
{!! HTML::script('js/raphael-min.js') !!}
{!! HTML::script('js/morris.js') !!}
{!! HTML::script('js/morris.js') !!}
{!! HTML::style('css/morris.css') !!}
{!! HTML::style('css/template.css') !!}
<!-- //charts -->
<!--skycons-icons-->
{!! HTML::script('js/skycons.js') !!}

<!--//skycons-icons-->
</head>
<body class="dashboard-page">
    @include('admin.layouts.sidebar')    
    <section class="wrapper scrollable">
        <nav class="user-menu">
            <a href="javascript:;" class="main-menu-access">
            <i class="icon-proton-logo"></i>
            <i class="icon-reorder"></i>
            </a>
        </nav>
        @include('admin.layouts.header')
        <div class="main-grid">
            @yield('content')
        </div>
        @include('admin.layouts.footer')       
    </section>

<script src="https://kit.fontawesome.com/4fa1165109.js" crossorigin="anonymous"></script>   
<script type="text/javascript">

$("#addMore1").click(function(){
  $(".product_one").show();
  $(".product_one_more").hide();
  $(".product_two_more").show(); 
  
});

$("#addMore2").click(function(){
  $(".product_two").show();
  $(".product_two_more").hide();
  $(".product_three_more").show(); 
});

$("#addMore3").click(function(){
  $(".product_three").show();
  $(".product_three_more").hide();
  $(".product_four_more").show(); 
});

$("#addMore4").click(function(){
  $(".product_four").show();
  $(".product_four_more").hide();
  $(".product_five_more").show(); 
});

$("#addMore5").click(function(){
  $(".product_five").show();
  $(".product_five_more").hide();
  $(".product_six_more").show(); 
});

$("#addMore6").click(function(){
  $(".product_six").show();
  $(".product_six_more").hide();
  $(".product_seven_more").show(); 
});

$("#addMore7").click(function(){
  $(".product_seven").show();
  $(".product_seven_more").hide();
  $(".product_eight_more").show(); 
});

</script>

</body>
</html>
