<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script>
    let x = true;

    function showHidden() {


        if (x) {
            document.getElementById('password').type = "text";
            x = false;
        } else {
            document.getElementById('password').type = "password";
            x = false;
        }
    }
</script> -->

<head>
    <?php $this->load->view('admin/head.php'); ?>


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            cursor: pointer;
        }

        body {
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #3f5efb, #fc466b);

        }

        form {
            width: 35rem;
            height: 45rem;
            display: flex;
            flex-direction: column;
            background: rgba(255, 255, 255, 0.06);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, .37);
            border-radius: 30px;
            border-top: 1px solid rgba(255, 255, 255, .3);
            border-left: 1px solid rgba(255, 255, 255, .3);
        }

        form:before {
            content: '';
            position: absolute;
            bottom: 3%;
            right: 30%;
            width: 200px;
            height: 200px;
            background: magenta;
            border-radius: 50%;
            z-index: -1;
            opacity: .8;
        }

        form:after {
            content: '';
            position: absolute;
            top: 12%;
            left: 32%;
            width: 150px;
            height: 150px;
            background: magenta;
            border-radius: 50%;
            z-index: -1;
            opacity: .8;
        }

        h1 {
            font-size: 50px;
            text-align: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
            letter-spacing: 3px;
            margin-bottom: 5%;
            opacity: .7;
        }

        label {
            font-size: 20px;
            color: white;
            margin-left: 5%;
            opacity: .8;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
        }

        input {
            width: 80%;
            margin: 5% auto;
            margin-left: 5%;
            margin-bottom: 8%;
            border: none;
            outline: none;
            background: transparent;
            color: white;
            border-bottom: 1px solid rgba(255, 255, 255, 0.6);
            opacity: .8;
        }

        button {
            width: 50%;
            margin: 3% 23% auto;
            color: white;
            font-size: 15px;
            opacity: .7;
            background: rgba(255, 255, 255, 0.06);
            padding: 10px 30px;
            border: none;
            outline: none;
            border-radius: 20px;
            text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.2);
            box-shadow: 3px 3px 5px rgba(31, 38, 135, .37);
            border-left: 1px solid rgba(255, 255, 255, .3);
            border-top: 1px solid rgba(255, 255, 255, .3);


        }

        a {
            text-align: center;
            font-size: 12px;
            color: white;
            opacity: .7;
            margin-left: 5%;

        }
    </style>

</head>

<body>
    <form role="form" method="post">
        <h1>Login</h1>
        <fieldset>
            <label for="">Email address</label>
            <div class="form-group">
                <input placeholder="" name="email" type="email" autofocus=""><?php echo form_error('email'); ?>
            </div>
            <label for="">Password</label>
            <div class="form-group">
                <input placeholder="" name="password" type="password" value=""><?php echo form_error('email'); ?>
                <!-- <span class="eye">
                    <div class="fa fa-eye" onclick="showHidden()"></div>
                </span> -->
            </div>
            <h2><?php echo form_error('login'); ?></h2>
            <div class="checkbox">
                <a>
                    <input name="remember" type="checkbox" value="Remember Me">Remember me
                </a>
            </div>
            <button type="submit">login</button>
        </fieldset>
    </form>

    <?php $this->load->view('admin/footer.php'); ?>
</body>



</html>