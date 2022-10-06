<div class="input-group">
    <input type="hidden" name="pagina" id="numPagina" value="1">
    @if($parPaginacion['pagActual']==1)
        <button type="button" class="btn btn-sm btn-success btn-paginacion" disabled=""><<</button>
    @else
        <button type="button" data-pag="{{$parPaginacion['pagActual']-1}}" class="btn btn-sm btn-success btn-paginacion" ><<</button>
    @endif
    
    <select class="form-control-sm form-control input-s-sm inline" id="sel-pagina">
        @for($i=1; $i<=$parPaginacion['totPaginas'];$i++)
            <option @if($parPaginacion['pagActual']==$i) selected="true" @endif value="{{$i}}">{{$i}}</option>
        @endfor
    </select>
    @if($parPaginacion['pagActual']==$parPaginacion['totPaginas'])
        <button type="button" class="btn btn-sm btn-success btn-paginacion" disabled="true">>></button>
    @else
        <button type="button" data-pag="{{$parPaginacion['pagActual']+1}}" class="btn btn-sm btn-success btn-paginacion">>></button>
    @endif
    
</div>
<script>
    $(document).ready(function(){
        $('.btn-paginacion').click(function(){
            const pag=$(this).data('pag');
            $('#numPagina').val(pag);
            document.formBuscar.submit();
        });
        $('#sel-pagina').change(function(){
            const pag=$(this).val();
            $('#numPagina').val(pag);
            document.formBuscar.submit();
        });
    });
</script>