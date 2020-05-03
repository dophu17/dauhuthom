@extends('frontends.profile-layouts.layout')
@section('content')

<h2 class="mt-4 mb-4">Thống kê chi tiêu</h2>

<div class="row">
  <div class="col-md-6">
    <canvas id="chart1"></canvas>
  </div>
  <div class="col-md-6">
    
  </div>
</div>

<!-- chart -->
@section('scripts')
<script>
  $(document).ready(function(){
    var ctx = $('#chart1');
    var labels = JSON.parse('<?php echo json_encode($today['categories']); ?>');
    var datas = JSON.parse('<?php echo json_encode($today['totalPriceByCats']) ;?>');
    var backgroundColors = [
      'rgba(255, 99, 132, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(255, 206, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(255, 159, 64, 0.2)'
    ]
    var borderColors = [
      'rgba(255, 99, 132, 1)',
      'rgba(54, 162, 235, 1)',
      'rgba(255, 206, 86, 1)',
      'rgba(75, 192, 192, 1)',
      'rgba(153, 102, 255, 1)',
      'rgba(255, 159, 64, 1)'
    ]
    var chart1 = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: labels,
        datasets: [{
          data: datas,
          backgroundColor: backgroundColors,
          borderColor: borderColors,
          borderWidth: 1
        }]
      },
      options: {
        title: {
          display: true,
          text: 'Chi phí theo danh mục hôm nay (%)'
        }
      }
    });
  })
</script>
@stop
    
@endsection