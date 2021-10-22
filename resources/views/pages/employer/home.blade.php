@extends('layouts.employer')

@section('custom')
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.9.0/main.css' rel='stylesheet'/>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.9.0/main.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let calendarEl = document.getElementById('calendar');

            let calendar = new FullCalendar.Calendar(calendarEl, {
                schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
                customButtons: {
                    addShiftsButton: {
                        text: '+ Diensten Toevoegen',
                        click: function () {
                            $('#toggleModal').modal('toggle');
                        }
                    }
                },
                timeZone: 'UTC',
                initialView: 'resourceTimeline',
                aspectRatio: 1.5,
                headerToolbar: {
                    left: 'prev,next addShiftsButton',
                    center: 'title',
                    right: 'resourceTimelineDay,resourceTimelineWeek'
                },
                height: "auto",
                resourceAreaWidth: "10%",
                editable: true,
                resourceAreaHeaderContent: 'Werknemers',
                resources: 'http://127.0.0.1:8000/api/employees',
                events: 'https://fullcalendar.io/demo-events.json?single-day&for-resource-timeline'
            });
            calendar.render();
        });
    </script>
@endsection

@section('content')
    <div id="calendar">
    </div>

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="toggleModal" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <input type="date" class="form-control" value="{{ Carbon\Carbon::today()->format('Y-m-d') }}">
                </div>
                <div class="modal-body">
                    <!-- Livewire Component -->
                    @livewire('shifts')

                </div>
                <div class="modal-footer">
                    <button type="button" id="closeModal" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
