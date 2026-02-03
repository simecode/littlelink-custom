<!DOCTYPE html>
@include('layouts.lang')
<head>
  <meta charset="utf-8">
<style>
  /* 全局背景：柔和渐变 */
  body {
    background: linear-gradient(135deg, #f5f7fa 0%, #e4e9f2 100%) !important;
    font-family: 'Inter', -apple-system, sans-serif !important;
  }

  /* 核心卡片：磨砂玻璃效果 */
  .container {
    background: rgba(255, 255, 255, 0.7) !important;
    backdrop-filter: blur(20px) !important;
    -webkit-backdrop-filter: blur(20px) !important;
    border-radius: 30px !important;
    border: 1px solid rgba(255, 255, 255, 0.4) !important;
    box-shadow: 0 20px 40px rgba(0,0,0,0.05) !important;
    padding: 40px 20px !important;
    margin-top: 60px !important;
    max-width: 500px !important;
  }

  /* 强制覆盖按钮样式 - Zara 风格 */
  .column .btn, .column .button, .button-entrance a {
    background: rgba(255, 255, 255, 0.8) !important;
    backdrop-filter: blur(5px) !important;
    color: #1a1a1a !important;
    border: 1px solid rgba(0, 0, 0, 0.05) !important;
    border-radius: 15px !important;
    padding: 18px !important;
    margin-bottom: 12px !important;
    font-weight: 500 !important;
    box-shadow: 0 4px 10px rgba(0,0,0,0.03) !important;
    transition: all 0.3s ease !important;
    display: flex !important;
    align-items: center;
    justify-content: center;
    text-decoration: none !important;
    width: 100% !important;
  }

  .column .btn:hover, .column .button:hover, .button-entrance a:hover {
    background: #ffffff !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 6px 15px rgba(0,0,0,0.06) !important;
  }

  /* 隐藏默认图标样式 */
  .icon { margin-right: 10px; width: 20px; }
</style>

@php $GLOBALS['themeName'] = config('advanced-config.home_theme'); @endphp

@include('layouts.analytics')

@if(env('CUSTOM_META_TAGS') == 'true' and config('advanced-config.title') != '')
  <title>{{ config('advanced-config.title') }}</title>
@else
  <title>SzeYeungYim | 未来已来</title>
@endif

<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="{{ asset('studio/external-dependencies/fontawesome.js') }}" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('littlelink/css/normalize.css') }}">
<link rel="stylesheet" href="{{ asset('littlelink/css/animate.css') }}">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="column text-center" style="margin-top: 5%">
        
        <div style="padding: 40px 0 20px 0;">
            <h1 class="fadein" style="font-weight: 800; font-size: 2.5rem; letter-spacing: -1px; color: #1a1a1a; margin-bottom: 10px;">
                SzeYeungYim
            </h1>
            <p class="fadein" style="color: #86868b; font-size: 1.1rem; font-weight: 400; letter-spacing: 0.5px;">
                未来已来
            </p>
        </div>

        <div class="button-list">
        <?php $initial=1; ?>
        @if(config('advanced-config.use_custom_buttons') == 'true')
            <?php $array = config('advanced-config.buttons'); ?>
            @foreach($array as $button)
                <div style="--delay: {{ $initial++ }}s" class="button-entrance">
                    <a class="btn" href="{{ $button['link'] }}" target="_blank">
                        {{ $button['title'] }}
                    </a>
                </div>
            @endforeach
        @else
            <div class="button-entrance"><a class="btn" href="#">示例按钮 1</a></div>
            <div class="button-entrance"><a class="btn" href="#">示例按钮 2</a></div>
        @endif
        </div>

        @include('layouts.footer')
      </div>
    </div>
  </div>
</body>
</html>
