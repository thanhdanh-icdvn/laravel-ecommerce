<x-front-layout>
    <x-slot name="title">{{ __('Trang chủ') }}</x-slot>
    <x-bladewind.notification />

    <x-bladewind.card>

        <form method="get" class="signup-form">

            <h1 class="my-2 text-2xl font-light text-blue-900/80">Create Account</h1>
            <p class="mt-3 mb-6 text-blue-900/80 text-sm">
                This is a sign up form example to demonstrate how to validate forms using Bladewind.
            </p>

            <x-bladewind.input name="fname" required="true" label="Full Name"
                error_message="You will need to enter your full name" />

            <div class="flex gap-4">

                <x-bladewind.input name="email" required="true" label="Email" />

                <x-bladewind.input name="mobile" label="Mobile" numeric="true" />

            </div>

            <x-bladewind.textarea required="true" name="bio"
                error_message="Yoh! write something nice about yourself" show_error_inline="true"
                label="Describe yourself"></x-bladewind.textarea>

            <div class="text-center">

                <x-bladewind.button name="btn-save" has_spinner="true" type="primary" can_submit="true" class="mt-3">
                    Sign Up Today
                </x-bladewind.button>

            </div>

        </form>

    </x-bladewind.card>

    <x-bladewind.filepicker name="profile_pic" required="false" placeholder="Choose a profile picture"
        accepted_file_types=".jpg, .png" />

    @push('scripts')
        <script>
            dom_el('.signup-form').addEventListener('submit', function(e) {
                e.preventDefault();
                signUp();
            });

            signUp = () => {
                (validateForm('.signup-form')) ?
                unhide('.btn-save .bw-spinner'): // do this is validated
                    hide('.btn-save .bw-spinner'); // do this if not validated
            }
        </script>
    @endpush
</x-front-layout>
