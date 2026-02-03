<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SzeYeungYim | 未来已来</title>
    <style>
        /* 基础样式复位 */
        * { box-sizing: border-box; }
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e9f2 100%);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }

        /* 磨砂玻璃卡片 */
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
            padding: 50px 30px;
            width: 90%;
            max-width: 420px;
            margin: 80px auto;
            text-align: center;
            animation: fadeIn 1s ease-out;
        }

        /* 名字样式 */
        h1 {
            font-weight: 800;
            font-size: 2.4rem;
            letter-spacing: -1px;
            color: #1a1a1a;
            margin: 0 0 10px 0;
        }

        /* 简介样式 */
        .bio {
            color: #86868b;
            font-size: 1.1rem;
            margin-bottom: 40px;
            font-weight: 400;
        }

        /* 按钮样式 */
        .link-btn {
            background: #ffffff;
            color: #1a1a1a;
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 18px;
            padding: 18px;
            margin-bottom: 15px;
            font-weight: 600;
            text-decoration: none;
            display: block;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 6px rgba(0,0,0,0.02);
        }

        .link-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
            background: #ffffff;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <div class="glass-card">
        <h1>SzeYeungYim</h1>
        
        <div class="bio">未来已来</div>

        <div class="button-list">
            <a href="https://your-ai-link1.com" class="link-btn">🤖 我的 AI 助手</a>
            <a href="https://your-ai-link2.com" class="link-btn">🎨 创意工作室</a>
            <a href="https://github.com/szes-projects-47b56760" class="link-btn">💻 GitHub 项目</a>
        </div>
    </div>

</body>
</html>
