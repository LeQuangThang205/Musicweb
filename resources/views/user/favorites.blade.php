@extends('user.layout')

@section('content')
  <h2>Danh sách bài hát yêu thích</h2>
  @forelse($songs as $song)
    <div class="song-item">
      <img src="https://via.placeholder.com/60" alt="">
      <div>
        <strong>{{ $song->title }}</strong><br>
        <span>{{ $song->artist->name }}</span>
      </div>
    </div>
  @empty
    <p>Bạn chưa có bài hát yêu thích nào.</p>
  @endforelse
@endsection

