<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcom to Zoom Meetings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-blue-500 border-b border-gray-200">
                    <div class="flex justify-center">
                        <form
                            action="{{ route('meetings.store') }}"
                            method="POST"
                            class="border border-gray-700 rounded p-3 bg-white">
                            @csrf
                            <x-error :errors="$errors"></x-error>
                            <div class="form-title">
                                <h1 class="text-center">
                                    Create Meeting
                                </h1>
                            </div>

                            <x-input
                                type="text"
                                name="meeting_topic"
                                required
                                placeholder="Write meeting topic">
                            </x-input>

                            <x-input
                                type="text"
                                name="meeting_agenda"
                                required
                                placeholder="Write meeting agenda">
                            </x-input>

                            <x-input
                                type="time"
                                name="meeting_start_time"
                                required
                                placeholder="Write meeting agenda">
                            </x-input>

                            <x-input
                                type="number"
                                name="meeting_duration"
                                required
                                placeholder="Write meeting duration">
                            </x-input>

                            <x-label for="select_timezone">
                                Select Timezone
                            </x-label>
                            <x-select name="meeting_timezone" id="select_timezone" value="">
                            </x-select>

                            <div class="flex justify-center">
                                <x-button class="bg-blue-400 hover:bg-blue-500">
                                    Create
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
