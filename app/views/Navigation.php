<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Portal</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 25px;
        background:
            radial-gradient(circle at top left, rgba(255,255,255,.18), transparent 35%),
            linear-gradient(135deg, #4f46e5, #2563eb, #06b6d4);
    }

    .home-card {
        width: 100%;
        max-width: 480px;
        background: rgba(255, 255, 255, 0.96);
        border-radius: 24px;
        padding: 45px 38px;
        text-align: center;
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.25);
        backdrop-filter: blur(10px);
        animation: fadeUp 0.6s ease;
    }

    .icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 22px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #4f46e5, #2563eb);
        color: white;
        font-size: 36px;
        box-shadow: 0 10px 25px rgba(37, 99, 235, 0.3);
    }

    .home-card h1 {
        color: #1e293b;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 12px;
    }

    .home-card .subtitle {
        color: #64748b;
        font-size: 15px;
        line-height: 1.7;
        margin-bottom: 30px;
    }

    .navigation {
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .nav-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        padding: 15px 20px;
        border-radius: 12px;
        text-decoration: none;
        font-size: 15px;
        font-weight: 600;
        transition: all 0.25s ease;
    }

    .nav-btn.primary {
        background: linear-gradient(135deg, #4f46e5, #2563eb);
        color: white;
        box-shadow: 0 8px 20px rgba(37, 99, 235, 0.25);
    }

    .nav-btn.secondary {
        background: #f1f5f9;
        color: #334155;
        border: 1px solid #e2e8f0;
    }

    .nav-btn:hover {
        transform: translateY(-3px);
    }

    .nav-btn.primary:hover {
        box-shadow: 0 12px 25px rgba(37, 99, 235, 0.35);
    }

    .nav-btn.secondary:hover {
        background: #e2e8f0;
    }

    .footer {
        margin-top: 30px;
        padding-top: 20px;
        border-top: 1px solid #e2e8f0;
        color: #94a3b8;
        font-size: 12px;
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 500px) {
        .home-card {
            padding: 35px 25px;
        }

        .home-card h1 {
            font-size: 24px;
        }

        .icon {
            width: 70px;
            height: 70px;
            font-size: 30px;
        }
    }
</style>
</head>

<body>

<div class="home-card">

    <div class="icon">
        🎓
    </div>

    <h1>Welcome to the Student Portal</h1>

    <p class="subtitle">
        Manage your student information and view your profile
        through the navigation options below.
    </p>

    <div class="navigation">

        <a href="<?= site_url('student') ?>" class="nav-btn primary">
            🏠
            <span>Student Home</span>
        </a>

        <a href="<?= site_url('student/profile') ?>" class="nav-btn secondary">
            👤
            <span>Student Profile</span>
        </a>

    </div>

    <div class="footer">
        Student Portal &copy; <?= date('Y') ?>
    </div>

</div>

</body>
</html>