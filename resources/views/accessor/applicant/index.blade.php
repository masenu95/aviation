@extends('layouts.admin')
@section('content')
<section id="main-content" style="background: #f4f7f6">
    <section class="wrapper">
        <div class="block-header">
            <h3>Applicants</h3>
                <div class="col-12">
                    <div class="list-display-box">
                                        <table id="dt-page" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="th-sm">No:</th>
                                                    <th class="th-sm">Full Name </th>
                                                    <th class="th-sm">Email </th>
                                                    <th class="th-sm">Phone </th>
                                                    <th class="th-sm">Telephone </th>
                                                    <th class="th-sm">Birthday </th>
                                                    <th class="th-sm">Id/passport number </th>
                                                    <th class="th-sm">Gender </th>
                                                    <th class="th-sm">Occupation </th>
                                                    <th class="th-sm">Postal Address </th>
                                                    <th class="th-sm">Postal code</th>
                                                    <th class="th-sm">Created at </th>
                                                    <th class="th-sm">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($reco as $user)
                                                <tr>
                                                        <td>{{$i++}}</td>
                                                        <td>{{ $user->applicant->user->fname.' '.$user->applicant->user->lname }}</td>
                                                        <td>{{ $user->applicant->user->email }}</td>
                                                        <td>{{ $user->applicant->user->phone }}</td>
                                                        <td>{{ $user->applicant->user->telephone }}</td>
                                                        <td>{{ $user->applicant->user->dob }}</td>
                                                        <td>{{ $user->applicant->user->id_no }}</td>
                                                        <td>
                                                            @if ($user->applicant->user->gender==1)
                                                            Male
                                                             @elseif($user->applicant->user->gender==0)
                                                            Female
                                                            @endif
                                                        </td>
                                                        <td>{{ $user->applicant->user->occupation }}</td>
                                                        <td>{{ $user->applicant->user->postal_addr }}</td>
                                                        <td>{{ $user->applicant->user->postal_code }}</td>
                                                        <td>{{ $user->applicant->user->created_at }}</td>
                                                    

                                                <td>
                                                <a href="{{ url('application/'.$user->id) }}">
                                                      
                                                        <i class="fas fa-eye" title="Show"></i>
                                                    </a>

                                                    </td>
                                                </tr>

                                                    @endforeach
                                            </tbody>

                                        </table>
                    </div>
                </div>
        </div>
    </section>
</section>

<script>
    function visibility(ids,name){
        event.preventDefault();
       
        id='#'+ids;
        if($(id).children().hasClass('fa-eye')){
           var action = 'visible';
        }else {
            var action = 'hidden';
        }
        var status ='#status-'+ids;
       

        var result=confirm('Are you sure you want to ' + name+' '+ action );
        if(result){
            var token = '{{ Session::token() }}';
            var url = '{{ url('/visibility') }}';

            $.ajax({
                    method:'POST',
                    url:url,
                    data:{category:ids,_token: token,action:action},
                    success:
                    function(result){
                        $(status).empty();
                        var actions =$(id).children();
                        if(result['success']=='hide'){
                           actions.removeClass('fa-eye-slash');
                           actions.addClass('fa-eye');
                           $(status).text('hidden');
                        }else if(result['success']=='visible'){
                           actions.removeClass('fa-eye');
                           actions.addClass('fa-eye-slash');
                           $(status).text('visible');
                        }                     
                    }
            });

        }
    }

</script>
@endsection
