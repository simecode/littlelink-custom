@extends($GLOBALS['themeName'] . '.layouts.main')

@section('content')
<style>
  /* 全局背景修正 */
  html, body {
    background: linear-gradient(135deg, #f5f7fa 0%, #e4e9f2 100%) !important;
    font-family: 'Inter', -apple-system, sans-serif !important;
    height: 100%;
    margin: 0;
  }

  /* 磨砂玻璃容器 */
  .container {
    background: rgba(255, 255, 255, 0.7) !important;
    backdrop-filter: blur(20px) !important;
    -webkit-backdrop-filter: blur(20px) !important;
    border-radius: 30px !important;
    border: 1px solid rgba(255, 255, 255, 0.4) !important;
    box-shadow: 0 20px 40px rgba(0,0,0,0.05) !important;
    padding: 40px 24px !important;
    max-width: 480px !important;
    margin: 60px auto !important;
    float: none !important;
  }

  /* 按钮 Zara 化 */
  .button, .btn, .button-entrance a {
    background: #ffffff !important;
    color: #1a1a1a !important;
    border: 1px solid rgba(0, 0, 0, 0.05) !important;
    border-radius: 16px !important;
    padding: 18px !important;
    margin-bottom: 14px !important;
    font-weight: 500 !important;
    transition: all 0.3s ease !important;
    display: flex !important;
    align-items: center;
    justify-content: center;
    text-decoration: none !important;
    width: 100% !important;
    box-sizing: border-box !important;
  }

  .button:hover {
    transform: translateY(-2px) !important;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08) !important;
  }

  /* 隐藏多余元素 */
  .sign, .logo-container, img[alt="avatar"] { display: none !important; }
</style>

<div class="container text-center">
    <div style="padding: 20px 0;">
        <h1 style="font-weight: 800; font-size: 2.2rem; letter-spacing: -1px; color: #1a1a1a; margin-bottom: 8px;">
            SzeYeungYim
        </h1>
        <p style="color: #86868b; font-size: 1.1rem; font-weight: 400;">
            未来已来
        </p>
    </div>

    <div class="button-list">
        @foreach(config('advanced-config.buttons') as $button)
            <div class="button-entrance">
                <a class="button" href="{{ $button['link'] }}" target="_blank">
                    {{ $button['title'] }}
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
