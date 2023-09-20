@extends('layouts.default', ['title' => "Contact Me"])

@section('content')
    <section class="container-md mt-5 vh-100">
        <div class="body-secondary p-3 mb-3">
            <h1 class="mb-3 text-center">Contact Me</h1>
            <p class="text-center">Please use the form below if you would like to hire me, give feedback, or have a general question.</p>
        </div>
        <form method="post">
            @csrf
            <div class="row mb-3">
                <!--First Name, Last Name, Email, Phone, Company, Message-->            
                <!--Checkbox if copy of resume is requested-->
                <!--Radio buttons or dropdown for message type - job offer, feedback, general question-->
                <div class="col-sm-4">
                    <select class="form-select" name="type" id="type" required>
                        <option selected>Choose message type...</option>
                        <option value="Employment">Employment</option>
                        <option value="Freelance Work">Freelance Work</option>
                        <option value="General">General</option>
                        <option value="Feedback">Feedback</option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-sm-6 mb-3">
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control" id="firstname" placeholder="name" required>
                        <label class="form-label" for="name">Name</label>
                    </div>
                </div>
                <div class="col-sm-6 mb-3">
                    <div class="form-floating">
                        <input type="text" name="company" class="form-control" id="company" placeholder="company">
                        <label class="form-label" for="company">Company</label>
                    </div>
                </div>
                <div class="col-sm-6 mb-3">
                    <div class="form-floating">
                        <input type="tel" name="phone" class="form-control" id="phone" placeholder="phone">
                        <label class="form-label" for="phone">Phone</label>
                    </div>
                </div>
                <div class="col-sm-6 mb-3">
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="email" placeholder="email">
                        <label class="form-label" for="email">Email Address</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <!--TODO insert checkbox for resume-->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Yes" name="resume">
                        <label class="form-check-label" for="flexCheckDefault">
                            Include copy of resume with response
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label" for="message">Message</label>
                    <textarea name="message" id="message" class="w-100 form-control" style="height: 250px;" required></textarea>
                </div>
            </div>

            <x-cloudflare-turnstile/>
            
            <button type="submit" class="btn btn-primary cloudflare-validate" id="submit" disabled><i class="fa-regular fa-paper-plane"></i> Send</button>
            <button type="button" class="btn btn-danger cloudflare-validate" id="cancel" disabled><i class="fa-solid fa-xmark"></i> Cancel</button>
            <script>
                let btn = document.getElementById('cancel');
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    if (confirm("Are you sure you wish to cancel your message?")) {
                        history.back();
                    }
                });
            </script>
        </form>
        
    </section>
@stop