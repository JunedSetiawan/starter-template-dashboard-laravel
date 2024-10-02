<span class="block mb-1 text-base-content font-sans dark:text-slate-200">
    {!! $label !!}
    @if ($attributes->has('required') || $attributes->has('data-required'))
        <span aria-hidden="true" class="text-red-600" title="{{ __('This field is required') }}">*</span>
    @endif
</span>
