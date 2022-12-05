<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Contact Us</title>
    </head>
    <body>
    <h1>
        Contact Us Page
    </h1>
    <a href="/">Index</a><br>
    <a href="/aboutus">About Us</a><br>
    <a href="/contactus">Contact Us</a><br>
    <br><br>
    <form method="post" action="/contact_submit">
        @csrf
        Name:
        <input type="text" id="name" placeholder="Your Name" name="name"><br><br>
        Email:
        <input type="email" id="email" placeholder="Your Email" name="email"><br><br>
        Phone:
        <input type="tel" id="phone" placeholder="Your Phone" name="phone"><br><br>
        Message:
        <input type="text" id="message" placeholder="Your Message" name="message"><br><br>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
    </body>
</html>
