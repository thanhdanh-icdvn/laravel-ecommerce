<div>
    <div class="bg-white">
        <div
            class="max-w-2xl px-4 pt-16 pb-24 mx-auto sm:pt-24 sm:pb-32 sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
            <div class="flex flex-col-reverse">
                <div class="hidden w-full max-w-2xl mx-auto mt-6 sm:block lg:max-w-none">
                    <div class="grid grid-cols-4 gap-6">
                        @foreach ($product->getMedia('media') as $media)
                            <img src="{{ $media->getUrl() }}" alt=""
                                class="object-cover object-center w-full h-full">
                        @endforeach
                    </div>
                </div>
                <div class="w-full aspect-w-1 aspect-h-1">
                    <img src="{{ $product->getFirstMediaUrl('media') }}"
                        alt="Angled front view with bag zipped and handles upright."
                        class="object-cover object-center w-full h-full sm:rounded-lg">
                </div>
            </div>

            <div>
                <h1 class="text-3xl font-bold text-gray-900">{{ $product->name }}</h1>
                <div class="mt-3">
                    <h2 class="sr-only">Product information</h2>
                    <p class="text-3xl text-gray-900">
                        <x-money :amount="$product->price" :currency="config('app.currency')" />
                    </p>
                </div>
                <div class="mt-3">
                    <h3 class="sr-only">Reviews</h3>
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <svg class="flex-shrink-0 w-5 h-5 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>

                            <svg class="flex-shrink-0 w-5 h-5 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>

                            <svg class="flex-shrink-0 w-5 h-5 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>

                            <svg class="flex-shrink-0 w-5 h-5 text-indigo-500" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>

                            <svg class="flex-shrink-0 w-5 h-5 text-gray-300" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>
                        <p class="sr-only">4 out of 5 stars</p>
                    </div>
                </div>
                <div class="mt-6">
                    <form wire:submit.prevent="addToCart">
                        @if ($product->skus->count())
                            @foreach ($product->options as $index => $option)
                                <div @class(['mt-8' => !$loop->first])>
                                    <h3 class="text-sm font-medium text-gray-900">
                                        {{ $option->name }}
                                    </h3>
                                    <fieldset class="mt-2">
                                        <legend class="sr-only">
                                            {{ __('Choose a') }} {{ $option->name }}
                                        </legend>

                                        @if ($option->visual === 'color')
                                            <div class="flex items-center space-x-3">
                                                @foreach ($option->optionValues as $optionValue)
                                                    <label @class([
                                                        '-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none',
                                                        'ring-2 ring-indigo-500' => in_array(
                                                            $optionValue->id,
                                                            $selectedOptionValues),
                                                    ])>
                                                        <input wire:model="selectedOptionValues.{{ $index }}"
                                                            type="radio" value="{{ $optionValue->id }}"
                                                            class="sr-only"
                                                            aria-labelledby="{{ Str::slug($option->name) }}-choice-{{ $loop->index }}-label">
                                                        <p id="{{ Str::slug($option->name) }}-choice-{{ $loop->index }}-label"
                                                            class="sr-only">
                                                            {{ $optionValue->value }}
                                                        </p>
                                                        <span aria-hidden="true"
                                                            class="w-8 h-8 border border-black rounded-full border-opacity-10"
                                                            style="background-color: {{ $optionValue->value }}"></span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        @else
                                            <div class="grid grid-cols-3 gap-3 sm:grid-cols-6">
                                                @foreach ($option->optionValues as $optionValue)
                                                    <label @class([
                                                        'flex justify-center items-center px-3 py-3 text-sm font-medium uppercase rounded-md border cursor-pointer sm:flex-1 focus:outline-none',
                                                        'ring-2 ring-offset-2 ring-indigo-500 bg-indigo-600 border-transparent text-white hover:bg-indigo-700' => in_array(
                                                            $optionValue->id,
                                                            $selectedOptionValues),
                                                    ])>
                                                        <input wire:model="selectedOptionValues.{{ $index }}"
                                                            type="radio" value="{{ $optionValue->id }}"
                                                            class="sr-only"
                                                            aria-labelledby="{{ Str::slug($option->name) }}-choice-{{ $loop->index }}-label">
                                                        <p
                                                            id="{{ Str::slug($option->name) }}-choice-{{ $loop->index }}-label">
                                                            {{ $optionValue->label ?? $optionValue->value }}
                                                        </p>
                                                    </label>
                                                @endforeach
                                            </div>
                                        @endif
                                    </fieldset>
                                </div>
                            @endforeach
                        @endif

                        <div class="flex items-center mt-8 space-x-3">
                            <div>
                                <x-label for="productQuantity" value="Quantity" class="sr-only" />
                                <x-input wire:model.lazy="addToCart.quantity" type="number" id="productQuantity"
                                    class="py-3 text-sm text-center w-28 sm:text-base" :min="$minQuantity"
                                    :max="$maxQuantity" />
                                <x-input-error for="addToCart.quantity" />
                            </div>
                            <div class="flex w-full">
                                <x-primary-button
                                    class="flex-1 max-w-xs px-8 py-3 font-medium sm:w-full sm:text-base disabled:cursor-not-allowed"
                                    :disabled="$maxQuantity == 0">
                                    {{ $maxQuantity > 0 ? 'Add to cart' : 'Sold out' }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
