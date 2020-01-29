@foreach($resm1 as $e1)
<tr>
    <td colspan="2" style="border: none;">
        <input type="text" class="form-control" name="Cantidad_surtida" value="{{$e1->existencia}}" readonly>
    </td>
</tr>
@endforeach