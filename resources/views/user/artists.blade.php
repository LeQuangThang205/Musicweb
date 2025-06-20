@extends('user.layout')

@section('artists')
<div class="artists-section">
    <h1 class="section-title">Danh sách Ca sĩ</h1>
    <div class="artist-grid">
        @foreach ($artists as $artist)
            <div class="artist-card">
                @if ($artist->avatar)
                    <img src="{{ asset('storage/' . $artist->avatar) }}" class="artist-img" alt="{{ $artist->name }}">
                @else
                    <img src="{{ asset('images/default-artist.png') }}" class="artist-img" alt="{{ $artist->name }}">
                @endif
                <div class="artist-name">{{ $artist->name }}</div>
            </div>
        @endforeach
    </div>
</div>
@endsection
