<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/briefstyle.css') }}">
    <title>Brief</title>
    <style>
        header {
            border-bottom: unset;
        }

        .step {
            height: 77vh;
        }

        .step label {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: 0 auto;
            transform: translate(-50%, -50%)
        }

        body,
        html {
            font-family: Arial, sans-serif;
        }

        .progress-bar {
            height: 7px;
            background: #f15874;
            width: 0%;
            border-radius: 7px;
            transition: width 0.5s ease;
        }

        .step {
            display: none;
            position: absolute;
            width: 100%;
            transition: transform 0.5s ease;
        }

        .active {
            display: block;
        }

        .input-field {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 70%;
            margin: 0 auto;
            background: transparent;
            padding: 20px;
            box-sizing: border-box;
        }

        .input-fieldArea {
            position: relative;
            margin: 0 auto;
            margin-bottom: 21px;
            width: 90.5%;
        }

        .input-field input {
            width: 100%;
            padding: 10px 25px;
            border: 2px solid #f15874;
            border-radius: 6px;
            text-align: left;
            background-color: #f2f2f2;
            font-size: 26px;
            margin: 0;
        }

        section.stepformwrap {
            position: relative;
        }

        section.stepformwrap:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 7px;
            background-color: #e5e5e5;
            width: 100%;
            z-index: -1;
        }

        .input-field button {
            position: absolute;
            border: none;
            top: 6px;
            right: 6px;
            background: #f15874;
            color: #fff;
            height: calc(100% - 12px);
            font-size: 14px;
            padding: 10px 21px;
            border-radius: 4px
        }

        .step label {
            font-size: 40px;
            font-weight: 700;
            text-transform: capitalize;
        }

        .industry-row {
            display: grid;
            grid-template-columns: repeat(7, minmax(0px, 1fr));
            gap: 1rem;
        }

        .industry-row {
            margin-top: 50px;
        }

        .industrybox {
            position: relative;
            background-color: #fff;
            padding: 15px 0;
            border: 2px solid #fff;
            border-radius: 6px;
        }

        .industrybox input[type=radio] {
            opacity: 0;
            position: absolute;
            bottom: 10px;
        }

        .checkbox__inner {
            display: inline-block;
            width: 24px !important;
            height: 24px;
            border-radius: 50%;
            border: 2px solid #4481ff;
            background: transparent no-repeat center;
            position: absolute;
            top: 10px;
            right: 10px;
            display: none;
        }

        .industrybox label {
            display: flex;
            flex-flow: column;
            align-items: center;
            justify-content: center;
        }

        .checkbox {
            position: absolute;
            top: -100px;
            left: -100px;
        }

        .checkbox__inner {
            display: inline-block;
            width: 24px !important;
            height: 24px;
            border-radius: 50%;
            border: 2px solid #4481ff;
            background: transparent no-repeat center;
            position: absolute;
            top: 10px;
            right: 10px;
            display: none;
        }

        .checkbox:checked+.checkbox__inner {
            border-color: #4481ff;
            background-color: #4481ff;
            background-image: url("data:image/svg+xml,%3C%3Fxml version='1.0' encoding='UTF-8'%3F%3E%3Csvg width='14px' height='10px' viewBox='0 0 14 10' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3C!-- Generator: Sketch 59.1 (86144) - https://sketch.com --%3E%3Ctitle%3Echeck%3C/title%3E%3Cdesc%3ECreated with Sketch.%3C/desc%3E%3Cg id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='ios_modification' transform='translate(-27.000000, -191.000000)' fill='%23FFFFFF' fill-rule='nonzero'%3E%3Cg id='Group-Copy' transform='translate(0.000000, 164.000000)'%3E%3Cg id='ic-check-18px' transform='translate(25.000000, 23.000000)'%3E%3Cpolygon id='check' points='6.61 11.89 3.5 8.78 2.44 9.84 6.61 14 15.56 5.05 14.5 4'%3E%3C/polygon%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            background-size: 14px 10px;

        }

        .checkbox:checked+.checkbox__inner+label {
            display: block;
            border: 2px solid #3c7cff;
        }

        .checkbox:checked+.checkbox__inner {
            display: block
        }

        .industry-row .industrybox label {
            font-size: 15px;
            color: #969696;
        }

        .industrybox input:after {
            display: none;
        }

        input[type="radio"]:checked+label,
        input[type="checkbox"]:checked+label {
            border-color: #f15874;
            border: 2px solid #f15874;
            border-radius: 6px;
        }

        .stepmain {
            border-right: .15em solid black;
            white-space: nowrap;
            overflow: hidden;
            /*width: 0; */
            animation: typing 3s steps(40, end), blink-caret .75s step-end infinite;
            border-top: unset;
            border-bottom: unset;
            border-left: unset;
            text-align: center;
        }


        @keyframes typing {
            from {
                max-width: 0
            }

            to {
                max-width: 100%
            }
        }

        @keyframes blink-caret {

            from,
            to {
                border-color: transparent
            }

            50% {
                border-color: black;
            }
        }

        .input-field input {
            margin-top: 0;
        }

        .inputbox {
            background-color: #fff;
            border-radius: 6px;
            height: 100%;
            position: relative;
            box-shadow: 0 0 4px 1px #d9d9d9;
            transition: 0.2s all ease;
        }

        .inputbox input[type=radio] {
            position: absolute;
            bottom: 15px;
            left: 0;
            right: 0;
        }

        .inputbox label {
            display: flex;
            flex-flow: column;
            align-items: center;
            justify-content: space-between;
            height: 100%;
            padding: 40px;
        }

        .inputbox h3.title {
            font-size: 25px;
            font-weight: 600;
        }

        .inputbox img {
            margin: 25px 0;
        }

        .inputbox p {
            font-size: 16px;
            font-weight: 400;
        }

        .inputbox input:after {
            display: none;
        }

        .inputbox input {
            opacity: 0;
        }

        .logodesign-box {
            position: relative;
        }

        .logodesign-box input[type="checkbox"] {
            position: absolute;
            bottom: 0;
            opacity: 0;
        }

        .logodesign-box p {
            font-weight: 600;
            padding: 25px 0;
            margin-bottom: 0;
        }

        .logodesign-box img {
            width: 100%;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    @include('frontend.layouts.brief.header')

    @yield('contentbrief')

    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        let currentStep = 1;
        const totalSteps = 9;
        let values = [];

        function nextStep() {

            const currentInput = document.getElementById("currentInput");
            const inputValue = currentInput.value;

            values.push(inputValue);
            localStorage.setItem("inputValues", JSON.stringify(values));
            console.log(values);

            const currentStepEl = document.querySelector('.step-' + currentStep);
            const nextButton = document.getElementById("nextButton");
            const submitButton = document.getElementById("submitButton");

            currentStepEl.dataset.value = currentInput.value;

            if (currentStep < totalSteps) {
                currentStepEl.classList.remove('active');
                currentStep++;
                const nextStepEl = document.querySelector('.step-' + currentStep);
                nextStepEl.classList.add('active');
                updateProgressBar();
                currentInput.value = '';
                currentInput.focus();
                updatePlaceholder(currentStep);

                if (currentStep === totalSteps) {
                    nextButton.style.display = 'none'; // Hide next button on the last step
                    submitButton.style.display = 'inline-block'; // Show submit button on the last step
                }
            }
        }


        function updateProgressBar() {
            const progressBar = document.getElementById("progressBar");
            const width = (currentStep / totalSteps) * 100;
            progressBar.style.width = `${width}%`;
        }

        function updateProgressBar() {
            const progressBar = document.getElementById("progressBar");
            const width = (currentStep / totalSteps) * 100;
            progressBar.style.width = `${width}%`;
        }

        function updatePlaceholder(step) {
            const currentInput = document.getElementById("currentInput");
            switch (step) {
                case 1:
                    currentInput.placeholder = "Business Name";
                    currentInput.name = "businessname";
                    break;
                case 2:
                    currentInput.placeholder = "Business Slogan";
                    currentInput.name = "businessslogan";
                    break;
                case 3:
                    currentInput.placeholder = "eg, coffee shop, house, animal...";
                    currentInput.name = "icon";
                    break;
                case 4:
                    currentInput.placeholder = "eg real estate, fitness, medical...";
                    currentInput.name = "industry";
                    break;
                case 5:
                    currentInput.placeholder = "Vintage, modern, conceptual, fancy...";
                    currentInput.name = "logostyle";
                    break;
                case 6:
                    currentInput.placeholder = "Lettermark, emblem, abstract, illustration...";
                    currentInput.name = "logotype";
                    break;
                case 7:
                    currentInput.placeholder = "black and blue, red and black..";
                    currentInput.name = "colortheme";
                    break;
                case 8:
                    currentInput.placeholder = "Font Style";
                    currentInput.name = "fontstyle";
                    break;
                case 9:
                    currentInput.placeholder = "How Many You want";
                    currentInput.name = "8";
                    break;

                    // Add cases for other steps
                default:
                    currentInput.placeholder = "Start Typing...";
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            updateProgressBar();
            updatePlaceholder(currentStep);
        });
    </script>


    <script>
        function typewriterEffect(elementId, text, speed) {
            let i = 0;
            const element = document.getElementById(elementId);

            function typeWriter() {
                if (i < text.length) {
                    // Add one character to the label
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(typeWriter, speed);
                }
            }

            // Start typing
            typeWriter();
        }

        // Example usage
        document.addEventListener("DOMContentLoaded", () => {
            // Assuming 'LogoTheme' is the ID of your label element
            typewriterEffect('LogoTheme', 'Choose Your Logo Color Theme', 100);
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const stepForm = document.getElementById('stepForm');
            stepForm.addEventListener('submit', function(event) {
                // Prevent the form from submitting immediately
                event.preventDefault();

                // Aggregate inputs from data-value attribute set on each step
                let promptValue = {};
                const steps = document.querySelectorAll('.step');
                steps.forEach((step, index) => {
                    // Use the dataset.value which holds the input for each step
                    if (step.dataset.value) {
                        const label = step.querySelector('label').innerText.toLowerCase().replace(/ /g, '');
                        const value = step.dataset.value;
                        promptValue[label] = value;
                        // `${label}: ${value}; `;
                    }
                });

                console.log(promptValue);

                // Ensure to capture and include the current step's input value as well
                const currentInputValue = document.getElementById("currentInput").value;
                if (currentStep === totalSteps && currentInputValue) {
                    const currentStepEl = document.querySelector('.step-' + currentStep);
                    const label = currentStepEl.querySelector('label').innerText.toLowerCase().replace(/ /g, '').replace("?", '');
                    promptValue[label] = currentInputValue;
                }

                // // Set the aggregated value to the hidden input
                document.getElementById('prompt').value = JSON.stringify(promptValue);

                // // Now, submit the form
                this.submit();
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#briefform').on('submit', function(e) {
                e.preventDefault();

                // Save all form data in one variable as an object
                // const formData = {
                //     businessname: $('input[name="businessname"]').val(),
                //     businessslogan: $('input[name="businessslogan"]').val(),
                //     icon: $('input[name="icon"]').val(),
                //     industry: $('input[name="industry"]').val(),
                //     logostyle: $('input[name="logostyle"]').val(),
                //     logotype: $('input[name="logotype"]').val(),
                //     colortheme: $('input[name="colortheme"]').val(),
                //     fontstyle: $('input[name="fontstyle"]').val(),
                //     quantity: $('input[name="quantity"]').val()
                // };

                var getbriefvalues = localStorage.getItem("inputValues");

                // Log the entire form data object to the console
                // console.log('Form Data:', formData);

                $.ajax({
                    url: '/briefform',
                    type: 'POST',

                    data: {
                        briefValues: {
                            ...JSON.parse(getbriefvalues), // Spread the parsed briefValues
                            ...$(this).serializeArray().reduce((acc, curr) => {
                                acc[curr.name] = curr.value; // Convert serialized array to an object
                                return acc;
                            }, {})
                        },
                        "_token": "{{ csrf_token() }}"
                    },

                    // data: {
                    //     briefValues: JSON.parse(getbriefvalues),
                    //     "_token":"{{csrf_token()}}"
                    // },
                    
                    success: function(response) {
                        $('#response').html('<p>' + response.success + '</p>');
                        $('#briefform')[0].reset();
                    },
                    error: function(xhr) {
                        let errors = xhr.responseJSON.errors;
                        let errorMsg = 'Error Submitting Form';
                        $.each(errors, function(key, value) {
                            errorMsg += value[0] + '<br>';
                        });
                        $('#response').html('<p style="color:red;">' + errorMsg + '</p>');
                    }
                });
            });
        });
    </script>

</body>

</html>