@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'resize-none rounded-md shadow-sm']) !!}>
{{$slot}}
</textarea>
