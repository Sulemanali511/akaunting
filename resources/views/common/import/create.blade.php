<x-layouts.admin>
    <x-slot name="title">
        {{ trans('import.title', ['type' => $title_type]) }}
    </x-slot>

    <x-slot name="content">
        <div class="card">
            <x-form id="import" :route="$form_params['route']" :url="$form_params['url']">
                <div class="card-body mt-8">
                    <div class="border-t-4 border-orange-300 rounded-b-lg text-orange-700 px-4 py-3 shadow-md" role="alert">
                        <div class="flex">
                            <div>
                                {!! trans('import.limitations', ['extensions' => strtoupper(config('excel.imports.extensions')),
                                        'row_limit' => config('excel.imports.row_limit')
                                    ])
                                !!}
                            </div>
                        </div>
                    </div>

                    <div class="border-t-4 mt-8 border-blue-300 rounded-b-lg text-blue-700 px-4 py-3 shadow-md" role="alert">
                        <div class="flex">
                            <div>
                                {!! trans('import.sample_file', ['download_link' => $sample_file]) !!}
                            </div>
                        </div>
                    </div>

                    <x-form.group.file name="import" dropzone-class="form-file" singleWidthClasses :options="['acceptedFiles' => '.xls,.xlsx']" form-group-class="mt-8" />
                </div>

                <div class="relative__footer mt-8">
                    <div class="sm:col-span-6 flex items-center justify-end">
                        @if (! empty($route))
                            <a href="{{ route(\Str::replaceFirst('.import', '.index', $route)) }}" class="px-6 py-1.5 mr-2 hover:bg-gray-200 rounded-lg">
                                {{ trans('general.cancel') }}
                            </a>
                        @else
                            <a href="{{ url($path) }}" class="px-6 py-1.5 hover:bg-gray-200 rounded-lg ltr:ml-2 rtl:mr-2">
                                {{ trans('general.cancel') }}
                            </a>
                        @endif

                        <x-button
                            type="submit"
                            class="relative flex items-center justify-center bg-green hover:bg-green-700 text-white px-6 py-1.5 text-base rounded-lg disabled:bg-green-100"
                            ::disabled="form.loading"
                            override="class"
                        >
                            <x-button.loading>
                                {{ trans('import.import') }}
                            </x-button.loading>
                        </x-button>
                    </div>
                </div>
            </x-form>
        </div>
    </x-slot>

    <x-script folder="common" file="imports" />
</x-layouts.admin>