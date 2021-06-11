<!doctype html>
@if(app()->getLocale() == 'ar')
    <html dir="rtl" direction="rtl" lang="ar">
@else
    <html lang="en">
@endif
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>

    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/ar-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fontawsome/ar-all.min.css') }}">
        {{--                <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700,800" rel="stylesheet">--}}
        <link rel="stylesheet" href="{{ asset('assets/css/ar-style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/font/ar-flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/ar-components.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Tajawal" rel="stylesheet">
    @else
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fontawsome/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/font/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    @endif



    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/favicon.ico') }}"/>

  @stack('style')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      @include('layouts/partials/header')
      @include('layouts/partials/sidebar')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
         @yield('head')
         <div class="section-body">
         </div>
       </section>
       @yield('content')
     </div>
     <footer class="main-footer">
      <div class="footer-left">
        Copyright &copy; {{ date('Y') }} <div class="bullet"></div> Powered By <a href="{{ url('/') }}">{{ env('APP_NAME') }}</a>
      </div>

    </footer>
  </div>
</div>
<!-- General JS Scripts -->
<script src="{{ asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{ asset('assets/js/moment.min.js')}}"></script>
<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
@stack('js')
<script src="{{ asset('assets/js/stisla.js') }}"></script>
<!-- Template JS File -->
<script src="{{ asset('assets/js/scripts.js') }}"></script>

  @if(Request::is('seller/pos*'))
      <link rel="stylesheet" href="{{ asset('assets/pos/pos.js') }}">
      <link rel="stylesheet" href="{{ asset('assets/pos/vendors.js') }}">

{{--      <script type="text/javascript">--}}

{{--          var products = null;--}}

{{--          $(document).ready(function(){--}}
{{--              $('#container').removeClass('mainnav-lg').addClass('mainnav-sm');--}}
{{--              $('#product-list').on('click','.product-card',function(){--}}
{{--                  var id = $(this).data('id');--}}
{{--                  $.get('https://demo.activeitzone.com/ecommerce/variants', {id:id}, function(data){--}}
{{--                      if (data == 0) {--}}
{{--                          addToCart(id, null, 1);--}}
{{--                      }--}}
{{--                      else {--}}
{{--                          $('#variants').html(data);--}}
{{--                          $('#product-variation').modal('show');--}}
{{--                      }--}}
{{--                  });--}}
{{--              });--}}
{{--              filterProducts();--}}
{{--              getShippingAddress();--}}
{{--          });--}}

{{--          function filterProducts(){--}}
{{--              var keyword = $('input[name=keyword]').val();--}}
{{--              var category = $('select[name=poscategory]').val();--}}
{{--              var brand = $('select[name=brand]').val();--}}
{{--              $.get('https://demo.activeitzone.com/ecommerce/pos/products',{keyword:keyword, category:category, brand:brand}, function(data){--}}
{{--                  products = data;--}}
{{--                  $('#product-list').html(null);--}}
{{--                  setProductList(data);--}}
{{--              });--}}
{{--          }--}}

{{--          function loadMoreProduct(){--}}
{{--              if(products != null && products.links.next != null){--}}
{{--                  $.get(products.links.next,{}, function(data){--}}
{{--                      products = data;--}}
{{--                      setProductList(data);--}}
{{--                  });--}}
{{--              }--}}
{{--          }--}}

{{--          function setProductList(data){--}}
{{--              for (var i = 0; i < data.data.length; i++) {--}}
{{--                  $('#product-list').append('<div class="col-3">' +--}}
{{--                      '<div class="card bg-light c-pointer mb-2 product-card" data-id="'+data.data[i].id+'" >'+--}}
{{--                      '<span class="absolute-top-left bg-dark text-white px-1">'+data.data[i].price +'</span>'+--}}
{{--                      '<img src="'+ data.data[i].thumbnail_image +'" class="card-img-top img-fit h-100px mw-100 mx-auto" >'+--}}
{{--                      '<div class="card-body p-2">'+--}}
{{--                      '<div class="text-truncate-2 small">'+ data.data[i].name +'</div>'+--}}
{{--                      '</div>'+--}}
{{--                      '</div>'+--}}
{{--                      '</div>');--}}
{{--              }--}}
{{--              if (data.links.next != null) {--}}
{{--                  $('#load-more').find('.text-center').html('Load More');--}}
{{--              }--}}
{{--              else {--}}
{{--                  $('#load-more').find('.text-center').html('Nothing more found');--}}
{{--              }--}}
{{--              $('[data-toggle="tooltip"]').tooltip();--}}
{{--          }--}}

{{--          function removeFromCart(key){--}}
{{--              $.post('https://demo.activeitzone.com/ecommerce/remove-from-cart-pos', {_token:'uDSrbSEHAvJn62BI8dsWrU3UeThDeWQOjRtTRa4X', key:key}, function(data){--}}
{{--                  $('#cart-details').html(data);--}}
{{--                  $('#product-variation').modal('hide');--}}
{{--              });--}}
{{--          }--}}

{{--          function addToCart(product_id, variant, quantity){--}}
{{--              $.post('https://demo.activeitzone.com/ecommerce/add-to-cart-pos',{_token:'uDSrbSEHAvJn62BI8dsWrU3UeThDeWQOjRtTRa4X', product_id:product_id, variant:variant, quantity, quantity}, function(data){--}}
{{--                  $('#cart-details').html(data);--}}
{{--                  $('#product-variation').modal('hide');--}}
{{--              });--}}
{{--          }--}}

{{--          function addVariantProductToCart(id){--}}
{{--              var variant = $('input[name=variant]:checked').val();--}}
{{--              addToCart(id, variant, 1);--}}
{{--          }--}}

{{--          function updateQuantity(key){--}}
{{--              $.post('https://demo.activeitzone.com/ecommerce/update-quantity-cart-pos',{_token:'uDSrbSEHAvJn62BI8dsWrU3UeThDeWQOjRtTRa4X', key:key, quantity: $('#qty-'+key).val()}, function(data){--}}
{{--                  $('#cart-details').html(data);--}}
{{--                  $('#product-variation').modal('hide');--}}
{{--              });--}}
{{--          }--}}

{{--          function setDiscount(){--}}
{{--              var discount = $('input[name=discount]').val();--}}
{{--              $.post('https://demo.activeitzone.com/ecommerce/setDiscount',{_token:'uDSrbSEHAvJn62BI8dsWrU3UeThDeWQOjRtTRa4X', discount:discount}, function(data){--}}
{{--                  $('#cart-details').html(data);--}}
{{--                  $('#product-variation').modal('hide');--}}
{{--              });--}}
{{--          }--}}

{{--          function setShipping(){--}}
{{--              var shipping = $('input[name=shipping]:checked').val();--}}
{{--              $.post('https://demo.activeitzone.com/ecommerce/setShipping',{_token:'uDSrbSEHAvJn62BI8dsWrU3UeThDeWQOjRtTRa4X', shipping:shipping}, function(data){--}}
{{--                  $('#cart-details').html(data);--}}
{{--                  $('#product-variation').modal('hide');--}}
{{--              });--}}
{{--          }--}}

{{--          function getShippingAddress(){--}}

{{--              $.post('https://demo.activeitzone.com/ecommerce/get_shipping_address',{_token:'uDSrbSEHAvJn62BI8dsWrU3UeThDeWQOjRtTRa4X', id:$('select[name=user_id]').val()}, function(data){--}}
{{--                  $('#shipping_address').html(data);--}}
{{--              });--}}
{{--          }--}}

{{--          function add_new_address(){--}}
{{--              var customer_id = $('#customer_id').val();--}}
{{--              $('#set_customer_id').val(customer_id);--}}
{{--              $('#new-address-modal').modal('show');--}}
{{--              $("#close-button").click();--}}
{{--          }--}}

{{--          function submitOrder(payment_type){--}}
{{--              var user_id = $('select[name=user_id]').val();--}}
{{--              var name = $('input[name=name]').val();--}}
{{--              var email = $('input[name=email]').val();--}}
{{--              var address = $('textarea[name=address]').val();--}}
{{--              var country = $('select[name=country]').val();--}}
{{--              var city = $('input[name=city]').val();--}}
{{--              var postal_code = $('input[name=postal_code]').val();--}}
{{--              var phone = $('input[name=phone]').val();--}}
{{--              var shipping = $('input[name=shipping]:checked').val();--}}
{{--              var discount = $('input[name=discount]').val();--}}
{{--              var address = $('input[name=address_id]:checked').val();--}}

{{--              $.post('https://demo.activeitzone.com/ecommerce/pos-order',{_token:'uDSrbSEHAvJn62BI8dsWrU3UeThDeWQOjRtTRa4X', user_id:user_id, name:name, email:email, address:address, country:country, city:city, postal_code:postal_code, phone:phone, shipping_address:address, payment_type:payment_type, shipping:shipping, discount:discount}, function(data){--}}
{{--                  if(data == 1){--}}
{{--                      AIZ.plugins.notify('success', 'Order Completed Successfully.');--}}
{{--                      location.reload();--}}
{{--                  }--}}
{{--                  else{--}}
{{--                      AIZ.plugins.notify('danger', 'Something went wrong');--}}
{{--                  }--}}
{{--              });--}}
{{--          }--}}
{{--      </script>--}}

{{--      <script type="text/javascript">--}}


{{--          if ($('#lang-change').length > 0) {--}}
{{--              $('#lang-change .dropdown-menu a').each(function() {--}}
{{--                  $(this).on('click', function(e){--}}
{{--                      e.preventDefault();--}}
{{--                      var $this = $(this);--}}
{{--                      var locale = $this.data('flag');--}}
{{--                      $.post('https://demo.activeitzone.com/ecommerce/language',{_token:'uDSrbSEHAvJn62BI8dsWrU3UeThDeWQOjRtTRa4X', locale:locale}, function(data){--}}
{{--                          location.reload();--}}
{{--                      });--}}

{{--                  });--}}
{{--              });--}}
{{--          }--}}
{{--          function menuSearch(){--}}
{{--              var filter, item;--}}
{{--              filter = $("#menu-search").val().toUpperCase();--}}
{{--              items = $("#main-menu").find("a");--}}
{{--              items = items.filter(function(i,item){--}}
{{--                  if($(item).find(".aiz-side-nav-text")[0].innerText.toUpperCase().indexOf(filter) > -1 && $(item).attr('href') !== '#'){--}}
{{--                      return item;--}}
{{--                  }--}}
{{--              });--}}

{{--              if(filter !== ''){--}}
{{--                  $("#main-menu").addClass('d-none');--}}
{{--                  $("#search-menu").html('')--}}
{{--                  if(items.length > 0){--}}
{{--                      for (i = 0; i < items.length; i++) {--}}
{{--                          const text = $(items[i]).find(".aiz-side-nav-text")[0].innerText;--}}
{{--                          const link = $(items[i]).attr('href');--}}
{{--                          $("#search-menu").append(`<li class="aiz-side-nav-item"><a href="${link}" class="aiz-side-nav-link"><i class="las la-ellipsis-h aiz-side-nav-icon"></i><span>${text}</span></a></li`);--}}
{{--                      }--}}
{{--                  }else{--}}
{{--                      $("#search-menu").html(`<li class="aiz-side-nav-item"><span	class="text-center text-muted d-block">Nothing Found</span></li>`);--}}
{{--                  }--}}
{{--              }else{--}}
{{--                  $("#main-menu").removeClass('d-none');--}}
{{--                  $("#search-menu").html('')--}}
{{--              }--}}
{{--          }--}}
{{--      </script>--}}
  @endif


</body>
</html>
