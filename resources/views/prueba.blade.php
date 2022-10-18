<form action="csc_post" method="POST">
    @csrf
    <h1>Conteo Sanguineo Completo</h1>    
    <label>csc_codmascota</label>
    <input type="text" name="csc_codmascota">
    <br>
    <label>globulosBlancos</label>
    <input id="contador" type="text" name="globulosBlancos"> 
    <br>
    <label>globulosRojos</label>
    <input type="text" name="globulosRojos">
    <br>
    <label>hemoglobina</label>
    <input type="text" name="hemoglobina">
    <br>
    <label>plaquetas</label>
    <input type="text" name="plaquetas">
    <br>   
    <label>precio</label>
    <input type="text" name="precio">
    <br>     
    <label>fecha</label>    
    <input type="date" name="fecha">
    <br>    
    <input type="submit" value="Crear">
    <a href="{{route('registrar')}}">CANCELAR</a> 
</form>


<table class="default">
  <tr>        
    <td>Numero</td>
    <td>Codigo Mascota</td>
    <td>Nombre de la Mascota</td>
    <td>Codigo Cliente</td>
    <td>Nombre del Cliente</td>    
    <td>fecha</td>
  </tr>
  @foreach ($lista as $dato )
  <tr>    
    <td>{{$enumeracion++}}</td>    
    <td>{{$dato->csc_codmascota}}</td>
    <td>{{$dato->nombre}}</td>
    <td>{{$dato->id}}</td>
    <td>{{$dato->name}}</td>
    <td>{{$dato->fecha}}</td>
    <td>
        <a href= "{{url('/csc_edit/'.$dato->codcsc) }}" title="Mostrar"><img width="17px" src="{{asset('img/iconos/mostrar.png')}}" alt="Mostrar"></a>        
    </td>
  </tr>
  @endforeach
</table>