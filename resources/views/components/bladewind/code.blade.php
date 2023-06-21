@props([
    // name of the input field for use in forms
    'name' => 'pin-code-' . uniqid(),
    // what type of input box are you displaying
    // availalble options are text, password, email, search, tel
    'total_digits' => 4,
    'totalDigits' => 4,
    // what function should be called when the user is done entering the verification code
    // this should just be the function name without parenthesis and parameters.
    // example: verifyPin ... when the user is done entering the code Bladewind will call verifyPin(code)
    // note that the code is passed to your function as the only parameter so you need to expect a parameter
    // when defining your function... using the above example verifyPin = (pin_code) => {}
    'on_verify' => null,
    'onVerify' => null,
    // error message to display when pin is wrong
    'error_message' => 'Verification code is invalid',
    'errorMessage' => 'Verification code is invalid',
])
@php
    // reset variables for Laravel 8 support
    $total_digits = $totalDigits;
    $error_message = $errorMessage;
    //--------------------------------------------------------------------

    $name = preg_replace('/[\s-]/', '_', $name);
@endphp

<div class="dv-{{ $name }} relative">
    <div class="{{ $name }}-boxes flex">
        <div class="mx-auto flex space-x-3">
            @for ($x = 0; $x < $total_digits; $x++)
                <x-bladewind::input numeric="true" with_dots="false"
                    add_clearing="false"
                    onkeydown="hidePinError('{{ $name }}')"
                    onkeyup="movePinNext('{{ $name }}', {{ $x }}, {{ $total_digits }}, '{{ $on_verify }}', event)"
                    class="{{ $name }}-pin-code {{ $name }}-pcode{{ $x }} w-14 text-center text-xl font-light text-black shadow-sm dark:text-white"
                    maxlength="1" />
            @endfor
        </div>
    </div>
    <div
        class="bw-{{ $name }}-pin-error my-6 hidden text-center text-sm text-red-500">
        {!! $error_message !!}
    </div>
    <div
        class="bw-{{ $name }}-pin-spinner absolute top-0 hidden w-full bg-white/10 py-4 text-center">
        <x-bladewind::spinner />
    </div>
    <div
        class="bw-{{ $name }}-pin-valid absolute top-0 hidden w-full bg-white/10 py-1 text-center">
        <svg xmlns="http://www.w3.org/2000/svg"
            class="mx-auto h-10 w-10 text-green-500" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                clip-rule="evenodd" />
        </svg>
    </div>
</div>
<x-bladewind::input type="hidden" name="{{ $name }}" />

<script>
    movePinNext = (name, index, total_digits, user_function, evt) => {
        if (evt.key === 'Backspace') {
            if (index > 0) {
                dom_el(`.${name}-pcode${index}`).value = '';
                index--;
            }
        } else {
            if (dom_el(`.${name}-pcode${index}`).value) {
                index++
            }
        }

        (index < total_digits) ? dom_el(`.${name}-pcode${index}`).focus():
            setPin(name, user_function);
    }

    setPin = (name, user_function) => {
        dom_el(`.${name}`).value = '';
        dom_els(`.${name}-pin-code`).forEach((el) => {
            dom_el(`.${name}`).value += el.value;
        });
        let pin_code = dom_el(`.${name}`).value;
        (user_function) ? callUserFunction(
            `${user_function}('${pin_code}')`): doNothing();
    }

    clearPin = (name) => {
        dom_els(`.${name}-pin-code`).forEach((el) => {
            el.value = '';
        });
        dom_el(`.${name}-pcode0`).focus();
    }

    showPinError = (name) => {
        unhide(`.bw-${name}-pin-error`);
    }

    hidePinError = (name) => {
        hide(`.bw-${name}-pin-error`);
    }

    showSpinner = (name) => {
        hide(`.bw-${name}-pin-valid`);
        unhide(`.bw-${name}-pin-spinner`);
        dom_el(`.${name}-pcode0`).focus();
        dom_el(`.${name}-pcode0`).blur();
    }

    hideSpinner = (name) => {
        hide(`.bw-${name}-pin-spinner`);
    }

    showPinSuccess = (name) => {
        hide(`.bw-${name}-pin-spinner`);
        unhide(`.bw-${name}-pin-valid`);
        dom_el(`.${name}-pcode0`).focus();
        dom_el(`.${name}-pcode0`).blur();
        //changeCss(`.${name}-boxes`, '');
    }

    setFocus = (name) => {
        dom_el(`.${$name}-pcode0`).focus();
    }
</script>
