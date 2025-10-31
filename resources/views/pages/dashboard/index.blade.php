@section('title', 'Dashboard')
@extends('layouts.dashboard')

@section('content')
<div>
    <h1>
        @php
            date_default_timezone_set('Asia/Jakarta'); // pastikan zona waktu benar
            $hour = date('H');
            if ($hour >= 5 && $hour < 12) {
                $greeting = 'Selamat Pagi';
            } elseif ($hour >= 12 && $hour < 15) {
                $greeting = 'Selamat Siang';
            } elseif ($hour >= 15 && $hour < 18) {
                $greeting = 'Selamat Sore';
            } else {
                $greeting = 'Selamat Malam';
            }

            $tanggal = \Carbon\Carbon::now()->translatedFormat('l, d F Y');
        @endphp

        {{ $greeting }}, {{ $user->name }} 👋
    </h1>

</div>
@endsection
