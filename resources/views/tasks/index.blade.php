<x-app-layout>
{{--    <x-slot name="header">--}}
{{--            {{ __('Task List') }}--}}
{{--    </x-slot>--}}

    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Task List') }}</h1>
                <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including their name, title, email and role.</p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-0 sm:flex-none sm:justify-end">
                <a href="{{ route('tasks.create') }}" class="block rounded-md bg-indigo-600 py-2 px-3 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add Task</a>
            </div>

        </div>
        <div class="mt-8 flow-root">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Description</th>
{{--                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Actions</th>--}}
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach ($tasks as $task)
                            <tr>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    {{ $task->description }}
                                </td>
                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                    <a href="{{ route('tasks.show', $task->id) }}" class="text-indigo-600 hover:text-indigo-900">View<span class="sr-only"></span></a>
                                    <a href="{{ route('tasks.edit', $task->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only"></span></a>
                                    <form class="inline-block" action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <!-- More people... -->
                        </tbody>
                    </table>
                    <div class="border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                        <div class="hidden sm:block">
                        {{ $tasks->links() }}
                    </div> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
