{{--<span class="self-center text-xl font-bold whitespace-nowrap text-black">--}}
{{--    <i class="fa-solid fa-house fa-2xl"></i>--}}
{{--</span>--}}

{{--<p>--}}
{{--    <i class="fa-solid fa-chalkboard-user fa-2xl"></i>--}}
{{--</p>--}}

{{--<p>--}}
{{--    <i class="fa-solid fa-graduation-cap fa-2xl"></i>--}}
{{--</p>--}}

<span class="self-center text-xl font-bold whitespace-nowrap text-black">
    @if ($iconType === 'house')
        <i class="fa-solid fa-house fa-2xl"></i>
    @elseif ($iconType === 'laptop-code')
{{--        <i class="fa-solid fa-chalkboard-user fa-2xl"></i>--}}
        <i class="fa-solid fa-laptop-code fa-2xl"></i>
    @elseif ($iconType === 'graduation-cap')
        <i class="fa-solid fa-graduation-cap fa-2xl"></i>
    @endif
</span>

