@extends('layouts.master')
@section('content')
<div>
    <h3 class="text-center">Reporte de emergergencias</h3>
</div>
<div class="row col-10">
<canvas id="myChart"></canvas>

</div>

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Fracturas', 'Fiebre', 'Partos', 'Convulciones', 'Envenenamiento'],
      datasets: [{
        label: '# reporte de emergencias',
        data: [],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>


@endsection
