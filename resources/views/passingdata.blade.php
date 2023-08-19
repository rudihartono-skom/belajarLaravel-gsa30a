@extends('mainapps')
@section('title') Passing Data @endsection
@section('content')
    {{-- <p>Halo Saya Adalah {{ $nama }}</p> --}}
    <p>Halo Saya Adalah {{ $nama.$sekolah }}</p>
    <p><b>saya sering pergi ke {{ $sekolah }} </b></p>
    <p>
        @if ($a < $b)
            Nilai A Lebih Kecil Dari nilai B
        @else
            Nilai A Lebih Besar Dari Nilai B
        @endif
    </p>
    <p>
        @if ($usia > 50)
            Orang Tua
        @elseif ($usia > 30)
            Paruh Baya
        @elseif ($usia > 17)
            Remaja
        @else
            Anak-Anak
        @endif
    </p>
    <p>
        @for ($i = 5; $i <= 10; $i++)
            {{ $i }}
        @endfor
    </p>

    <p>
        @while ($a <= 10)
            {{ $a ++}}
        @endwhile
    </p>
    <p>
        @foreach ($namasiswa as $item)
            {{ $loop->iteration }}. {{ $item }} <br>
        @endforeach
    </p>
@endsection
