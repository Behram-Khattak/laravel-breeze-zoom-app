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
                        <x-button class="bg-green-400 hover:bg-green-600"
                        data-bs-toggle="modal"
                        data-bs-target="#modelId">
                            Create Meeting
                        </x-button>
                    </div>
                    <div class="flex justify-center">
                        <x-anchor-button :href="route('meetings.show', $id = 1)" class="m-3 bg-blue-400 hover:bg-blue-600">
                            Get Meeting Credentails
                        </x-anchor-button>
                        <x-anchor-button :href="route('meetings.show', $id = 1)" class="m-3 bg-yellow-400 hover:bg-yellow-600">
                            Update Meeting
                        </x-anchor-button>
                        <x-anchor-button :href="route('meetings.show', $id = 1)" class="m-3 bg-red-400 hover:bg-red-600">
                            Delete Meeting Credentails
                        </x-anchor-button>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Body
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
