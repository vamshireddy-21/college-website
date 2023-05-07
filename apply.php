<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply UG</title>
    <link rel="stylesheet" href="apply.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href=" https://fontawesome.com/icons/link?f=classic&s=solid">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@200&family=Roboto+Slab:wght@200&family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body> 
        <img src="63f8b2bb0674f068471592_admissionwebpage_CMRIT.jpg" alt="" width="100%" height="700vh">
        <section>
            <form class="form" action="backend.php" method="POST">
                <h3>ADMISSION OPEN 2023</h3>
                <div>
                <p><i class="fa fa-user" aria-hidden="true" id="togglePassword"></i>
                <input name="name" type="text" placeholder="Enter Applicant Name " class="input"></p>
            </div>
            <div>
                <p><i class="fa fa-envelope" aria-hidden="true" id="togglePassword"></i>
                <input name="email" type="text" placeholder="Enter Applicant Email Address " class="input"></p>
            </div>
            <div>
                <p><i class="fa fa-phone" aria-hidden="true" id="togglePassword"></i>
                <input name="phone" type="text" placeholder="Enter Applicant Mobile Number " class="input"></p>
            </div>
            <div>
                <p><i class="fa fa-map-marker" aria-hidden="true" id="togglePassword"></i>
                <input name="state" type="text" placeholder="Enter State " class="input"></p>
            </div>
            <div>
                <p><i class="fa fa-map-marker" aria-hidden="true" id="togglePassword"></i>
                <input name="country" type="text" placeholder="Enter Country " class="input"></p>
            </div>
            <div>
                <p><i class="fa fa-book" aria-hidden="true" id="togglePassword"></i>
                <input name="program" type="text" placeholder="Select Program " class="input"></p>
            </div>
            <div >
                <p><i class="fa fa-book" aria-hidden="true" id="togglePassword"></i>
                <input name="course" type="text" placeholder="Select Course" class="input"></p>
            </div>
            <div class="check">
           <p> <input type="checkbox" >
            <h6>I authorize CMR Institute of Technology and its representative to contact me with updates and notifications via email, sms, whatsapp and call. This will override the registry on DND / NDNC. *</h6></p>
            </div>
            <button type="submit" name="admision=form" class="butt">
                Register
            </button>
            </form>
        </section>
        <section class="apply">
            <h2>Programs Offered</h2>
            <details>
                <summary>PG Courses</summary>
                <ul class="content2">
                    <li>MBA - Master of Business Administration</li>
                    <li>MCA - Master of Computer Applications</li>
                </ul>
            </details>
            <details>
                <summary>UG Programs</summary>
                <ul class="content1">
                    <li>B.E. Computer Science and Engineering</li>
                    <li>B.E. Computer Science and Engineering (AI&ML)</li>
                    <li>B.E. Computer Science and Engineering (DS)</li>
                    <li>B.E. Artificial Intelligence and Machine Learning</li>
                    <li>B.E. Artificial Intelligence and Data Science</li>
                    <li>B.E. Information Science and Engineering</li>
                    <li>B.E. Electronics and Communication Engineering</li>
                </ul>
            </details>
        </section>
        <button class="myBtn" onclick="scrollToTop()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
          </svg>
        </button>
    <script src="apply.js"></script>
</body>
</html>