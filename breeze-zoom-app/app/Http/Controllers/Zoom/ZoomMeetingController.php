<?php

namespace App\Http\Controllers\Zoom;

use App\Http\Controllers\Controller;
use App\Models\ZoomMeeting;
use App\Trait\ZoomMeetingTrait;
use Illuminate\Http\Request;

class ZoomMeetingController extends Controller
{
    use ZoomMeetingTrait;

    const MEETING_TYPE_INSTANT = 1;
    const MEETING_TYPE_SCHEDULE = 2;
    const MEETING_TYPE_RECURRING = 3;
    const MEETING_TYPE_FIXED_RECURRING_FIXED = 8;

    public function index()
    {
        return view('meetings.index');
    }

    public function show($id)
    {
        $meeting = $this->get($id);

        return view('meetings.index', compact('meeting'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'meeting_topic' => ['required', 'string'],
            'meeting_agenda' => ['required', 'string'],
            'meeting_start_time' => ['required'],
            'meeting_duration' => ['required', 'string'],
            'meeting_timezone' => ['required', 'string'],
        ]);

        $meeting_data = $this->create($request);

        return view('meetings.show', compact('meeting_data'));
    }

    public function update(Request $request, $meeting)
    {
        $this->update($meeting->zoom_meeting_id, $request->all());

        return redirect()->route('meetings.show');
    }

    public function destroy(ZoomMeeting $meeting)
    {
        $this->delete($meeting->id);

        return $this->sendSuccess('Meeting deleted successfully.');
    }
}
