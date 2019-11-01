<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">
 
<title> @yield('title','Dashboard')</title>
 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
  {!!Html::style('public/css/bootstrap.min.css')!!}
  {!!Html::style('public/css/bootstrap-theme.css')!!}
  {!!Html::style('public/css/elegant-icons-style.css')!!}
  {!!Html::style('public/css/font-awesome.min.css')!!}
  {!!Html::style('public/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')!!}
  {!!Html::style('public/assets/fullcalendar/fullcalendar/fullcalendar.css')!!}
  {!!Html::style('public/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')!!}
  {!!Html::style('public/css/owl.carousel.css')!!}
  {!!Html::style('public/css/jquery-jvectormap-1.2.2.css')!!}
  {!!Html::style('public/css/fullcalendar.css')!!}
  {!!Html::style('public/css/widgets.css')!!}
  {!!Html::style('public/css/style.css')!!}
  {!!Html::style('public/css/style-responsive.css')!!}
  {!!Html::style('public/css/xcharts.min.css')!!}
  {!!Html::style('public/css/jquery-ui-1.10.4.min.css')!!}

  {{-------------css datatable--------------------}}

  {!!Html::style('public/dataTable/jquery.dataTables.min.css')!!}
  {!!Html::style('public/dataTable/buttons.dataTables.min.css')!!}
  
  
  @yield('style')
<body>
<section id="container" class="">
  @include('layouts.header.header')
  @include('layouts.sidebars.sidebar')
  <section id="main-content">
      <div class="wrapper">
        
         @yield('content')
        
      </div>
  </section>
</section>  

  {!!Html::script('public/js/jquery.js')!!}
  {!!Html::script('public/js/jquery-ui-1.10.4.min.js')!!}
  {!!Html::script('public/js/jquery-1.8.3.min.js')!!}
  {!!Html::script('public/js/jquery-ui-1.9.2.custom.min.js')!!}
  {!!Html::script('public/js/bootstrap.min.js')!!}
  {!!Html::script('public/js/jquery.scrollTo.min.js')!!}
  {!!Html::script('public/js/jquery.nicescroll.js')!!}
  {!!Html::script('public/assets/jquery-knob/js/jquery.knob.js')!!}
  {!!Html::script('public/js/jquery.sparkline.js')!!}
  {!!Html::script('public/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')!!}
  {!!Html::script('public/js/owl.carousel.js')!!}
  {!!Html::script('public/js/fullcalendar.min.js')!!}
  {!!Html::script('public/assets/fullcalendar/fullcalendar/fullcalendar.js')!!}
  {!!Html::script('public/js/calendar-custom.js')!!}
  {!!Html::script('public/js/jquery.rateit.min.js')!!}
  {!!Html::script('public/js/jquery.customSelect.min.js')!!}
  {!!Html::script('public/assets/chart-master/Chart.js')!!}
  {!!Html::script('public/js/scripts.js')!!}
  {!!Html::script('public/js/sparkline-chart.js')!!}
  {!!Html::script('public/js/easy-pie-chart.js')!!}
  {!!Html::script('public/js/jquery-jvectormap-1.2.2.min.js')!!}
  {!!Html::script('public/js/jquery-jvectormap-world-mill-en.js')!!}
  {!!Html::script('public/js/xcharts.min.js')!!}
  {!!Html::script('public/js/jquery.autosize.min.js')!!}
  {!!Html::script('public/js/jquery.placeholder.min.js')!!}
  {!!Html::script('public/js/gdp-data.js')!!}
  {!!Html::script('public/js/morris.min.js')!!}
  {!!Html::script('public/js/sparklines.js')!!}
  {!!Html::script('public/js/charts.js')!!}
  {!!Html::script('public/js/jquery.slimscroll.min.js')!!}
  
  {{---------js Datatable--------------}}

  {!!Html::script('public/dataTable/jquery.dataTables.min.js')!!}
  {!!Html::script('public/dataTable/dataTables.buttons.min.js')!!}
  {!!Html::script('public/dataTable/jszip.min.js')!!}
  {!!Html::script('public/dataTable/pdfmake.min.js')!!}
  {!!Html::script('public/dataTable/vfs_fonts.js')!!}
  {!!Html::script('public/dataTable/buttons.html5.min.js')!!}
  
   <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
  @yield('script')


    <script>
    $(document).ready(function(){

      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

    });  

    

      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>
  
</body>
</html>