@extends('user.layout')

@section('favorites')
<section class="section">
  <h2>❤️ Danh sách bài hát yêu thích</h2>
  <div class="song-list">
    @forelse($songs as $song)
    <div class="song-item">
      <img src="https://via.placeholder.com/60" alt="">
      <div class="song-info">
        <strong>{{ $song->title }}</strong><br>
        <span>{{ $song->artist->name }}</span>
      </div>
      <form action="{{ route('songs.favorite', $song->id) }}" method="POST" style="margin-left:auto;">
        @csrf
        <button type="submit" class="favorite-button active">❤️</button>
      </form>
    </div>
    @empty
    <p>Bạn chưa có bài hát yêu thích nào.</p>
    @endforelse
  </div>
</section>
@endsection
