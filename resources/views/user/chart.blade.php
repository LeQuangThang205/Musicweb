@extends('user.layout')

@section('chart')
<div class="chart-container">
    <h2>🔥 Bảng Xếp Hạng Bài Hát</h2>
    <ol class="song-chart">
        @foreach($songs as $index => $song)
        <li class="song-item">
            <span class="rank">{{ $index + 1 }}</span>
            <div class="song-info">
                <div class="title">{{ $song->title }}</div>
                <div class="artist">Ca sĩ: {{ $song->artist->name ?? 'Không rõ' }}</div>
            </div>
            <div class="stats">{{ number_format($song->listens) }} lượt nghe</div>
        </li>
        @endforeach
    </ol>
</div>
@endsection
