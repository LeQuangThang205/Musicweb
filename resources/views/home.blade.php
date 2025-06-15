@extends('user.layout')
@section('contend')
<section class="section">
        <h2>🎶 Gợi Ý Bài Hát</h2>
        <div class="song-list">
          <div class="song-item">
            <img src="https://via.placeholder.com/60" alt="">
            <div>
              <strong>Anh Thanh Niên</strong><br>
              <span>HuyR</span>
            </div>
          </div>
          <div class="song-item">
            <img src="https://via.placeholder.com/60" alt="">
            <div>
              <strong>Hạ Còn Vương Nắng</strong><br>
              <span>DatKaa, Kido</span>
            </div>
          </div>
          <!-- Thêm bài khác nếu cần -->
        </div>
      </section>

      <section class="section">
        <h2>Mới Phát Hành</h2>
        @foreach($songs as $song)
<div class="song-list">
  <div class="song-item">
    <img src="https://via.placeholder.com/60" alt="">
    <div>
      <strong>{{ $song->title }}</strong><br>
      <span>{{ $song->artist->name }}</span>
    </div>
    <form action="{{ route('songs.favorite', $song->id) }}" method="POST" style="margin-left:auto;">
      @csrf
      <button type="submit" class="favorite-button {{ in_array($song->id, $favoriteSongIds ?? []) ? 'active' : '' }}">❤️</button>
    </form>
  </div>
</div>
@endforeach

      </section>
@endsection