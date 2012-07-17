<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style type="text/css">
            *{
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            }

            body {
                margin: 0;
                pading: 0;
                color: #fff;
                background: url('bg-login.png') repeat #1b1b1b;
                font-size: 14px;
                text-shadow: #050505 0 -1px 0;
                font-weight: bold;
            }

            li {
                list-style: none;
            }

            #dummy {
                position: absolute;
                top: 0;
                left: 0;
                border-bottom: solid 3px #777973;
                height: 250px;
                width: 100%;
                background: url('bg-login-top.png') repeat #fff;
                z-index: 1;
            }

            #dummy2 {
                position: absolute;
                top: 0;
                left: 0;
                border-bottom: solid 2px #545551;
                height: 252px;
                width: 100%;
                background: transparent;
                z-index: 2;
            }

            #login-wrapper {
                margin: 0 0 0 -160px;
                width: 320px;
                text-align: center;
                z-index: 99;
                position: absolute;
                top: 0;
                left: 50%;
            }

            #login-top {
                height: 120px;
                padding-top: 140px;
                text-align: center;
            }

            label {
                width: 70px;
                float: left;
                padding: 8px;
                line-height: 14px;
                margin-top: -4px;
            }

            input.text-input {
                width: 200px;
                float: right;
                -moz-border-radius: 4px;
                -webkit-border-radius: 4px;
                border-radius: 4px;
                background: #fff;
                border: solid 1px transparent;
                color: #555;
                padding: 8px;
                font-size: 13px;
            }

            input.button {
                float: right;
                padding: 6px 10px;
                color: #fff;
                font-size: 14px;
                background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#DEB887), to(#CD3333));
                text-shadow: #050505 0 -1px 0;
                background-color: #459300;
                -moz-border-radius: 4px;
                -webkit-border-radius: 4px;
                border-radius: 4px;
                border: solid 1px transparent;
                font-weight: bold;
                cursor: pointer;
                letter-spacing: 1px;
            }

            input.button:hover {
                background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#00BFFF), to(#00BFFF), color-stop(80%, #00BFFF));
                text-shadow: #050505 0 -1px 2px;
                background-color: #a4d04a;
                color: #fff;
            }

            div.error {
                padding: 8px;
                background: rgba(52, 4, 0, 0.4);
                -moz-border-radius: 8px;
                -webkit-border-radius: 8px;
                border-radius: 8px;
                border: solid 1px transparent;
                margin: 6px 0;
            }
        </style>		
    </head>
    <body>
        <div id="login-wrapper" class="png_bg">
            <div id="login-top">
                <img src="public/images/logo_1.jpg"/>
            </div>

            <div id="login-content">
                <form method="post" action="login/auth">					
                    <p>
                        <label>Username</label>
                        <input value="" name="usr" class="text-input" type="text" />
                    </p>
                    <br style="clear: both;" />
                    <p>
                        <label>Password</label>
                        <input name="passwd" class="text-input" type="password" />
                    </p>
                    <br style="clear: both;" />
                    <p>
                        <input class="button" type="submit" value="Login" />
                    </p>

                </form>
            </div>
        </div>
        <div id="dummy"></div>
        <div id="dummy2"></div>
    </body>
</html>
