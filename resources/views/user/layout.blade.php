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
        <li>🎧 Thư Viện</li>
      </ul>
      <div class="login-box">
        <p>Đăng nhập để khám phá playlist dành riêng cho bạn</p>
        <button>Đăng Nhập</button>
      </div>
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

    </main>
  </div>
</body>
</html>