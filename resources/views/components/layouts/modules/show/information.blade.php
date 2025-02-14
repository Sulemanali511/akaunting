@props(['module'])

<div x-show="price_type == true" class="text-center text-sm mt-3 mb--2">
    <span style="height: 21px;display: block;"></span>
</div>

<div x-show="price_type == false" class="text-center text-sm mt-3 mb--2">
    <span style="font-size: 12px;">
        <span class="text-danger">*</span> <a href="https://akaunting.com/features/why-akaunting-cloud?utm_source=app_show&utm_medium=software&utm_campaign={{ str_replace('-', '', $module->slug) }}" target="_blank">{!! trans('modules.information_monthly') !!}</a>
    </span>
</div>
