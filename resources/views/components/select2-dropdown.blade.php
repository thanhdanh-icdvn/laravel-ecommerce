@props(['options' => [], 'default_option_placeholder' => __('Select option')])
<select class="select-form" id="select2-dropdown">
    <option value="">{{$default_option_placeholder}}</option>
    @foreach ($options as $option)
        <option value="{{ $option }}">{{ $option }}</option>
    @endforeach
</select>
@push('scripts')
<script type="module">
</script>
@endpush
