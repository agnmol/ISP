@component('mail::message')
    @if($edit)
        ## Jūsų rezervacija buvo atnaujinta
    @else
        ## Jūsų rezervacija buvo patvirtinta
    @endif

    Kambario nr.:       {{$reservationData->room->id}}
    Kambario tipas:     {{$reservationData->room->size->name}}
    Klientas:           {{$reservationData->customer->person->vardas}} {{$reservationData->customer->person->pavarde}}
    Data nuo:           {{$reservationData->data_nuo}}
    Data iki:           {{$reservationData->data_iki}}
    Kaina:              {{$reservationData->room->kaina}}
@endcomponent
