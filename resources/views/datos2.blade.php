@foreach($resm as $e)
<tr>
    <td colspan="2" style="border: none;">
        <input type="text" class="form-control" size="50" name="Nombre_Mwrw" value="{{$e->medicamento}}">
    </td>
</tr>
@endforeach
