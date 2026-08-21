<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Student Profile</title>

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;

    background:
        radial-gradient(
            circle at top left,
            rgba(255,255,255,.18),
            transparent 30%
        ),
        linear-gradient(
            135deg,
            #6a11cb,
            #2575fc
        );

    min-height: 100vh;

    padding: 40px 20px;

    color: #333;
}


/* MAIN CONTAINER */

.container {
    width: 100%;
    max-width: 850px;

    margin: auto;
}


/* NAVIGATION */

.navigation {

    display: flex;

    justify-content: space-between;

    align-items: center;

    background: rgba(255,255,255,.95);

    padding: 15px 22px;

    border-radius: 14px;

    margin-bottom: 20px;

    box-shadow:
        0 8px 25px rgba(0,0,0,.15);
}


.brand {

    font-size: 18px;

    font-weight: 700;

    color: #2575fc;
}


.nav-links {

    display: flex;

    gap: 10px;
}


.nav-links a {

    text-decoration: none;

    color: #555;

    font-size: 14px;

    font-weight: 600;

    padding: 9px 14px;

    border-radius: 8px;

    transition: .2s ease;
}


.nav-links a:hover {

    background: #eef3ff;

    color: #2575fc;
}


.nav-links .active {

    background: #eef3ff;

    color: #2575fc;
}


/* PROFILE CARD */

.card {

    background: #fff;

    width: 100%;

    border-radius: 20px;

    box-shadow:
        0 20px 50px rgba(0,0,0,.22);

    overflow: hidden;
}


/* HEADER */

.card-header {

    background:
        linear-gradient(
            135deg,
            #2575fc,
            #6a11cb
        );

    color: #fff;

    text-align: center;

    padding: 35px 20px 75px;

    position: relative;
}


.card-header h1 {

    font-size: 26px;

    font-weight: 700;

    margin-bottom: 7px;
}


.card-header p {

    font-size: 14px;

    opacity: .85;
}


/* AVATAR */

.avatar {

    width: 100px;

    height: 100px;

    border-radius: 50%;

    background: #fff;

    color: #2575fc;

    font-size: 32px;

    font-weight: 700;

    display: flex;

    align-items: center;

    justify-content: center;

    position: absolute;

    bottom: -50px;

    left: 50%;

    transform: translateX(-50%);

    border: 5px solid #fff;

    box-shadow:
        0 8px 20px rgba(0,0,0,.2);
}


/* BODY */

.card-body {

    padding: 75px 35px 35px;
}


/* NAME */

.student-name {

    text-align: center;

    margin-bottom: 30px;
}


.student-name h2 {

    font-size: 22px;

    color: #222;

    margin-bottom: 6px;
}


.student-name span {

    color: #777;

    font-size: 14px;
}


/* SECTION */

.section {

    margin-top: 30px;
}


.section-title {

    display: flex;

    align-items: center;

    gap: 10px;

    color: #2575fc;

    font-size: 17px;

    font-weight: 700;

    margin-bottom: 15px;

    padding-bottom: 10px;

    border-bottom:
        2px solid #eef3ff;
}


/* INFORMATION GRID */

.info-grid {

    display: grid;

    grid-template-columns:
        repeat(2, 1fr);

    gap: 14px;
}


.info-box {

    background: #f8faff;

    border:
        1px solid #edf1f7;

    border-radius: 12px;

    padding: 15px;

    transition: .2s ease;
}


.info-box:hover {

    transform: translateY(-2px);

    box-shadow:
        0 6px 15px
        rgba(37,117,252,.08);
}


.info-label {

    display: block;

    font-size: 11px;

    color: #888;

    text-transform: uppercase;

    letter-spacing: .7px;

    margin-bottom: 6px;
}


.info-value {

    display: block;

    font-size: 14px;

    color: #333;

    font-weight: 600;

    word-break: break-word;
}


/* YEAR BADGE */

.badge {

    display: inline-block;

    background: #eef3ff;

    color: #2575fc;

    padding: 5px 12px;

    border-radius: 20px;

    font-size: 12px;

    font-weight: 700;
}


/* FOOTER */

.footer-note {

    text-align: center;

    font-size: 12px;

    color: #aaa;

    padding: 18px;

    background: #fafafa;

    border-top:
        1px solid #eee;
}


/* RESPONSIVE */

@media (max-width: 650px) {

    body {
        padding: 20px 12px;
    }

    .navigation {

        flex-direction: column;

        gap: 12px;
    }

    .nav-links {

        width: 100%;

        justify-content: center;
    }

    .info-grid {

        grid-template-columns: 1fr;
    }

    .card-body {

        padding:
            70px 20px 25px;
    }

    .card-header h1 {

        font-size: 22px;
    }

}

</style>

</head>


<body>

<div class="container">


    <!-- NAVIGATION -->

    <nav class="navigation">

        <div class="brand">
            🎓 Student Portal
        </div>

        <div class="nav-links">

            <a href="<?= site_url('student') ?>">
                Home
            </a>

            <a
                href="<?= site_url('student/profile') ?>"
                class="active"
            >
                Profile
            </a>

        </div>

    </nav>


    <!-- PROFILE CARD -->

    <div class="card">


        <!-- HEADER -->

        <div class="card-header">

            <h1>
                Student Information
            </h1>

            <p>
                Student Profile
            </p>

            <div class="avatar">
                AM
            </div>

        </div>


        <!-- BODY -->

        <div class="card-body">


            <!-- NAME -->

            <div class="student-name">

                <h2>
                    <?= $name ?>
                </h2>

                <span>
                    <?= $course ?>
                </span>

            </div>


            <!-- BASIC INFORMATION -->

            <div class="section">

                <div class="section-title">
                    📋 Basic Information
                </div>


                <div class="info-grid">


                    <!-- STUDENT ID -->

                    <div class="info-box">

                        <span class="info-label">
                            Student ID
                        </span>

                        <span class="info-value">
                            <?= $student_id ?>
                        </span>

                    </div>


                    <!-- YEAR -->

                    <div class="info-box">

                        <span class="info-label">
                            Year Level
                        </span>

                        <span class="info-value">

                            <span class="badge">
                                <?= $year ?>
                            </span>

                        </span>

                    </div>


                    <!-- COURSE -->

                    <div class="info-box">

                        <span class="info-label">
                            Course
                        </span>

                        <span class="info-value">
                            <?= $course ?>
                        </span>

                    </div>


                    <!-- SECTION -->

                    <div class="info-box">

                        <span class="info-label">
                            Section
                        </span>

                        <span class="info-value">
                            <?= $section ?>
                        </span>

                    </div>


                </div>

            </div>


        </div>


        <!-- FOOTER -->

        <div class="footer-note">

            Official Student Record &middot; 2026

        </div>


    </div>

</div>

</body>

</html>