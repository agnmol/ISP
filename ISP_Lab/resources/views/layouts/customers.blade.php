@extends('mainLayouts.home')


@section('right')
    <div id="contentRight">
        <table id="customers">

            <tr>
                <th>Vardas Pavardė</th>
                <th>Statusas</th>
            </tr>
            @foreach($customers as $customer)
            <tr>
                <td>{{$customer->person->vardas}} {{$customer->person->pavarde}}</td>
                <td class = "select" onchange="javascript:if (confirm('Ar tikrai norite pakeisti kliento statusą?')) window.location='{{route('editCustomer', $customer->id)}}'">
                    <select>
                        <option value="0" {{($customer->nepageidaujamas == 0) ? "selected": ""}}>Pageidaujamas</option>
                        <option value="1" {{($customer->nepageidaujamas == 1) ? "selected": ""}}>Nepageidaujamas</option>

                    </select>
                </td>
            </tr>
                @endforeach
        </table>
    </div>
@endsection

