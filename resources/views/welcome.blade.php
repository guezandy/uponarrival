<!DOCTYPE html>
<html>
    <head>
        <title>Upon Arrival to:</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- MAIN STYLES -->

        <!-- FONTS -->
        <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet">


        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                background-image: url('assets/img/back.jpeg');
                background-position: center;
                background-size:cover;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                margin-bottom: 40px;
            }

            .quote {
                font-size: 24px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Upon arrival to:</div>
                <form class="" method="any" action="{{ url('/search')}}">
                  <!--MAKE SURE VALID HAS BEEN ENETERED BEFORE CONTINUING-->
                    <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
                    <input type="text" name="city" id="city" placholder="City">
                    <select name="state" id="state" placeholder="State">
                    	<option value="AL">Alabama</option>
                    	<option value="AK">Alaska</option>
                    	<option value="AZ">Arizona</option>
                    	<option value="AR">Arkansas</option>
                    	<option value="CA">California</option>
                    	<option value="CO">Colorado</option>
                    	<option value="CT">Connecticut</option>
                    	<option value="DE">Delaware</option>
                    	<option value="DC">District Of Columbia</option>
                    	<option value="FL">Florida</option>
                    	<option value="GA">Georgia</option>
                    	<option value="HI">Hawaii</option>
                    	<option value="ID">Idaho</option>
                    	<option value="IL">Illinois</option>
                    	<option value="IN">Indiana</option>
                    	<option value="IA">Iowa</option>
                    	<option value="KS">Kansas</option>
                    	<option value="KY">Kentucky</option>
                    	<option value="LA">Louisiana</option>
                    	<option value="ME">Maine</option>
                    	<option value="MD">Maryland</option>
                    	<option value="MA">Massachusetts</option>
                    	<option value="MI">Michigan</option>
                    	<option value="MN">Minnesota</option>
                    	<option value="MS">Mississippi</option>
                    	<option value="MO">Missouri</option>
                    	<option value="MT">Montana</option>
                    	<option value="NE">Nebraska</option>
                    	<option value="NV">Nevada</option>
                    	<option value="NH">New Hampshire</option>
                    	<option value="NJ">New Jersey</option>
                    	<option value="NM">New Mexico</option>
                    	<option value="NY">New York</option>
                    	<option value="NC">North Carolina</option>
                    	<option value="ND">North Dakota</option>
                    	<option value="OH">Ohio</option>
                    	<option value="OK">Oklahoma</option>
                    	<option value="OR">Oregon</option>
                    	<option value="PA">Pennsylvania</option>
                    	<option value="RI">Rhode Island</option>
                    	<option value="SC">South Carolina</option>
                    	<option value="SD">South Dakota</option>
                    	<option value="TN">Tennessee</option>
                    	<option value="TX">Texas</option>
                    	<option value="UT">Utah</option>
                    	<option value="VT">Vermont</option>
                    	<option value="VA">Virginia</option>
                    	<option value="WA">Washington</option>
                    	<option value="WV">West Virginia</option>
                    	<option value="WI">Wisconsin</option>
                    	<option value="WY">Wyoming</option>
                    </select>
                    <!--<input type="text" name="state" id="state">-->
                    <button type="submit" class="btn btn-success btn-sm">Update</button>
                </form>
            </div>
        </div>
    </body>
</html>
