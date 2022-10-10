<form action="contact_post" method="POST">
    @csrf
    <h1>cita</h1>
    <label>Consulta</label>
    <input type="checkbox" name="consulta" value="true">
    <br>    
    <label>Curacion</label>    
    <input type="checkbox" name="curacion" value="true">
    <br>    
    <label>ecografia</label>    
    <input type="checkbox" name="ecografia" value="true">
    <br>        
    <label>hemograma</label>    
    <input type="checkbox" name="hemograma" value="true">
    <br>        
    <label>radiografia</label>    
    <input type="checkbox" name="radiografia" value="true">
    <br>        
    <label>registro megico</label>    
    <input type="checkbox" name="registroMedico" value="true">
    <br>        
    <label>spa</label>
    <input type="checkbox" name="spa" value="true">    
    <br>  
    <label>otro</label>    
    <textarea name="otro"></textarea>
    <br>    
    <label>fecha</label>    
    <input type="date" name="fecha">
    <br>    
    <input type="submit" value="Enviar">
    <a href="{{route('registrar')}}">CANCELAR</a> 
</form>