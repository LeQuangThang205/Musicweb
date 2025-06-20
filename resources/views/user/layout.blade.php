<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Giao Diện Zing MP3</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('css/favorites.css') }}">
  <link rel="stylesheet" href="{{ asset('css/artists.css') }}">
  <link rel="stylesheet" href="{{ asset('css/chart.css') }}">
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <div class="logo">🎵 Zing <span>mp3</span></div>

      <ul class="menu">
        <li><a href="{{ route('home') }}">🎧 Trang Chủ</a></li>
        <li><a href="{{ route('songs.favorite.list') }}">❤️ Yêu thích</a></li>
        <li><a href="{{ route('user.artists') }}">🎤 Ca sĩ</a></li>
        <li><a href="{{ route('user.chart') }}">📈 Bảng xếp hạng</a></li>
      </ul>

      <div class="logout-wrapper">
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="logout-btn">🚪 Đăng xuất</button>
        </form>
      </div>
    </aside>

    <main class="main">
      <div class="top-bar">
        <input type="text" placeholder="Tìm kiếm bài hát, nghệ sĩ, lời bài hát...">
        <button class="upgrade">Nâng cấp tài khoản</button>
        <div class="avatar">🙂</div>
      </div>

      <div>
        @yield('home')
        @yield('favorites')
        @yield('artists')
        @yield('chart')
      </div>
    </main>
  </div>
</body>
</html>
