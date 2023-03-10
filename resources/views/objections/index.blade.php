<x-app-layout>
    <div class="py-6">
        <x-slot name="header">
                {{ __('Objections List') }}
        </x-slot>

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
{{--                <x-welcome />--}}
            <div class="mt-8 flow-root">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <table class="min-w-full divide-y divide-gray-300">
                                <table class="min-w-full divide-y divide-gray-300">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">Einwand</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Actions</th>
                                        <th scope="col" class="relative py-3.5 pl-3 pr-6">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                    @foreach ($objections as $objection)
                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-medium text-gray-900">{{ $objection->name }}</td>
                                    </tr>
                                    @endforeach
                                    <!-- More people... -->
                                    </tbody>
                                </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
