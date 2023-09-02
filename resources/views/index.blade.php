@extends('layout')

@section('contenido')

<h4>
Bienvenido a Echo-Translogics, tu socio confiable en soluciones de movilidad empresarial. Nos especializamos en el alquiler de vehículos para empresas, brindando una flota diversa y actualizada que se adapta a las necesidades específicas de tu negocio.
</h4>
<div class="btn btn-primary">
<a href="{{url('vehiculos')}}" class="text-light"> AÑADIR VEHICULOS</a>
</div>

<div class="btn btn-success">
    <a href="{{url('entregados')}}" class="text-light">ENTREGADO</a>

</div>

@stop