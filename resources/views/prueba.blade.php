<form action="csc_post" method="POST">
    @csrf
    <h1>Conteo Sanguineo Completo</h1>
    <label>Nombre Cliente</label>
    <input type="text" >
    <br>    
    <label>csc_codmascota</label>
    <input type="text" name="csc_codmascota">
    <br>
    <label>blobulosBlancos</label>
    <input type="text" name="blobulosBlancos">
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
    <input type="submit" value="Enviar">
    <a href="{{route('registrar')}}">CANCELAR</a> 
</form>