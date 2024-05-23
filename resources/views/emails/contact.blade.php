<!-- resources/views/emails/contact.blade.php -->

<h1>New Contact Form Submission</h1>

<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
@if($data['phone'])
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
@endif
<p><strong>Message:</strong> {{ $data['message'] }}</p>
