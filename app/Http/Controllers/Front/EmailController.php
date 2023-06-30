<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;

class EmailController extends Controller
{
    public function submitForm(Request $request)
    {
        // Email settings
        $toEmail = 'sarliyachetan@gmail.com'; // Recipient email
        $from = 'sender@example.com'; // Sender email
        $fromName = 'Arrowmech'; // Sender name

        // Get the submitted form data
        $name = trim($request->input('name'));
        $company = trim($request->input('company'));
        $email = trim($request->input('email'));
        $phone = trim($request->input('phone'));
        $message = trim($request->input('message'));
      

        // Validate input data
        $validationRules = [
            'name' => 'required',
            'company' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',

        ];

        $this->validate($request, $validationRules);

        // Email subject
        $emailSubject = 'Growth Sarathi Inquiry ' . $name;

        // Email message
        $htmlContent = '
                Growth Sarathi Inquiry From Website
                Name:' . $name . '
                Compny Name:' . $company . '
                Email: ' . $email . '
                Phone:</b> ' . $phone . '
                Message:' . $message . '';

        // Send email
        try {
            Mail::raw($htmlContent, function ($message) use ($toEmail, $from, $fromName, $emailSubject) {
                $message->to($toEmail)
                    ->from($from, $fromName)
                    ->subject($emailSubject);
            });

            $statusMsg = 'Thanks! Your contact request has been submitted successfully.';
            $msgClass = 'succdiv';

            return back()->with('status', $statusMsg)->with('msgClass', $msgClass);
        } catch (\Exception $e) {
            $statusMsg = 'Failed! Something went wrong, please try again.';
            return back()->with('status', $statusMsg)->with('msgClass', 'errordiv');
        }
    }

    // calendly
   
    public function redirectToCalendly()
    {
      return Socialite::driver('calendly')->redirect();
    }
    public function handleCalendlyCallback()
    {
        $user = Socialite::driver('calendly')->user();
        $accessToken = $user->token;
        // Save the access token for later use
    }
    public function createMeeting(Request $request)
    {
        // Retrieve the access token from your storage or authentication process
        $accessToken = 'YOUR_ACCESS_TOKEN';

        // Prepare the request payload
        $payload = [
            'start_time' => '2023-06-10T09:00:00Z',
            'end_time' => '2023-06-10T10:00:00Z',
            'invitee' => [
                'email' => 'example@example.com',
                // Additional invitee properties
            ],
            // Additional meeting properties
        ];

        // Make the API request to create a meeting
        $response = Http::withToken($accessToken)
            ->post('https://api.calendly.com/scheduled_events', $payload);

        // Process the API response
        if ($response->successful()) {
            // Meeting created successfully
            $meetingData = $response->json();
            // Handle the meeting data as needed
            return response()->json(['message' => 'Meeting created successfully']);
        } else {
            // Error creating the meeting
            $errorData = $response->json();
            // Handle the error data as needed
            return response()->json(['error' => 'Failed to create meeting'], $response->status());
        }
    }

    public function bookEvent(Request $request)
    {
        $calendlyAPIKey = 'YOUR_API_KEY';
        $calendlyEventURI = 'YOUR_EVENT_URI'; // Replace with your specific event URI
        
        $client = new Client();

        $response = $client->post("https://api.calendly.com/scheduled_events", [
            'headers' => [
                'Authorization' => "Bearer $calendlyAPIKey",
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'event_type' => $calendlyEventURI,
                'invitee' => [
                    'email' => $request->input('email'), // Replace with the email passed through the request
                ],
            ],
        ]);

        // Assuming the booking is successful, you can redirect to a specific page
        return redirect()->route('booking.success');
    }
}
