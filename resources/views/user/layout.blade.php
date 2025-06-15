<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Giao Diện Zing MP3</title>
  <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <div class="logo">🎵 Zing <span>mp3</span></div>
      <ul class="menu">
        <li><a href="{{ route('home') }}">🎧 Trang Chủ</a></li>

        <li><a href="{{ route('songs.favorite.list') }}">❤️ Yêu thích</a></li>
      </ul>
    </aside>

    <main class="main">
      <div class="top-bar">
        <input type="text" placeholder="Tìm kiếm bài hát, nghệ sĩ, lời bài hát...">
        <button class="upgrade">Nâng cấp tài khoản</button>
        <div class="avatar">🙂</div>
      </div>
      <div>
        @yield('contend')
      </div>
      <div>
        @yield('content')
      </div>

    </main>
  </div>
</body>
</html>