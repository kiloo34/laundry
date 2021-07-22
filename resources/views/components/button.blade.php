@props(['type' => 'primary', 'size' => '', 'icon' => ''])
<a {{ $attributes->merge([ 'class' => 'btn '.$icon.' btn-'.$type.' '.$size ]) }}>
    @if ($icon != null)
    <x-icon />
    @endif
    {{$slot}}
</a>