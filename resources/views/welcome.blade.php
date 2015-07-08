<!DOCTYPE html>
<html>
    <head>
        <title>Upon Arrival to:</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- MAIN STYLES -->

        <!-- FONTS -->
        <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/plugins/font-awesome.css">
        <!-- If you want change theme, you need to remove old one and new one, how for Bootstrap, so for custom theme -->
        <link href="assets/css/bootstrap/theme-b.css" rel="stylesheet" id="bootstrapTheme">
        <!--<link href="assets/css/main-theme/themes/red-b.css" rel="stylesheet" id="mainTheme">-->
        <link href="assets/css/main-theme/theme-m.css" rel="stylesheet" id="mainTheme">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                background-image: url('assets/img/back.jpeg');
                background-position: center;
                background-size:cover;
            }
            </style>
    </head>
    <body>
        <div class="page-wrap">
        <div class="container">
            <div class="section-lg">
              <div class="container">
                <h2 class="lg-title">Upon arrival to:</h2>
                <!--<div class="title">Upon arrival to:</div>-->
                <form class="" method="any" action="{{ url('/search')}}">
                    <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
                    <input class="input" type="text" name="city" id="city" placeholder="City" required>
                    <select name="state" id="state" placeholder="State">
                      	<option value="AL">AL</option>
                      	<option value="AK">AK</option>
                      	<option value="AZ">AZ</option>
                      	<option value="AR">AR</option>
                      	<option value="CA">CA</option>
                      	<option value="CO">CO</option>
                      	<option value="CT">CT</option>
                      	<option value="DE">DE</option>
                      	<option value="DC">DC</option>
                      	<option value="FL">FL</option>
                      	<option value="GA">GA</option>
                      	<option value="HI">HI</option>
                      	<option value="ID">ID</option>
                      	<option value="IL">IL</option>
                      	<option value="IN">IN</option>
                      	<option value="IA">IA</option>
                      	<option value="KS">KS</option>
                      	<option value="KY">KY</option>
                      	<option value="LA">LA</option>
                      	<option value="ME">ME</option>
                      	<option value="MD">MD</option>
                      	<option value="MA">MA</option>
                      	<option value="MI">MI</option>
                      	<option value="MN">MN</option>
                      	<option value="MS">MS</option>
                      	<option value="MO">MO</option>
                      	<option value="MT">MT</option>
                      	<option value="NE">NE</option>
                      	<option value="NV">NV</option>
                      	<option value="NH">NH</option>
                      	<option value="NJ">NJ</option>
                      	<option value="NM">NM</option>
                      	<option value="NY">NY</option>
                      	<option value="NC">NC</option>
                      	<option value="ND">ND</option>
                      	<option value="OH">OH</option>
                      	<option value="OK">OK</option>
                      	<option value="OR">OR</option>
                      	<option value="PA">PA</option>
                      	<option value="RI">RI</option>
                      	<option value="SC">SC</option>
                      	<option value="SD">SD</option>
                      	<option value="TN">TN</option>
                      	<option value="TX">TX</option>
                      	<option value="UT">UT</option>
                      	<option value="VT">VT</option>
                      	<option value="VA">VA</option>
                      	<option value="WA">WA</option>
                      	<option value="WV">WV</option>
                      	<option value="WI">WI</option>
                      	<option value="WY">WY</option>
                    </select>
                    <!--<input type="text" name="state" id="state">-->
                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-angle-right"></i></button>
                </form>
                <img src="assets/img/poweredby.png" style="max-width:200px">
            </div>
          </div>
        </div>
      </div>
    </body>
</html>
