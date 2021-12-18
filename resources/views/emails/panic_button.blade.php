<div
style="
width: 100%; 
min-width: 360px;
">
    <div style="height: 87px; width: 50%; min-width: 390px; background: #000000;text-align: center;margin: auto;">
        <img 
        src="https://i.postimg.cc/m2tB5J3f/Logo-60x60.png" 
        style="
        width: 40px;
        margin-top: 15px;">
    </div>
    <div style=" height: 500px;   width: 50%; min-width: 390px; margin: auto; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;">
        <div style=" max-width: 600px; height: 100%; margin: auto; position: relative; text-align: center;">
            <h1 >El Botón del Pánico ha sido activado</h1>
            <br><br>
            <o>Código</o> <br>
            <o>#{{ $o->id }} </o> <br>
            <br> 
            <o>Nombre</o> <br>
            <o>{{ $o->name }}</o> <br>
            <br> 
            @if ($o->phone != '')
            <o>Teléfono</o> <br>
            <o>{{ $o->phone }}</o> <br><br>
            @endif
            {{-- <o>Ciudad</o> <br>
            <o>Medellín</o> <br> --}}
            <br>
            <br>
            <a href="{{ $o->location }}" style="width: 300px;
            padding: 10px;
            background:#E61879;
            text-align: center;
            color: white;
            border-radius: 8px;
            margin: auto;
            cursor: pointer;
            bottom: 15;
            left: 0;
            right: 0;
            text-decoration: none;
            position: absolute;">
            Ver ubicación en el mapa
            </a>
        </div>
    </div>
    <div style="width: 50%; min-width: 390px; margin: auto; height: 87px; background:#E61879; "></div>
</div>