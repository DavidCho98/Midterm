<html>
<head>

</head>
<body>
<div>


    <form action="compareAssessment" method = "post">
        @csrf
        <div class="demo-table">
            <div class = "form-head">Midterm</div>

            <div class = "form-column">
                <div>
                    <label for="username">Username</label>
                </div>
                <div>
                    <input name="username" id="username" type = "text" class = "demo-input-box">
                </div>
            </div>

            <div class = "form-column">
                <div>
                    <label for="password">Password</label>
                </div>
                <div>
                    <input name="password" id="password" type = "text" class = "demo-input-box">
                </div>
            </div>

            <div class = "form-column">
                <div>
                    <label for="email">Email</label>
                </div>
                <div>
                    <input name="email" id="email" type = "text" class = "demo-input-box">
                </div>
            </div>

            <div class = "form-column">
                <div>
                    <label for="age">Age</label>
                </div>
                <div>
                    <input name="age" id="age" type = "text" class = "demo-input-box">
                </div>
            </div>

            <div>
                <input type="submit" class ="btnLogin"></input>
            </div>

        </div>

    </form>

</div>

</body>
</html>
