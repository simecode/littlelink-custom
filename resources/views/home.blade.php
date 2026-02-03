<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SzeYeungYim | 未来已来</title>
    <style>
        /* 极致简约背景 */
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e9f2 100%);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Zara 风格磨砂卡片 */
        .card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 32px;
            border: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
            padding: 50px 30px;
            width: 90%;
            max-width: 400px;
            text-align: center;
            animation: fadeIn 0.8s ease-out;
        }

        h1 {
            font-weight: 800;
            font-size: 2.2rem;
            letter-spacing: -1px;
            color: #1a1a1a;
            margin: 0 0 8px 0;
        }

        .bio {
            color: #86868b;
            font-size: 1.1rem;
            margin-bottom: 35px;
        }

        /* 按钮样式 */
        .btn {
            background: #ffffff;
            color: #1a1a1a;
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 18px;
            padding: 18px;
            margin-bottom: 12px;
            font-weight: 600;
            text-decoration: none;
            display: block;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.02);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.06);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>SzeYeungYim</h1>
        <div class="bio">未来已来</div>

        <div class="links">
            <a href="https://your-ai-link1.com" class="btn">🤖 我的 AI 助手</a>
            <a href="https://your-ai-link2.com" class="btn">🎨 创意工作室</a>
            <a href="https://github.com/szes-projects-47b56760" class="btn">💻 GitHub 主页</a>
        </div>
    </div>

</body>
</html>
