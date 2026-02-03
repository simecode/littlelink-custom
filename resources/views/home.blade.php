@extends('layouts.main')

@section('content')
<style>
  /* 强制背景样式 */
  body {
    background: linear-gradient(135deg, #f5f7fa 0%, #e4e9f2 100%) !important;
    font-family: 'Inter', -apple-system, sans-serif !important;
    margin: 0;
    display: flex;
    justify-content: center;
  }

  /* 核心卡片样式 */
  .container {
    background: rgba(255, 255, 255, 0.7) !important;
    backdrop-filter: blur(20px) !important;
    -webkit-backdrop-filter: blur(20px) !important;
    border-radius: 30px !important;
    border: 1px solid rgba(255, 255, 255, 0.4) !important;
    box-shadow: 0 20px 40px rgba(0,0,0,0.05) !important;
    padding: 40px 24px !important;
    max-width: 420px !important;
    margin: 80px auto !important;
    text-align: center !important;
  }

  /* 强制覆盖按钮样式 */
  .button, .btn, .button-entrance a {
    background: #ffffff !important;
    color: #1a1a1a !important;
    border: 1px solid rgba(0, 0, 0, 0.05) !important;
    border-radius: 16px !important;
    padding: 16px !important;
    margin-bottom: 12px !important;
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
    box-shadow: 0 8px 15px rgba(0,0,0,0.06) !important;
  }

  /* 隐藏不需要的默认元素 */
  .sign, .logo-container, img[alt="avatar"], .rotate, .logo-centered { 
    display: none !important; 
  }
</style>

<div class="container">
    <div style="margin-bottom: 30px;">
        <h1 style="font-weight: 800; font-size: 2.2rem; letter-spacing: -1px; color: #1a1a1a; margin: 0;">
            SzeYeungYim
        </h1>
        <p style="color: #86868b; font-size: 1.1rem; margin-top: 10px;">
            未来已来
        </p>
    </div>

    <div class="button-list">
        @if(config('advanced-config.use_custom_buttons') == 'true')
            @foreach(config('advanced-config.buttons') as $button)
                <div class="button-entrance">
                    <a class="button" href="{{ $button['link'] }}" target="_blank">
                        {{ $button['title'] }}
                    </a>
                </div>
            @endforeach
        @else
            <a class="button" href="https://your-ai-link.com">🚀 我的 AI 工具</a>
            <a class="button" href="https://github.com">💻 GitHub</a>
        @endif
    </div>
</div>
@endsection
