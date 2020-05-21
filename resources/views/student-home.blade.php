@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Courses:

            <?php if ($todays_sections->count() > 0) : ?>
                <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Course Code</th>
                            <th class="text-center">Section</th>
                            <th class="text-center">Day</th>
                            <th class="text-center">From</th>
                            <th class="text-center">To</th>
                            <th class="text-center">Location</th>

                        </tr>
                    </thead>
                    <tbody>
                        <div class="scrollbar-container ps--active-y">
                            <?php $length = $todays_sections->count();
                             $days = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'); ?>
                            <?php for ($i = 0; $i < $length; $i++): ?>
                                
                                <tr>
                                <td class="text-center text-muted">{{ $todays_courses[$i]->code}}</td>

                                <td class="text-center text-muted">{{ $todays_sections[$i]->section_code}}</td>
                                
                                <td class="text-center text-muted">{{ $days[$todays_slots[$i]->day]}}</td>
                              
                                <td class="text-center text-muted">{{ $todays_slots[$i]->start_time}}</td>
                              
                                <td class="text-center text-muted">{{ $todays_slots[$i]->end_time}}</td>
                              
                                <td class="text-center text-muted">{{ $todays_sections[$i]->classroom}}</td>
                           
                                </tr>
                                
                            <?php endfor;?>

                        </div>
                    </tbody>
                </table>
                </div>
            <?php else : ?>
                There are no courses today. Sleep well!
            <?php endif;?>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection