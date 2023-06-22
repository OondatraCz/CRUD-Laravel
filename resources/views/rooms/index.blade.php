<x-app-layout>
    @if(session('success'))
        <div class="">{{session('success')}}</div>
    @endif
        <style>
            .button {
                display: inline-block;
                background-color: #004ab3;
                color: #fff;
                margin-top: 20px;
                margin-bottom: 40px;
                margin-left: 20px;
                padding: 10px 20px;
                border-radius: 5px;
                text-decoration: none;
            }
            table {
                border-collapse: collapse;
                width: 100%;
                color: #333;
                font-family: Arial, sans-serif;
                font-size: 14px;
                text-align: left;
                border-radius: 0px;
                overflow: hidden;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                margin: auto;
                margin-top: 0px;
                margin-bottom: 0px;
            }
            table th {
                background-color: #004ab3;
                color: #fff;
                font-weight: bold;
                padding: 10px;
                text-transform: uppercase;
                letter-spacing: 1px;
                border-top: 1px solid #fff;
                border-bottom: 1px solid #ccc;
            }
            table tr:nth-child(even) td {
                background-color: #f2f2f2;
            }

            table tr:hover td {
                background-color: #bed2ed;
            }
            table td {
                background-color: #fff;
                padding: 10px;
                border-bottom: 1px solid #ccc;
                font-weight: bold;
                padding-left: 30px;
            }
        </style>
    <table>
        <thead>
            <tr>
                <th>Název
                    <a href="{{route('rooms.index', ['sort' => 'name', 'sortDir' => 'asc'])}}">^</a>
                    <a href="{{route('rooms.index', ['sort' => 'name', 'sortDir' => 'desc'])}}">v</a>
                </th>
                <th>
                    Číslo
                    <a href="{{route('rooms.index', ['sort' => 'no', 'sortDir' => 'asc'])}}">^</a>
                    <a href="{{route('rooms.index', ['sort' => 'no', 'sortDir' => 'desc'])}}">v</a>
                </th>
                <th>
                    Tel.
                    <a href="{{route('rooms.index', ['sort' => 'phone', 'sortDir' => 'asc'])}}">^</a>
                    <a href="{{route('rooms.index', ['sort' => 'phone', 'sortDir' => 'desc'])}}">v</a>
                </th>
                <th>
                    Počet židlí
                    <a href="{{route('rooms.index', ['sort' => 'chairs', 'sortDir' => 'asc'])}}">^</a>
                    <a href="{{route('rooms.index', ['sort' => 'chairs', 'sortDir' => 'desc'])}}">v</a>
                </th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
        @foreach($rooms as $room)
            <tr>
                <td><a href="{{route('rooms.show', $room)}}">{{$room->name}}</a></td>
                <td>{{$room->no}}</td>
                <td>{{$room->phone}}</td>
                <td>{{$room->chairs}}</td>
                <td>
                    <a href="{{route('rooms.edit', $room)}}">Edit</a>
                    <form method="post" action="{{route('rooms.destroy', $room)}}" onsubmit="return confirm('Opravdu chcete smazat?')">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
        <a class="button" href="{{route('rooms.create')}}">Založit novou místnost</a>
</x-app-layout>
