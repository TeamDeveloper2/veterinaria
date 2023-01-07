@extends('layouts.master')
@section('content')
<div>
    <h3 class="text-center">Reporte de Cita</h3>
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
      labels: ['Agosto-2022', 'Septiembre-2022', 'Octubre-2022', 'Nobiembre-2022','Diciembre-2022','Enero-2023'],
      datasets: [{
        label: '# reporte de Citas',
        data: [2, 0, 0, 0, 0],
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
