@extends('frontend.layouts.brief.master')

@section('contentbrief')

<section class="stepformwrap">
        <div class="progress-bar" id="progressBar"></div>
        <form method="post" id="briefform">
            @csrf

            <!-- <input type="hidden" name="prompt" id="prompt"> -->

            <div class="step step-1 active">
                <div class="container">
                    <label class="stepmain" for="BusinessName">Enter your business name</label>
                    <!-- <div class="input-fieldArea">
                        <input type="text" id="currentInput" placeholder="Start Typing..." name="businessname" required>
                    </div> -->
                </div>
            </div>

            <div class="step step-2">
                <div class="container">
                    <label class="stepmain" for="businessSlogan">Enter your slogan</label>
                </div>
            </div>

            <div class="step step-3">
                <div class="container">
                    <label class="stepmain" for="icon">Any icon you want to incorporate in your logo</label>
                </div>
            </div>

            <div class="step step-4">
                <div class="container">
                    <label class="stepmain" for="BusinessIndustry">Enter your industry</label>
                </div>
            </div>

            <div class="step step-5">
                <div class="container">
                    <label class="stepmain" for="LogoStyle">Enter your logo style</label>
                </div>
            </div>

            <div class="step step-6">
                <div class="container">
                    <label class="stepmain" for="LogoDesign">Enter your logo type</label>
                </div>
            </div>

            <div class="step step-7">
                <div class="container">
                    <label class="stepmain" for="LogoTheme">Enter Your color theme</label>
                </div>
            </div>

            <div class="step step-8">
                <div class="container">
                    <label class="stepmain" for="FontStyle">Font Styles</label>
                </div>
            </div>

            <div class="step step-9">
                <div class="container">
                    <label class="stepmain" for="Quantity">How Many You want?</label>
                </div>
            </div>

            <div class="input-field">
                <div class="input-fieldArea">
                    <input type="text" id="currentInput" placeholder="Start Typing..." name="businessname" required>
                    <button type="button" id="nextButton" onclick="nextStep()">Next</button>
                    <button type="submit" id="submitButton" style="display:none;">Submit</button>
                </div>
            </div>
        </form>
        <div id="response"></div>
    </section>

    @endsection