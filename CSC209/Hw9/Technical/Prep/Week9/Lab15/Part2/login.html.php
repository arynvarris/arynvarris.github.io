
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="UTF-8">

    <style>
        /* W3Schools: How TO - CSS/JS Modal */
        /* https://www.w3schools.com/howto/howto_css_modals.asp */

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: 15% auto;
            padding: 0;
            border: 1px solid #888;
            width: 80%;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),
                        0 6px 20px 0 rgba(0,0,0,0.19);
            animation-name: animatetop;
            animation-duration: 0.4s;
        }

        .modal-header {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        .modal-body {
            padding: 2px 16px;
        }

        .modal-footer {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        @keyframes animatetop {
            from {top: -300px; opacity: 0}
            to {top: 0; opacity: 1}
        }
    </style>
</head>

<body>

<h1>Login Page</h1>

<!-- W3Schools: Modal Box - Opens the popup -->
<button id="myBtn">Login</button>

<div id="myModal" class="modal">

    <div class="modal-content">

        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Login</h2>
        </div>

        <div class="modal-body">

            <!-- W3Schools: PHP Form Handling -->
            <form action="login.php" method="post">

                <p>
                    Username:
                    <input type="text" name="username">
                </p>

                <p>
                    Password:
                    <input type="password" name="password">
                </p>

                <p>
                    <input type="submit" value="Login">
                </p>

            </form>

        </div>

        <div class="modal-footer">
            <h3>Login Form</h3>
        </div>

    </div>

</div>

<script>
    // W3Schools: How TO - CSS/JS Modal

    var modal = document.getElementById("myModal");

    var btn = document.getElementById("myBtn");

    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>
