<?php namespace App\Http\Controllers;

use Auth;
use Input;

class FourSquareController extends Controller {



/*
  $client = new \TheTwelve\Foursquare\HttpClient\CurlHttpClient($pathToCertificateFile);
  $redirector = new \TheTwelve\Foursquare\Redirector\HeaderRedirector();
  $factory = new \TheTwelve\Foursquare\ApiGatewayFactory($client, $redirector);
  $factory->setClientCredentials($clientID, $clientSecret);

*/
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
    $clientId = "ZAVEOIVKFSVMWYCEBV4IH2OICWEJBCGR1QMYLNW33LWOXUCB";
    $clientSecret = "QJE0NNAXELRBFJYYH5YDATERUXNZBCNT1LHCVEXJWVGLMB0V";
    $pathToCertificateFile = base_path().'/cacert.pem';
    $client = new \TheTwelve\Foursquare\HttpClient\SymfonyHttpClient($pathToCertificateFile);
    $redirector = new \TheTwelve\Foursquare\Redirector\HeaderRedirector();
    $factory = new \TheTwelve\Foursquare\ApiGatewayFactory($client, $redirector);
    $factory->setClientCredentials($clientId, $clientSecret);

    $gateway = $factory->getVenuesGateway();

    $search = Input::get('city') .' , '. Input::get('state');
		//Art&Ent, Events, Food, Nightlife, Parks, Scenic views, Outlets
    $venues = $gateway->search(array(
     'near' => $search,
		 'categoryId' => '4bf58dd8d48988d17f941735,4d4b7105d754a06373d81259,4d4b7105d754a06374d81259,4d4b7105d754a06376d81259,4bf58dd8d48988d163941735,4bf58dd8d48988d165941735,52f2ab2ebcbc57f1066b8b35',
     'radius' => 1000
    ));

    if(count($venues) == 0) {
    	return view('error')->with('search', $search);
    } else {

		$PICS_PER_VENUE = 2;
		$names = array();
		$counter = array();
		$pics = array(); //2dimensional array holding the multiple images per venue

		//get images gateway
		//$get_images = $factory->getPhotosGateway();
		//return $get_images->getPhoto($gateway->photos($venues[0]->id)[0]->id);
		$venue_count = count($venues);
		for($i = 0; $i < $venue_count; $i++) {
			$names[$i] = $venues[$i]->{'name'};
			$images = array();
			$images[0] = "asset('assets/img/placeholder.png')";
			$images[1] = "asset('assets/img/placeholder.png')";
			$api_images = $gateway->photos($venues[$i]->id);
			//$single_api_image = $api_images[0];
			//return  $single_api_image->prefix . $single_api_image->width ."x". $single_api_image->width. $single_api_image->suffix;
			$pics_counter = 0;
			foreach($api_images as $single_api_image) {
				$format_url = $single_api_image->prefix . $single_api_image->width ."x". $single_api_image->width. $single_api_image->suffix;
				$images[$pics_counter] =  $format_url;//str_replace("/", "", $format_url);
				$pics_counter++;
				if($pics_counter >= $PICS_PER_VENUE) {
					$pics_counter = 0;
					break;
				}
			}
			$pics[$i] = $images;
		}
		//return $pics;
     return view('city')->with('search', $search)->with('names', $names)->with('pics', $pics)->with('venue_count', $venue_count);
    }
  }
}
