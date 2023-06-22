<x-app-layout>
    <style>
        .centered {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .items {
            background-color: #fff;
            border: #333333 1px solid;
            border-radius: 15px;
            padding: 30px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        .space{
            margin-bottom: 5px;
        }
    </style>
    <div class="centered">
    <div class="items">
        <h2 style="font-size: 20px; margin: 0px 10px 10px 10px"><strong>Detail místnosti {{$room->no}}</strong></h2>
        <div style="margin: 0px 10px 10px 10px">Název: {{$room->name}}</div>
        <div style="margin: 0px 10px 10px 10px">Číslo: {{$room->no}}</div>
        <div style="margin: 0px 10px 10px 10px">Telefon: {{$room->phone ?: '-'}}</div>
        <div style="margin: 0px 10px 10px 10px">Počet židlí: {{$room->chairs ?: '-'}}</div>
        <a href="{{route('rooms.index')}}"><strong>Zpět</strong></a>
    </div>
    </div>

</x-app-layout>
