<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href={{asset("style/images/favicon.png")}}>
    <title>Hygge</title>
    <!-- Bootstrap core CSS -->
    <link href={{asset("style/css/bootstrap.min.css")}} rel="stylesheet">
    <link href={{asset("style/css/plugins.css")}} rel="stylesheet">
    <link href={{asset("style.css")}} rel="stylesheet">
    <link href={{asset("style/css/color/green.css")}} rel="stylesheet">
    <link href={{asset('http://fonts.googleapis.com/css?family=Montserrat:400,700')}} rel='stylesheet' type='text/css'>
    <link href={{asset('http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic')}} rel='stylesheet' type='text/css'>
    <link href={{asset("style/type/icons.css")}} rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src={{asset("https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js")}}></script>
    <script src={{asset("https://oss.maxcdn.com/respond/1.4.2/respond.min.js")}}></script>
    <![endif]-->
</head>
<body>

<div class="body-wrapper">
    @include('site.navbar')

</div>

    <div class="light-wrapper">
        <div class="container inner">
            <div class="thin">
                <h2 class="post-title">Get in Touch</h2>
                <p>Nullam quis risus eget urna mollis ornare vel eu leo. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus.</p>
                <div class="divide10"></div>
                <div class="form-container">
                    <form action=/svyaz method="POST" class="vanilla vanilla-form" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <label>
                                        <input type="text" name="name" placeholder="Your name" required="required">
                                        <i class="icon-user"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <label>
                                        <input type="email" name="email" placeholder="Your e-mail" required="required">
                                        <i class="icon-mail-alt"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <label>
                                        <input type="tel" name="tel" placeholder="Phone">
                                        <i class="icon-phone"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <label class="custom-select">
                                        <select name="department" required="required">
                                            <option value="Закупка">Закупка</option>
                                            <option value="Маркетинг">Маркетинг</option>
                                            <option value="Другое">Другое</option>
                                        </select>
                                        <i class="icon-ok"></i><span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <textarea name="message" placeholder="Type your message here..."></textarea>
                        <input type="submit" class="btn" value="Send" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('site.footer')



<script src={{asset("style/js/jquery.min.js")}}></script>
<script src={{asset("style/js/bootstrap.min.js")}}></script>
<script src={{asset("style/js/plugins.js")}}></script>
<script src={{asset("style/js/jquery.themepunch.tools.min.js")}}></script>
<script src={{asset("style/js/scripts.js")}}></script>
</body>
</html>
