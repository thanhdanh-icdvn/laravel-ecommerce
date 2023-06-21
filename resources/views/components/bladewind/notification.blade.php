@props([
    // where do you want the notification displayed
    // available options are top right, top left, bottom right, bottom left
    // top center, bottom center
    'position' => 'top right',
    'position_css' => [
        'top_right' => 'right-4 top-10',
        'right_top' => 'right-4 top-10',
        'top_left' => 'left-4 top-10',
        'left_top' => 'left-4 top-10',
        'bottom_right' => 'right-4 bottom-10',
        'right_bottom' => 'right-4 bottom-10',
        'bottom_left' => 'left-4 bottom-10',
        'left_bottom' => 'right-4 bottom-10',
        'top_center' => 'top-10', //FIXME::
        'center_top' => 'top-10',
        'bottom_center' => 'bottom-10', //FIXME::
        'center_bottom' => 'bottom-10',
    ],
])
<div
    class="{{ $position_css[str_replace(' ', '_', $position)] }} bw-notification dark:shadow-slack-900 fixed z-50 hidden w-11/12 rounded-lg border-2 bg-white p-4 shadow-lg dark:border-0 dark:bg-slate-700 dark:shadow-xl sm:w-1/4">
    <div class="flex">
        <div class="flex-none pr-4">
            <x-bladewind::modal-icon />
        </div>
        <div class="relative flex-grow pb-1 pr-4">
            <h1 class="title font-semibold text-gray-700 dark:text-slate-300">
            </h1>
            <div
                class="message pt-1 text-sm !text-gray-600 dark:!text-slate-400">
            </div>
            <svg xmlns="http://www.w3.org/2000/svg"
                class="absolute -right-1 -top-1 h-5 w-5 cursor-pointer p-1 text-gray-400 hover:bg-gray-200 dark:hover:bg-slate-800"
                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                onclick="hideNotification()">
                <path stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="3" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
    </div>
</div>
<script>
    showNotification = (
        title = '',
        message = '',
        type = 'success',
        dismiss_in = 10) => {
        let border_color = {
            "success": "border-green-400/80",
            "error": "border-red-400/80",
            "warning": "border-yellow-400/80",
            "info": "border-blue-400/80",
        };
        let dismiss_in_seconds = (dismiss_in * 1000);
        dom_el('.bw-notification .title').innerText = title;
        dom_el('.bw-notification .message').innerHTML = message;
        changeCss('.bw-notification',
            `${border_color.success}, ${border_color.error}, ${border_color.info}, ${border_color.warning}`,
            'remove');
        changeCss('.bw-notification', eval(`border_color.${type}`));
        changeCssForDomArray('.modal-icon',
        'hidden'); // hide all modal icons
        unhide(
        `.bw-notification .modal-icon.${type}`); // show only the relevant modal icon
        animateCSS('.bw-notification', 'fadeInRight').then((message) => {
            setTimeout(function() {
                hideNotification();
            }, dismiss_in_seconds);
        });
    }

    hideNotification = function() {
        animateCSS('.bw-notification', 'fadeOutRight').then((message) => {
            hide('.bw-notification');
        });
    }
</script>
