@extends('layouts.app')

@section('meta')
    <title>About {{ env('APP_NAME') }}</title>
    <style>
        .col-md-7,
        .col-md-6 {
            font-size: 18px;
        }
    </style>
@endsection

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-7">
                <div style="display:flex;flex-direction:row;justify-content: space-between">
                    <h1>We're making <br>events simple</h1>
                </div>
                <blockquote>A solution for busy parents, students, and school event coordinators</blockquote>
                <p>
                    <strong>{{ env('APP_NAME') }}</strong> was created as a solution for
                    busy parents, students, and school event coordinators. This innovative platform allows you to <i>purchase
                        and sell</i> tickets for various events throughout the school year, including junior and senior prom, homecoming,
                    football games, etc., in one user-friendly website.
                </p>
            </div>
            <div class="col-md-5">
                <img src="/images/coding-about.jpg" alt="EventsSmarter feature illustration" style="object-fit: cover;border-radius: 50%;width:100%;max-width:400px;height:400px;border:1px solid rgba(0,0,0,.3);">
            </div>
        </div>

        <br>
        <br>
        <hr>
        <br>
        <br>

        <div class="row">
            <div class="col-md-6">
                <img src="/images/login-about.png" alt="EventsSmarter feature illustration" style="object-fit: cover;border-radius: 50%;width:100%;max-width:400px;height:400px;border:1px solid rgba(0,0,0,.3);">
            </div>
            <div class="col-md-6">
                <h2>Manage sales, number of tickets, and who purchased</h2>
                <blockquote>All by simply logging into your {{ env('APP_NAME') }} account</blockquote>
                <p>Ticket sellers simply log into their accounts and upload their school’s event listing. On their profile,
                    they can <b>manage and track</b> the amount of sales, the number of tickets left to sell, and see who purchased
                    tickets.
                    <i>This also allows event coordinators to better plan and prepare for the upcoming occasion.</i>
                </p>
            </div>
        </div>

        <br>
        <br>
        <hr>
        <br>
        <br>

        <div class="row">
            <div class="col-md-6">
                <h2>Easy for busy parents to buy</h2>
                <blockquote>Safely and securely purchase tickets online</blockquote>
                <p>{{ env('APP_NAME') }} makes it easy for busy parents on the go to buy tickets using a credit card
                    without having to give their child a personal check or cash. They simply locate their school’s event
                    on the website, select the event, and click on the “buy” button. From there, they can safely and
                    securely purchase tickets online. They’ll receive a QR code that they can printed out, texted, or
                    emailed to their child for admission. The event page provides a Google map to easily view the location
                    and to get directions.</p>
            </div>
            <div class="col-md-6">
                <img src="/images/buy-about.png" alt="EventsSmarter feature illustration" style="object-fit: cover;border-radius: 50%;width:100%;max-width:400px;height:400px;border:1px solid rgba(0,0,0,.3);">
            </div>
        </div>

        <br>
        <br>
        <hr>
        <br>
        <br>

        <div class="row">
            <div class="col-md-6">
                <img src="/images/dashboard-about.png" alt="EventsSmarter feature illustration" style="object-fit: cover;border-radius: 50%;width:100%;max-width:400px;height:400px;border:1px solid rgba(0,0,0,.3);">
            </div>
            <div class="col-md-6">
                <h2>Your own personal dashboard</h2>
                <blockquote>Follow your school to see upcoming and past events ... making future purchases a snap.</blockquote>
                <p>For added convenience, you can logon to your personal dashboard and follow your school to see upcoming
                    and past events. Your personal profile also has the ability to retrieve your profile information from
                    a secure place making future purchases a snap.</p>
            </div>
        </div>

        <br>
        <br>
        <hr>
        <br>
        <br>

        <div class="row">
            <div class="col-md-12">
                <h2>Empowering students, athletes, and everyday people</h2>
                <blockquote>Brought to you by Professional {{ env('APP_NAME') }}</blockquote>
                <p>{{ env('APP_NAME') }} is built by a team with a background in business, entrepreneurship and
                    professional sports, empowering students, athletes, and everyday people to make the right decisions
                    in life.</p>
            </div>
        </div>

        <br>
        <br>

    </div>
    <div class="hero section white-text">
        <Testimonials :quotes="{{ $quotes }}"></Testimonials>
    </div>

    <br>
    <br>

    <div class="col-md-4 col-md-offset-4">
        <a href="/decide" class="btn btn-lg btn-primary btn-block">Are you ready to buy or sell tickets?</a>
    </div>
@endsection

@section('scripts')
    <script>
        window.sr = ScrollReveal();
        sr.reveal('.container');
    </script>
@endsection
