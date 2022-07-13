<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcom to Zoom Meetings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-center">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Meeting ID</th>
                                        <th>Meeting Passcode</th>
                                        <th>Meeting Topic</th>
                                        <th>Meeting Status</th>
                                        <th>Meeting Start Time</th>
                                        <th>Meeting Duration</th>
                                        <th>Meeting Timezone</th>
                                        <th>Meeting Agenda</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>{{ $meeting_data['data']['id'] }}</td>
                                            <td>{{ $meeting_data['data']['password'] }}</td>
                                            <td>{{ $meeting_data['data']['topic'] }}</td>
                                            <td>{{ $meeting_data['data']['status'] }}</td>
                                            <td>{{ $meeting_data['data']['start_time'] }}</td>
                                            <td>{{ $meeting_data['data']['duration'] }}</td>
                                            <td>{{ $meeting_data['data']['timezone'] }}</td>
                                            <td>{{ $meeting_data['data']['agenda'] }}</td>
                                            <td
                                                class="flex justify-around">
                                                <a href="{{ route('meetings.update', $meeting_data['data']['id']) }}"
                                                    class="text-blue-700">
                                                    Edit
                                                </a> |
                                                <a href="{{ route('meetings.destroy', $meeting_data['data']['id']) }}"
                                                class="text-red-700">
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
