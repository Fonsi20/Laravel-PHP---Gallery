@extends('plantilla')

@section('seccion')
<h1 class="display-4">Este es mi equipo de trabajo:</h1>

@foreach ($equipo as $item)
<a href="{{route('nosotros',$item)}}" class="h4 text-primary">{{$item}}</a></br>
@endforeach

@if(!empty($nombre))
    <p>La variable existe</p>

    @switch($nombre)
        @case($nombre=='Alex')
            <h2 class="mt-5">El nombre es {{$nombre}}:</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet felis dapibus, dictum ex eget, euismod diam. Donec aliquam ultrices dolor ut volutpat. Ut egestas nisi efficitur porttitor fermentum. Sed viverra, tortor vitae pulvinar tincidunt, turpis quam dictum mi, et euismod elit neque in dolor. Integer id est ut sem viverra tincidunt quis a est. Phasellus vestibulum augue lacus, nec blandit enim luctus non. Vestibulum malesuada purus eu enim mollis cursus. Duis varius mauris libero, sit amet cursus leo blandit non. In justo mauris, semper at congue ultrices, dictum eu ligula. Nulla sed vulputate lectus. Quisque vel est molestie, lacinia purus viverra, egestas lorem. Phasellus iaculis blandit finibus.</p>
            @break
        @case($nombre=='Pipo')
            <h2 class="mt-5">El nombre es {{$nombre}}:</h2>
            <p>In in felis facilisis, gravida libero vel, iaculis lectus. Morbi tellus purus, efficitur et nisl vel, aliquam consequat neque. Nam lacus est, congue at turpis quis, iaculis viverra neque. Praesent in dictum erat, convallis feugiat turpis. Donec leo tellus, condimentum non pulvinar sed, euismod in sapien. Nam sed semper ante. Etiam tempor at elit non elementum. Fusce ligula justo, euismod non placerat at, maximus sed mi. Curabitur id varius nibh. Aliquam posuere rhoncus ipsum, non sollicitudin sapien varius in. Sed ullamcorper luctus quam, vel blandit urna aliquet id. Morbi eu ornare turpis.</p>@break
        @case($nombre=='Muzka')
            <h2 class="mt-5">El nombre es {{$nombre}}:</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet felis dapibus, dictum ex eget, euismod diam. Donec aliquam ultrices dolor ut volutpat. Ut egestas nisi efficitur porttitor fermentum. Sed viverra, tortor vitae pulvinar tincidunt, turpis quam dictum mi, et euismod elit neque in dolor. Integer id est ut sem viverra tincidunt quis a est. Phasellus vestibulum augue lacus, nec blandit enim luctus non. Vestibulum malesuada purus eu enim mollis cursus. Duis varius mauris libero, sit amet cursus leo blandit non. In justo mauris, semper at congue ultrices, dictum eu ligula. Nulla sed vulputate lectus. Quisque vel est molestie, lacinia purus viverra, egestas lorem. Phasellus iaculis blandit finibus.</p>
            @break
        @default
            
    @endswitch

@endif
@endsection