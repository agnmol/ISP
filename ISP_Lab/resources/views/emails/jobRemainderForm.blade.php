@component('mail::message')
    Jūs turite atlikti darbą
    Darbo pavadinimas       {{$jobData->pavadinimas}}
    Darbo aprašymas       {{$jobData->aprasymas}}
    Darbo atlikimo data       {{$jobData->data}}
@endcomponent
