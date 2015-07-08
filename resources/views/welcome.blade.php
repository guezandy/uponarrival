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

            select {
              -webkit-user-select: none;
              -moz-user-select: none;
              -webkit-padding-end: 20px;
              -moz-padding-end: 20px;
              -webkit-padding-start: 2px;
              -moz-padding-start: 2px;
              font-family: 'Lato';
              background-color: rgba(0, 0, 0, 0.0);
              background-position: center right;
              background-repeat: no-repeat;
              border: 0px solid #AAA;
              border-radius: 2px;
              box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.0);
              color: #555;
              font-size: 24px;
              margin: 0;
              overflow: hidden;
              padding-top: 2px;
              padding-bottom: 2px;
              text-overflow: ellipsis;
              white-space: nowrap;
          }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
                background-color: rgba(255, 255, 255, 0.5);
            }

            .title {
                font-size: 96px;
                margin-bottom: 40px;
                color: #000;
            }

            .quote {
                font-size: 24px;
            }
            .input{
              text-align: center;
              font-size:24px;
              width: 200px;
              font-family: 'Lato';
              background-color: rgba(0, 0, 0, 0.0);
              border:0;
              border-bottom: 2px solid;
              border-color: rgb(0, 0, 0);

            }

            .btn {
              display: inline-block;
              margin-bottom: 0;
              font-weight: 400;
              text-align: center;
              vertical-align: middle;
              cursor: pointer;
              background-image: none;
              background-color: rgba(0, 0, 0, 0.0);
              border: 1px solid transparent;
              white-space: nowrap;
              padding: 10px 15px;
              font-size: 14px;
              line-height: 1.42857143;
              border-radius: 2px;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
              -webkit-transition: all 0.35s ease;
                      transition: all 0.35s ease;
            }

            .btn-sm,
              .btn-group-sm > .btn {
                padding: 5px 10px;
                font-size: 30px;
                line-height: 1.5;
                border-radius: 2px;
              }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="section-lg">
                <div class="title">Upon arrival to:</div>
                <form class="" method="any" action="{{ url('/search')}}">
                  <!--MAKE SURE VALID HAS BEEN ENETERED BEFORE CONTINUING-->
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
    </body>
</html>
