1 Create an account and set up an application on Calendly:

Go to the Calendly Developer Portal (https://developer.calendly.com/) and sign in or create a new account.
Create a new application and obtain the API credentials (client ID and client secret) for your Laravel application.
2
 Set up Laravel project:

Create a new Laravel project or use an existing one.
Configure your Laravel project to use the Calendly API credentials. You can store these credentials in your .env file.
3 Install required packages:

Install the laravel/socialite package, which provides a simple way to authenticate with OAuth providers like Calendly. You can add it to your Laravel project using Composer:

4 Configure Laravel Socialite:

In your Laravel project, open the config/services.php file and add the following configuration for Calendly:
    'calendly' => [
    'client_id' => env('CALENDLY_CLIENT_ID'),
    'client_secret' => env('CALENDLY_CLIENT_SECRET'),
    'redirect' => 'http://your-callback-url',
],

5 Set up routes and controller:

Create a new route and controller in your Laravel project to handle the OAuth authentication process and callback.
In your controller, use the Socialite facade to redirect the user to Calendly for authentication:

    use Laravel\Socialite\Facades\Socialite;

public function redirectToCalendly()
{
    return Socialite::driver('calendly')->redirect();
}
Create another method to handle the callback and retrieve the access token:

public function handleCalendlyCallback()
{
    $user = Socialite::driver('calendly')->user();
    $accessToken = $user->token;
    // Save the access token for later use
}
6 Add routes to web.php:

In your routes/web.php file, add the routes for the Calendly integration

Route::get('/calendly/redirect', [CalendlyController::class, 'redirectToCalendly']);
Route::get('/calendly/callback', [CalendlyController::class, 'handleCalendlyCallback']);


Calendly Url chetan-arrowmuse

Client ID 
Wvcxb01HPNTbaDNvL9_bwbldRTo8dzS2ORbpLWz7DnI

Client secret

ih1zvxyh1f1Nz1ZQ6JOwq_1b6vIsPp2qqHfFPMgCCK8

Webhook signing key

DK-l06ODX1-DslroSo6xIWVu4gTtrGc2nypJNvjtG2g